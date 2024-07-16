<?php include './include/header.php'; ?>
<title>Hashems - Checkout</title>  
  </head>
  <body>
  <?php include './include/menu.php'; ?>

  <section class="py-5">
    <div class="container">
        <div>
            <a href="/cart" class="breadcrumb-link">
                <span>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.99994 9.99997L3.29294 10.707L2.58594 9.99997L3.29294 9.29297L3.99994 9.99997ZM20.9999 18C20.9999 18.2652 20.8946 18.5195 20.707 18.7071C20.5195 18.8946 20.2652 19 19.9999 19C19.7347 19 19.4804 18.8946 19.2928 18.7071C19.1053 18.5195 18.9999 18.2652 18.9999 18H20.9999ZM8.29294 15.707L3.29294 10.707L4.70694 9.29297L9.70694 14.293L8.29294 15.707ZM3.29294 9.29297L8.29294 4.29297L9.70694 5.70697L4.70694 10.707L3.29294 9.29297ZM3.99994 8.99997H13.9999V11H3.99994V8.99997ZM20.9999 16V18H18.9999V16H20.9999ZM13.9999 8.99997C15.8565 8.99997 17.6369 9.73747 18.9497 11.0502C20.2624 12.363 20.9999 14.1435 20.9999 16H18.9999C18.9999 14.6739 18.4732 13.4021 17.5355 12.4644C16.5978 11.5268 15.326 11 13.9999 11V8.99997Z" fill="black"/>
                    </svg>
                </span>
                <span>back to Cart</span>
            </a>
          
        </div>
        <div class="row mt-4">
            <div class="col-lg-5 mb-4 mb-lg-0">
                <div>
                    <h1 class="fs-40 merriweather-regular">Checkout</h1>
                </div>
                <div class="mt-5">
                    <div class="accordion" id="accordionDetails">
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Email & Shipping Info
                                </button>
                            </div>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionDetails">
                                <div class="accordion-body">
                                    <div>
                                        <div class="mb-4">
                                            <label for="email" class="form-label fs-16 black-color">Email Address for Order Update</label>
                                            <input type="email" class="form-control" id="email" placeholder="Email address">
                                        </div>
                                        <div class="mb-3">
                                            <label for="fullName" class="form-label fs-16 black-color mb-3">Shipping Address</label>
                                            <input type="text" class="form-control" id="fullName" placeholder="Full name*">
                                        </div>
                                        <div class="mb-3">
                                            <input type="text" class="form-control" id="fullName" placeholder="Company (optional)">
                                        </div>
                                        <div class="mb-3">
                                            <select name="country" id="country" class="form-select">
                                                <option value="usa">USA</option>
                                                <option value="canada">Canada</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <input type="text" class="form-control" id="addressOne" placeholder="Address 1*">
                                        </div>
                                        <div class="mb-3">
                                            <input type="text" class="form-control" id="addressTwo" placeholder="Address 2*">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4 mb-3">
                                            <div class="mb-3">
                                                <input type="text" class="form-control" id="zipCode" placeholder="Zip code">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 mb-3">
                                            <div class="mb-3">
                                                <input type="text" class="form-control" id="city" placeholder="City*">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 mb-3">
                                            <div class="mb-3">
                                                <select name="state" id="state" class="form-select">
                                                    <option value="ny">NY</option>
                                                    <option value="texas">Texas</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label fs-16 black-color" for="flexCheckDefault">
                                            <span>Buying for business?</span>
                                            <span>
                                                <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="9.03223" cy="8.28809" r="8.28809" fill="#393939"/>
                                                    <path d="M9.03198 3.4541L10.1174 6.79481L13.6301 6.79481L10.7883 8.85948L11.8738 12.2002L9.03198 10.1355L6.19021 12.2002L7.27567 8.85948L4.43389 6.79481L7.94652 6.79481L9.03198 3.4541Z" fill="#D9D9D9"/>
                                                </svg>
                                            </span>
                                        </label>
                                    </div>
                                    <div>
                                        <a href="#" class="green-btn">Continue</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Delivery & Gift Options
                                </button>
                            </div>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionDetails">
                                <div class="accordion-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <p class="fs-16 fw-bold black-color mt-2">
                                            Delivery Options
                                            </p>
                                            <div class="p-4 rounded-4 border border-1 border-color-black mb-4">
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                                                    <label class="form-check-label w-100 ms-2" for="flexRadioDefault1">
                                                        <div class="fs-16 black-color fw-600 d-flex justify-content-between align-items-start">
                                                            <div>Arrives Wednesday, May 8</div>
                                                            <div>$6.99</div>
                                                        </div>
                                                        <div class="fs-12 black-color">Post Office Priority Mail</div>
                                                    </label>
                                                </div>
                                                <hr class="opacity-100">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                                    <label class="form-check-label w-100 ms-2" for="flexRadioDefault2">
                                                        <div class="fs-16 black-color fw-600 d-flex justify-content-between align-items-start">
                                                            <div>Arrives Wednesday, May 8</div>
                                                            <div>$6.99</div>
                                                        </div>
                                                        <div class="fs-12 black-color">Post Office Priority Mail</div>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="mb-4">
                                                <a href="#" class="fs-16 black-color text-decoration-underline fw-600">Delivery your order at a later date</a>
                                            </div>
                                            <p class="fs-16 fw-bold black-color mt-2">
                                            Gift Options
                                            </p>
                                            <div class="p-4 rounded-4 border border-1 border-color-black mb-4">
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox" value="" id="giftCheckBox">
                                                    <label class="form-check-label w-100 ms-2" for="giftCheckBox">
                                                        <div>
                                                            <div class="fs-16 black-color fw-600">Add Gift Options</div>
                                                            <div class="fs-12 black-color">
                                                            Personalize your gift with a short message or one of our signature greeting cards.
                                                            </div>
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="giftMessage" class="form-label fs-16 black-color fw-600">Free Gift Message</label>
                                                    <textarea class="form-control" id="giftMessage" rows="3" placeholder="Enter gift message here..."></textarea>
                                                </div>
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox" value="" id="includeSenderName">
                                                    <label class="form-check-label black-color fs-16 ms-2" for="includeSenderName">
                                                        Include sender name
                                                    </label>
                                                </div>
                                                <div class="p-3 rounded border border-1 border-color-black">
                                                    <div class="row">
                                                        <div class="col-lg-6 mb-4 mb-lg-0">
                                                            <div class="fs-16 black-color fw-600">
                                                            Upgrade Your Message with a Greeting Card
                                                            </div>
                                                            <div class="fs-14 black-color mb-3">$5.00</div>
                                                            <div>
                                                                <a href="#" class="green-btn w-fit">Add a card</a>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="text-start text-lg-end">
                                                                <img class="img-fluid" width="112" heiht="112" src="/assets/imgs/gift.webp" alt="Card  gift">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <a href="#" class="green-btn">Continue</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Payment Method
                                </button>
                            </div>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionDetails">
                                <div class="accordion-body">
                                    <div class="p-4 rounded-4 border border-1 border-color-black mb-4">
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="radio" name="paymentMethod" id="creditOption" checked>
                                            <label class="form-check-label fs-16 black-color ms-2" for="creditOption">
                                            Credit/Debit Card
                                            </label>
                                            <div class="row mt-3">
                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <input type="text" class="form-control" id="cardNumber" placeholder="Card Number*">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <input type="date" class="form-control" id="expiry" placeholder="Expiry MM/YY*">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <input type="text" class="form-control" id="cvv" placeholder="CVV*">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-check mb-3">
                                                        <input class="form-check-input" type="checkbox" value="" id="saveCard">
                                                        <label class="form-check-label black-color fs-16 ms-2" for="saveCard">
                                                        Save card for future use
                                                        </label>
                                                    </div>
                                                    <div class="black-color fs-16 fw-600 mb-3">Billing Address</div>
                                                    <div class="black-color fs-14 mb-3">Use shipping address</div>
                                                    <div class="black-color fs-14">Username</div>
                                                    <div class="black-color fs-14">Address 1</div>
                                                    <div class="black-color fs-14">Address 2</div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="opacity-100">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="paymentMethod" id="paypalOption">
                                            <label class="form-check-label w-100 ms-2" for="paypalOption">
                                                <div class="fs-16 black-color d-flex justify-content-start align-items-start">
                                                    <div class="me-2">Pay with</div>
                                                    <div>
                                                        <img class="img-fluid" width="88" height="22" loading="lazy" src="/assets/imgs/paypal.webp" alt="Payment method paypal">
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="p-4 rounded-4 border border-1 border-color-black mb-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="payWithGift">
                                            <label class="form-check-label black-color fs-16 ms-2" for="payWithGift">
                                            Pay with  Gift Ceertificate
                                            </label>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="#" class="green-btn w-100 mb-3">Place Order</a>
                                        <p class="fs-16 gray-color-3">
                                        Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our <a href="#" class="purple-color text-decoration-none">privacy policy</a>.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="offset-lg-2 col-lg-5">
                <div class="cart-summery mb-4">
                    <h2 class="fs-16 fw-bold mb-4">Order Summary</h2>
                    <div class="table-responsive">
                        <table class="table table-borderless mb-0">
                            <body>
                                <tr>
                                    <td class="fs-16 black-color">Subtotal</td>
                                    <td class="fs-16 black-color text-end">$83.94</td>
                                </tr>
                                <tr>
                                    <td class="fs-16 black-color">Shipping</td>
                                    <td class="fs-16 black-color text-end">$83.94</td>
                                </tr>
                                <tr>
                                    <td class="fs-16 black-color">Tax</td>
                                    <td class="fs-16 black-color text-end">$83.94</td>
                                </tr>
                                <tr class="border-top">
                                    <td class="fs-16 black-color pt-3">Total</td>
                                    <td class="fs-16 black-color pt-3 text-end">$83.94</td>
                                </tr>
                                <tr>
                                    <td class="fs-16 black-color">Total Savings</td>
                                    <td class="fs-16 black-color text-end">$83.94</td>
                                </tr>
                            </body>
                        </table>
                    </div>
                </div>
                <div class="cart-summery">
                    <div class="accordion" id="itemsAccordion">
                        <div class="accordion-item border-0">
                            <h2 class="accordion-header border-0" id="headingItems">
                                <button class="accordion-button bg-transparent shadow-none collapsed fw-bold fs-16 black-color" type="button" data-bs-toggle="collapse" data-bs-target="#collapseItems" aria-expanded="false" aria-controls="collapseItems">
                                Items in order (4)
                                </button>
                            </h2>
                            <div id="collapseItems" class="accordion-collapse collapse" aria-labelledby="headingItems" data-bs-parent="#itemsAccordion">
                                <div class="accordion-body">
                                    <div class="row mb-3">
                                        <div class="col-lg-3 mb-4 mb-lg-0 h-100">
                                            <div class="d-flex justify-content-lg-center justify-content-start align-items-center">
                                                <img class="img-fluid" loading="lazy" width="85" height="85" src="/assets/imgs/home/productt-1.webp" alt="Hashems - Cart items">
                                            </div>
                                        </div>
                                        <div class="col-lg-9 mb-4 mb-lg-0 h-100">
                                            <p class="fs-16 black-color mb-0">Turkish Coffee 50 Light/50 Dark 16 Oz</p>
                                            <p class="fs-14 mb-0 gray-color-3">1 Pound Bags - $12.99 each</p>
                                            <div class="d-flex w-100 justify-content-between align-items-center mt-2">
                                                <div class="fs-16 black-color fw-600">Qty: 1</div>
                                                <div class="fs-16 black-color fw-600">$1.00</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-lg-3 mb-4 mb-lg-0 h-100">
                                            <div class="d-flex justify-content-lg-center justify-content-start align-items-center">
                                                <img class="img-fluid" loading="lazy" width="85" height="85" src="/assets/imgs/home/productt-1.webp" alt="Hashems - Cart items">
                                            </div>
                                        </div>
                                        <div class="col-lg-9 mb-4 mb-lg-0 h-100">
                                            <p class="fs-16 black-color mb-0">Turkish Coffee 50 Light/50 Dark 16 Oz</p>
                                            <p class="fs-14 mb-0 gray-color-3">1 Pound Bags - $12.99 each</p>
                                            <div class="d-flex w-100 justify-content-between align-items-center mt-2">
                                                <div class="fs-16 black-color fw-600">Qty: 1</div>
                                                <div class="fs-16 black-color fw-600">$1.00</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-lg-3 mb-4 mb-lg-0 h-100">
                                            <div class="d-flex justify-content-lg-center justify-content-start align-items-center">
                                                <img class="img-fluid" loading="lazy" width="85" height="85" src="/assets/imgs/home/productt-1.webp" alt="Hashems - Cart items">
                                            </div>
                                        </div>
                                        <div class="col-lg-9 mb-4 mb-lg-0 h-100">
                                            <p class="fs-16 black-color mb-0">Turkish Coffee 50 Light/50 Dark 16 Oz</p>
                                            <p class="fs-14 mb-0 gray-color-3">1 Pound Bags - $12.99 each</p>
                                            <div class="d-flex w-100 justify-content-between align-items-center mt-2">
                                                <div class="fs-16 black-color fw-600">Qty: 1</div>
                                                <div class="fs-16 black-color fw-600">$1.00</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-lg-3 mb-4 mb-lg-0 h-100">
                                            <div class="d-flex justify-content-lg-center justify-content-start align-items-center">
                                                <img class="img-fluid" loading="lazy" width="85" height="85" src="/assets/imgs/home/productt-1.webp" alt="Hashems - Cart items">
                                            </div>
                                        </div>
                                        <div class="col-lg-9 mb-4 mb-lg-0 h-100">
                                            <p class="fs-16 black-color mb-0">Turkish Coffee 50 Light/50 Dark 16 Oz</p>
                                            <p class="fs-14 mb-0 gray-color-3">1 Pound Bags - $12.99 each</p>
                                            <div class="d-flex w-100 justify-content-between align-items-center mt-2">
                                                <div class="fs-16 black-color fw-600">Qty: 1</div>
                                                <div class="fs-16 black-color fw-600">$1.00</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>


  <?php include './include/footer.php'; ?>

<script src="/assets/js/bootstrap.bundle.min.js" defer></script>
<script src="/assets/js/script.js" defer></script>
</body>
</html>