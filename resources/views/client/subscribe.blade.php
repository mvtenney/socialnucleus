<x-guest-layout>
    <div class="flex w-screen h-screen bg-gray-200">
        <div class="p-4 m-auto bg-white rounded shadow-md">
            <h2 class="text-xl bold">Select Your Plan</h2>
            <form action="{{route('subscribe.post')}}" method="post" id="payment-form" class="py-8 w-96" data-secret="{{$intent->client_secret}}">
                @csrf
                <div class="form-row">
                    <div class="flex flex-col mt-4">
                        <div>
                            <label for="cardholder-name">Cardholder's Name</label>
                            <input type="text" name="cardholder-name" id="cardholder-name" class="p-2 border">
                        </div>

                        <div>
                            <input type="radio" name="plan" id="basic" value="price_1I5HlfImFEtYSr5xDsUg1XCd" checked>
                            <label for="basic">CLASSICAL STARTER PACKAGE</label>
                        </div>

                        <div>
                            <input type="radio" name="plan" id="standard" value="price_1I5IrlImFEtYSr5xDxoTNwv6">
                            <label for="standard">ALL THAT JAZZ PACKAGE</label>
                        </div>

                        <div>
                            <input type="radio" name="plan" id="premium" value="price_1I5IrlImFEtYSr5x82FVBh1V">
                            <label for="premium">BIG BAND PACKAGE</label>
                        </div>
                    </div>
                    <label for="card-element">
                    Credit or debit card
                    </label>
                    <div id="card-element">
                    <!-- A Stripe Element will be inserted here. -->
                    </div>

                    <!-- Used to display form errors. -->
                    <div id="card-errors" role="alert"></div>
                </div>

                <button class="mt-4 yellow-btn">Subscribe Now</button>
            </form>
        </div>
    </div>
    @push('scripts')
        <script src="https://js.stripe.com/v3/"></script>
        <script>
            // Create a Stripe client.
            var stripe = Stripe('pk_test_51Hq5xhImFEtYSr5xSqcc7xWDIW1fYFRT28W74OL49mklVNnmwAtbmRDS09Y8FiP7BqX0QAsxZwFCQi9ZwTcs21gO00k4Y8BEvP');

            // Create an instance of Elements.
            var elements = stripe.elements();

            // Custom styling can be passed to options when creating an Element.
            // (Note that this demo uses a wider set of styles than the guide below.)
            var style = {
            base: {
                color: '#32325d',
                fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                fontSmoothing: 'antialiased',
                fontSize: '16px',
                '::placeholder': {
                color: '#aab7c4'
                }
            },
            invalid: {
                color: '#fa755a',
                iconColor: '#fa755a'
            }
            };

            // Create an instance of the card Element.
            var card = elements.create('card', {style: style});

            // Add an instance of the card Element into the `card-element` <div>.
            card.mount('#card-element');
            // Handle real-time validation errors from the card Element.
            card.on('change', function(event) {
            var displayError = document.getElementById('card-errors');
            if (event.error) {
                displayError.textContent = event.error.message;
            } else {
                displayError.textContent = '';
            }
            });

            // Handle form submission.
            var form = document.getElementById('payment-form');
            var cardHolderName = document.getElementById('cardholder-name');
            var clientSecret = form.dataset.secret

            form.addEventListener('submit', async function(event) {
                event.preventDefault();
                const { setupIntent, error } = await stripe.confirmCardSetup(
                    clientSecret, {
                        payment_method: {
                            card: card,
                            billing_details: { name: cardHolderName.value }
                        }
                    }
                );

                if (error) {
                    var errorElement = document.getElementById('card-errors');
                    errorElement.textContent = error.message;
                } else {
                    stripeTokenHandler(setupIntent);
                }
            });

            // Submit the form with the token ID.
            function stripeTokenHandler(setupIntent) {
                // Insert the token ID into the form so it gets submitted to the server
                var form = document.getElementById('payment-form');
                var hiddenInput = document.createElement('input');
                hiddenInput.setAttribute('type', 'hidden');
                hiddenInput.setAttribute('name', 'paymentMethod');
                hiddenInput.setAttribute('value', setupIntent.payment_method);
                form.appendChild(hiddenInput);

                // Submit the form
                form.submit();
            }
        </script>
    @endpush
</x-guest-layout>
