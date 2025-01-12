<?php include './include/header.php'; ?>
<title>Hashems - Coffee</title>
  </head>
  <body>
  <?php include './include/menu.php'; ?>

  <!-- <div class="mb-3 mb-lg-5">
    <hr class="d-none d-lg-block">
    <div class="ticker-container">
        <div class="ticker">
            <div class="ticker__inner">
                <div class="ticker__item">FREE Shipping over $49 .</div>
                <div class="ticker__item">FREE Shipping over $49 .</div>
                <div class="ticker__item">FREE Shipping over $49 .</div>
                <div class="ticker__item">FREE Shipping over $49 .</div>
                <div class="ticker__item">FREE Shipping over $49 .</div>
                <div class="ticker__item">FREE Shipping over $49 .</div>
                <div class="ticker__item">FREE Shipping over $49 .</div>
                <div class="ticker__item">FREE Shipping over $49 .</div>
                <div class="ticker__item">FREE Shipping over $49 .</div>
                <div class="ticker__item">FREE Shipping over $49 .</div>
                <div class="ticker__item">FREE Shipping over $49 .</div>
                <div class="ticker__item">FREE Shipping over $49 .</div>
                <div class="ticker__item">FREE Shipping over $49 .</div>
                <div class="ticker__item">FREE Shipping over $49 .</div>
                <div class="ticker__item">FREE Shipping over $49 .</div>
                <div class="ticker__item">FREE Shipping over $49 .</div>
            </div>
        </div>
    </div>
  </div> -->

    <main class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="d-flex align-items-center">
                        <a href="/" class="breadcrumb-link">Home</a>
                        <span class="mx-2 fs-18">/</span>
                        <a href="/category" class="breadcrumb-link">Coffee</a>
                    </div>
                    <div class="mt-3 cat-banner" style="background-image: url(/assets/imgs/category/coffee.webp)">
                        <div class="row">
                            <div class="col-md-4">
                                <h1>
                                Coffee
                                </h1>
                                <p>
                                Hashems exclusive Turkish coffee roasted in-house. Customize your coffee with or without cardamom.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3 mb-4 mb-md-0">
                    <div class="pe-0 pe-md-3">
                        <form action="#" method="#">
                            <div class="fs-24 black-color fw-600 mb-4">Filter By</div>
                            <div class="accordion" id="accordionFilter">
                                <div class="accordion-item">
                                    <div class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                        Type
                                        </button>
                                    </div>
                                    <div id="collapseFive" class="accordion-collapse collapse show">
                                        <div class="accordion-body">
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="typeCaffeine">
                                                <label class="form-check-label" for="typeCaffeine">Caffeine</label>
                                            </div>
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" value="" id="typeDecaf">
                                                <label class="form-check-label" for="typeDecaf">Decaf</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                        Roast
                                        </button>
                                    </div>
                                    <div id="collapseSix" class="accordion-collapse collapse show">
                                        <div class="accordion-body">
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="roastSuperLight">
                                                <label class="form-check-label" for="roastSuperLight">Super Light</label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="roastLight">
                                                <label class="form-check-label" for="roastLight">Light</label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="roastMedium">
                                                <label class="form-check-label" for="roastMedium">Medium</label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="roastDark">
                                                <label class="form-check-label" for="roastDark">Dark</label>
                                            </div>
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" value="" id="roastSuperDark">
                                                <label class="form-check-label" for="roastSuperDark">Super Dark</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                        Flavor
                                        </button>
                                    </div>
                                    <div id="collapseSeven" class="accordion-collapse collapse show">
                                        <div class="accordion-body">
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="FlavorUnflavored">
                                                <label class="form-check-label" for="FlavorUnflavored">Unflavored</label>
                                            </div>
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" value="" id="FlavorFlavored">
                                                <label class="form-check-label" for="FlavorFlavored">Flavored</label>
                                            </div>  
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                        Origin
                                        </button>
                                    </div>
                                    <div id="collapseEight" class="accordion-collapse collapse show">
                                        <div class="accordion-body">
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="OriginColombia">
                                                <label class="form-check-label" for="OriginColombia">Colombia</label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="OriginBrazil">
                                                <label class="form-check-label" for="OriginBrazil">Brazil</label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="OriginGuatemala">
                                                <label class="form-check-label" for="OriginGuatemala">Guatemala</label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="OriginEthiopia">
                                                <label class="form-check-label" for="OriginEthiopia">Ethiopia</label>
                                            </div>
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" value="" id="OriginCostaRica">
                                                <label class="form-check-label" for="OriginCostaRica">Costa Rica</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="fs-24 black-color fw-600 mb-4">Search filter</div>
                            <div class="accordion" id="accordionSearch">
                                <div class="accordion-item">
                                    <div class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Discount
                                        </button>
                                    </div>
                                    <div id="collapseThree" class="accordion-collapse collapse show">
                                        <div class="accordion-body">
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="10Off">
                                                <label class="form-check-label" for="10Off">
                                                10% off or more
                                                </label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="20Off">
                                                <label class="form-check-label" for="20Off">
                                                20% off or more
                                                </label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="30Off">
                                                <label class="form-check-label" for="30Off">
                                                30% off or more
                                                </label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="40Off">
                                                <label class="form-check-label" for="40Off">
                                                40% off or more
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="50Off">
                                                <label class="form-check-label" for="50Off">
                                                50% off or more
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Price Range
                                        </button>
                                    </div>
                                    <div id="collapseOne" class="accordion-collapse collapse show">
                                        <div class="accordion-body">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <input type="number" class="form-control" placeholder="MIN">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <input type="number" class="form-control" placeholder="MAX">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Availability
                                        </button>
                                    </div>
                                    <div id="collapseTwo" class="accordion-collapse collapse show">
                                        <div class="accordion-body">
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="radio" name="availability" id="inStock">
                                                <label class="form-check-label" for="inStock">
                                                    In stock
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="availability" id="outOfStock">
                                                <label class="form-check-label" for="outOfStock">
                                                Out of stock
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>      
                                <div class="accordion-item">
                                    <div class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        Ratings
                                        </button>
                                    </div>
                                    <div id="collapseFour" class="accordion-collapse collapse show">
                                        <div class="accordion-body">
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="5Starts">
                                                <label class="form-check-label" for="5Starts">
                                                    <span class="me-2">5 stars</span>
                                                    <span>
                                                        <svg width="79" height="13" viewBox="0 0 79 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <g clip-path="url(#clip0_298_3783)">
                                                            <path d="M12.48 5.1125C12.48 5.2225 12.415 5.3425 12.285 5.4725L9.5625 8.1275L10.2075 11.8775C10.2125 11.9125 10.215 11.9625 10.215 12.0275C10.215 12.1325 10.1888 12.2213 10.1363 12.2938C10.0838 12.3663 10.0075 12.4025 9.9075 12.4025C9.8125 12.4025 9.7125 12.3725 9.6075 12.3125L6.24 10.5425L2.8725 12.3125C2.7625 12.3725 2.6625 12.4025 2.5725 12.4025C2.4675 12.4025 2.38875 12.3663 2.33625 12.2938C2.28375 12.2213 2.2575 12.1325 2.2575 12.0275C2.2575 11.9975 2.2625 11.9475 2.2725 11.8775L2.9175 8.1275L0.1875 5.4725C0.0625 5.3375 0 5.2175 0 5.1125C0 4.9275 0.14 4.8125 0.42 4.7675L4.185 4.22L5.8725 0.8075C5.9675 0.6025 6.09 0.5 6.24 0.5C6.39 0.5 6.5125 0.6025 6.6075 0.8075L8.295 4.22L12.06 4.7675C12.34 4.8125 12.48 4.9275 12.48 5.1125Z" fill="#FFCC00"/>
                                                            </g>
                                                            <g clip-path="url(#clip1_298_3783)">
                                                            <path d="M28.9605 5.1125C28.9605 5.2225 28.8955 5.3425 28.7655 5.4725L26.043 8.1275L26.688 11.8775C26.693 11.9125 26.6955 11.9625 26.6955 12.0275C26.6955 12.1325 26.6692 12.2213 26.6167 12.2938C26.5642 12.3663 26.488 12.4025 26.388 12.4025C26.293 12.4025 26.193 12.3725 26.088 12.3125L22.7205 10.5425L19.353 12.3125C19.243 12.3725 19.143 12.4025 19.053 12.4025C18.948 12.4025 18.8692 12.3663 18.8167 12.2938C18.7642 12.2213 18.738 12.1325 18.738 12.0275C18.738 11.9975 18.743 11.9475 18.753 11.8775L19.398 8.1275L16.668 5.4725C16.543 5.3375 16.4805 5.2175 16.4805 5.1125C16.4805 4.9275 16.6205 4.8125 16.9005 4.7675L20.6655 4.22L22.353 0.8075C22.448 0.6025 22.5705 0.5 22.7205 0.5C22.8705 0.5 22.993 0.6025 23.088 0.8075L24.7755 4.22L28.5405 4.7675C28.8205 4.8125 28.9605 4.9275 28.9605 5.1125Z" fill="#FFCC00"/>
                                                            </g>
                                                            <g clip-path="url(#clip2_298_3783)">
                                                            <path d="M45.4409 5.1125C45.4409 5.2225 45.3759 5.3425 45.2459 5.4725L42.5234 8.1275L43.1684 11.8775C43.1734 11.9125 43.1759 11.9625 43.1759 12.0275C43.1759 12.1325 43.1497 12.2213 43.0972 12.2938C43.0447 12.3663 42.9684 12.4025 42.8684 12.4025C42.7734 12.4025 42.6734 12.3725 42.5684 12.3125L39.2009 10.5425L35.8334 12.3125C35.7234 12.3725 35.6234 12.4025 35.5334 12.4025C35.4284 12.4025 35.3497 12.3663 35.2972 12.2938C35.2447 12.2213 35.2184 12.1325 35.2184 12.0275C35.2184 11.9975 35.2234 11.9475 35.2334 11.8775L35.8784 8.1275L33.1484 5.4725C33.0234 5.3375 32.9609 5.2175 32.9609 5.1125C32.9609 4.9275 33.1009 4.8125 33.3809 4.7675L37.1459 4.22L38.8334 0.8075C38.9284 0.6025 39.0509 0.5 39.2009 0.5C39.3509 0.5 39.4734 0.6025 39.5684 0.8075L41.2559 4.22L45.0209 4.7675C45.3009 4.8125 45.4409 4.9275 45.4409 5.1125Z" fill="#FFCC00"/>
                                                            </g>
                                                            <g clip-path="url(#clip3_298_3783)">
                                                            <path d="M61.9195 5.1125C61.9195 5.2225 61.8545 5.3425 61.7245 5.4725L59.002 8.1275L59.647 11.8775C59.652 11.9125 59.6545 11.9625 59.6545 12.0275C59.6545 12.1325 59.6282 12.2213 59.5757 12.2938C59.5232 12.3663 59.447 12.4025 59.347 12.4025C59.252 12.4025 59.152 12.3725 59.047 12.3125L55.6795 10.5425L52.312 12.3125C52.202 12.3725 52.102 12.4025 52.012 12.4025C51.907 12.4025 51.8282 12.3663 51.7757 12.2938C51.7232 12.2213 51.697 12.1325 51.697 12.0275C51.697 11.9975 51.702 11.9475 51.712 11.8775L52.357 8.1275L49.627 5.4725C49.502 5.3375 49.4395 5.2175 49.4395 5.1125C49.4395 4.9275 49.5795 4.8125 49.8595 4.7675L53.6245 4.22L55.312 0.8075C55.407 0.6025 55.5295 0.5 55.6795 0.5C55.8295 0.5 55.952 0.6025 56.047 0.8075L57.7345 4.22L61.4995 4.7675C61.7795 4.8125 61.9195 4.9275 61.9195 5.1125Z" fill="#FFCC00"/>
                                                            </g>
                                                            <g clip-path="url(#clip4_298_3783)">
                                                            <path d="M78.3999 5.1125C78.3999 5.2225 78.3349 5.3425 78.2049 5.4725L75.4824 8.1275L76.1274 11.8775C76.1324 11.9125 76.1349 11.9625 76.1349 12.0275C76.1349 12.1325 76.1087 12.2213 76.0562 12.2938C76.0037 12.3663 75.9274 12.4025 75.8274 12.4025C75.7324 12.4025 75.6324 12.3725 75.5274 12.3125L72.1599 10.5425L68.7924 12.3125C68.6824 12.3725 68.5824 12.4025 68.4924 12.4025C68.3874 12.4025 68.3087 12.3663 68.2562 12.2938C68.2037 12.2213 68.1774 12.1325 68.1774 12.0275C68.1774 11.9975 68.1824 11.9475 68.1924 11.8775L68.8374 8.1275L66.1074 5.4725C65.9824 5.3375 65.9199 5.2175 65.9199 5.1125C65.9199 4.9275 66.0599 4.8125 66.3399 4.7675L70.1049 4.22L71.7924 0.8075C71.8874 0.6025 72.0099 0.5 72.1599 0.5C72.3099 0.5 72.4324 0.6025 72.5274 0.8075L74.2149 4.22L77.9799 4.7675C78.2599 4.8125 78.3999 4.9275 78.3999 5.1125Z" fill="#FFCC00"/>
                                                            </g>
                                                            <defs>
                                                            <clipPath id="clip0_298_3783">
                                                            <rect width="12.48" height="12" fill="white" transform="translate(0 0.5)"/>
                                                            </clipPath>
                                                            <clipPath id="clip1_298_3783">
                                                            <rect width="12.48" height="12" fill="white" transform="translate(16.4805 0.5)"/>
                                                            </clipPath>
                                                            <clipPath id="clip2_298_3783">
                                                            <rect width="12.48" height="12" fill="white" transform="translate(32.9609 0.5)"/>
                                                            </clipPath>
                                                            <clipPath id="clip3_298_3783">
                                                            <rect width="12.48" height="12" fill="white" transform="translate(49.4395 0.5)"/>
                                                            </clipPath>
                                                            <clipPath id="clip4_298_3783">
                                                            <rect width="12.48" height="12" fill="white" transform="translate(65.9199 0.5)"/>
                                                            </clipPath>
                                                            </defs>
                                                        </svg>
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="4Starts">
                                                <label class="form-check-label" for="4Starts">
                                                    <span class="me-2">4 stars</span>
                                                    <span>
                                                        <svg width="79" height="13" viewBox="0 0 79 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <g clip-path="url(#clip0_298_3787)">
                                                            <path d="M12.48 5.1125C12.48 5.2225 12.415 5.3425 12.285 5.4725L9.5625 8.1275L10.2075 11.8775C10.2125 11.9125 10.215 11.9625 10.215 12.0275C10.215 12.1325 10.1888 12.2213 10.1363 12.2938C10.0838 12.3663 10.0075 12.4025 9.9075 12.4025C9.8125 12.4025 9.7125 12.3725 9.6075 12.3125L6.24 10.5425L2.8725 12.3125C2.7625 12.3725 2.6625 12.4025 2.5725 12.4025C2.4675 12.4025 2.38875 12.3663 2.33625 12.2938C2.28375 12.2213 2.2575 12.1325 2.2575 12.0275C2.2575 11.9975 2.2625 11.9475 2.2725 11.8775L2.9175 8.1275L0.1875 5.4725C0.0625 5.3375 0 5.2175 0 5.1125C0 4.9275 0.14 4.8125 0.42 4.7675L4.185 4.22L5.8725 0.8075C5.9675 0.6025 6.09 0.5 6.24 0.5C6.39 0.5 6.5125 0.6025 6.6075 0.8075L8.295 4.22L12.06 4.7675C12.34 4.8125 12.48 4.9275 12.48 5.1125Z" fill="#FFCC00"/>
                                                            </g>
                                                            <g clip-path="url(#clip1_298_3787)">
                                                            <path d="M28.9605 5.1125C28.9605 5.2225 28.8955 5.3425 28.7655 5.4725L26.043 8.1275L26.688 11.8775C26.693 11.9125 26.6955 11.9625 26.6955 12.0275C26.6955 12.1325 26.6692 12.2213 26.6167 12.2938C26.5642 12.3663 26.488 12.4025 26.388 12.4025C26.293 12.4025 26.193 12.3725 26.088 12.3125L22.7205 10.5425L19.353 12.3125C19.243 12.3725 19.143 12.4025 19.053 12.4025C18.948 12.4025 18.8692 12.3663 18.8167 12.2938C18.7642 12.2213 18.738 12.1325 18.738 12.0275C18.738 11.9975 18.743 11.9475 18.753 11.8775L19.398 8.1275L16.668 5.4725C16.543 5.3375 16.4805 5.2175 16.4805 5.1125C16.4805 4.9275 16.6205 4.8125 16.9005 4.7675L20.6655 4.22L22.353 0.8075C22.448 0.6025 22.5705 0.5 22.7205 0.5C22.8705 0.5 22.993 0.6025 23.088 0.8075L24.7755 4.22L28.5405 4.7675C28.8205 4.8125 28.9605 4.9275 28.9605 5.1125Z" fill="#FFCC00"/>
                                                            </g>
                                                            <g clip-path="url(#clip2_298_3787)">
                                                            <path d="M45.4409 5.1125C45.4409 5.2225 45.3759 5.3425 45.2459 5.4725L42.5234 8.1275L43.1684 11.8775C43.1734 11.9125 43.1759 11.9625 43.1759 12.0275C43.1759 12.1325 43.1497 12.2213 43.0972 12.2938C43.0447 12.3663 42.9684 12.4025 42.8684 12.4025C42.7734 12.4025 42.6734 12.3725 42.5684 12.3125L39.2009 10.5425L35.8334 12.3125C35.7234 12.3725 35.6234 12.4025 35.5334 12.4025C35.4284 12.4025 35.3497 12.3663 35.2972 12.2938C35.2447 12.2213 35.2184 12.1325 35.2184 12.0275C35.2184 11.9975 35.2234 11.9475 35.2334 11.8775L35.8784 8.1275L33.1484 5.4725C33.0234 5.3375 32.9609 5.2175 32.9609 5.1125C32.9609 4.9275 33.1009 4.8125 33.3809 4.7675L37.1459 4.22L38.8334 0.8075C38.9284 0.6025 39.0509 0.5 39.2009 0.5C39.3509 0.5 39.4734 0.6025 39.5684 0.8075L41.2559 4.22L45.0209 4.7675C45.3009 4.8125 45.4409 4.9275 45.4409 5.1125Z" fill="#FFCC00"/>
                                                            </g>
                                                            <g clip-path="url(#clip3_298_3787)">
                                                            <path d="M61.9195 5.1125C61.9195 5.2225 61.8545 5.3425 61.7245 5.4725L59.002 8.1275L59.647 11.8775C59.652 11.9125 59.6545 11.9625 59.6545 12.0275C59.6545 12.1325 59.6282 12.2213 59.5757 12.2938C59.5232 12.3663 59.447 12.4025 59.347 12.4025C59.252 12.4025 59.152 12.3725 59.047 12.3125L55.6795 10.5425L52.312 12.3125C52.202 12.3725 52.102 12.4025 52.012 12.4025C51.907 12.4025 51.8282 12.3663 51.7757 12.2938C51.7232 12.2213 51.697 12.1325 51.697 12.0275C51.697 11.9975 51.702 11.9475 51.712 11.8775L52.357 8.1275L49.627 5.4725C49.502 5.3375 49.4395 5.2175 49.4395 5.1125C49.4395 4.9275 49.5795 4.8125 49.8595 4.7675L53.6245 4.22L55.312 0.8075C55.407 0.6025 55.5295 0.5 55.6795 0.5C55.8295 0.5 55.952 0.6025 56.047 0.8075L57.7345 4.22L61.4995 4.7675C61.7795 4.8125 61.9195 4.9275 61.9195 5.1125Z" fill="#FFCC00"/>
                                                            </g>
                                                            <g clip-path="url(#clip4_298_3787)">
                                                            <path d="M74.4474 7.79L76.7424 5.5625L73.5774 5.0975L72.1599 2.2325L70.7424 5.0975L67.5774 5.5625L69.8724 7.79L69.3249 10.9475L72.1599 9.455L74.9874 10.9475L74.4474 7.79ZM78.3999 5.1125C78.3999 5.2225 78.3349 5.3425 78.2049 5.4725L75.4824 8.1275L76.1274 11.8775C76.1324 11.9125 76.1349 11.9625 76.1349 12.0275C76.1349 12.2775 76.0324 12.4025 75.8274 12.4025C75.7324 12.4025 75.6324 12.3725 75.5274 12.3125L72.1599 10.5425L68.7924 12.3125C68.6824 12.3725 68.5824 12.4025 68.4924 12.4025C68.3874 12.4025 68.3087 12.3663 68.2562 12.2938C68.2037 12.2213 68.1774 12.1325 68.1774 12.0275C68.1774 11.9975 68.1824 11.9475 68.1924 11.8775L68.8374 8.1275L66.1074 5.4725C65.9824 5.3375 65.9199 5.2175 65.9199 5.1125C65.9199 4.9275 66.0599 4.8125 66.3399 4.7675L70.1049 4.22L71.7924 0.8075C71.8874 0.6025 72.0099 0.5 72.1599 0.5C72.3099 0.5 72.4324 0.6025 72.5274 0.8075L74.2149 4.22L77.9799 4.7675C78.2599 4.8125 78.3999 4.9275 78.3999 5.1125Z" fill="#FFCC00"/>
                                                            </g>
                                                            <defs>
                                                            <clipPath id="clip0_298_3787">
                                                            <rect width="12.48" height="12" fill="white" transform="translate(0 0.5)"/>
                                                            </clipPath>
                                                            <clipPath id="clip1_298_3787">
                                                            <rect width="12.48" height="12" fill="white" transform="translate(16.4805 0.5)"/>
                                                            </clipPath>
                                                            <clipPath id="clip2_298_3787">
                                                            <rect width="12.48" height="12" fill="white" transform="translate(32.9609 0.5)"/>
                                                            </clipPath>
                                                            <clipPath id="clip3_298_3787">
                                                            <rect width="12.48" height="12" fill="white" transform="translate(49.4395 0.5)"/>
                                                            </clipPath>
                                                            <clipPath id="clip4_298_3787">
                                                            <rect width="12.48" height="12" fill="white" transform="translate(65.9199 0.5)"/>
                                                            </clipPath>
                                                            </defs>
                                                        </svg>
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="3Starts">
                                                <label class="form-check-label" for="3Starts">
                                                    <span class="me-2">3 stars</span>
                                                    <span>
                                                        <svg width="79" height="13" viewBox="0 0 79 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <g clip-path="url(#clip0_298_3791)">
                                                            <path d="M12.48 5.1125C12.48 5.2225 12.415 5.3425 12.285 5.4725L9.5625 8.1275L10.2075 11.8775C10.2125 11.9125 10.215 11.9625 10.215 12.0275C10.215 12.1325 10.1888 12.2213 10.1363 12.2938C10.0838 12.3663 10.0075 12.4025 9.9075 12.4025C9.8125 12.4025 9.7125 12.3725 9.6075 12.3125L6.24 10.5425L2.8725 12.3125C2.7625 12.3725 2.6625 12.4025 2.5725 12.4025C2.4675 12.4025 2.38875 12.3663 2.33625 12.2938C2.28375 12.2213 2.2575 12.1325 2.2575 12.0275C2.2575 11.9975 2.2625 11.9475 2.2725 11.8775L2.9175 8.1275L0.1875 5.4725C0.0625 5.3375 0 5.2175 0 5.1125C0 4.9275 0.14 4.8125 0.42 4.7675L4.185 4.22L5.8725 0.8075C5.9675 0.6025 6.09 0.5 6.24 0.5C6.39 0.5 6.5125 0.6025 6.6075 0.8075L8.295 4.22L12.06 4.7675C12.34 4.8125 12.48 4.9275 12.48 5.1125Z" fill="#FFCC00"/>
                                                            </g>
                                                            <g clip-path="url(#clip1_298_3791)">
                                                            <path d="M28.9605 5.1125C28.9605 5.2225 28.8955 5.3425 28.7655 5.4725L26.043 8.1275L26.688 11.8775C26.693 11.9125 26.6955 11.9625 26.6955 12.0275C26.6955 12.1325 26.6692 12.2213 26.6167 12.2938C26.5642 12.3663 26.488 12.4025 26.388 12.4025C26.293 12.4025 26.193 12.3725 26.088 12.3125L22.7205 10.5425L19.353 12.3125C19.243 12.3725 19.143 12.4025 19.053 12.4025C18.948 12.4025 18.8692 12.3663 18.8167 12.2938C18.7642 12.2213 18.738 12.1325 18.738 12.0275C18.738 11.9975 18.743 11.9475 18.753 11.8775L19.398 8.1275L16.668 5.4725C16.543 5.3375 16.4805 5.2175 16.4805 5.1125C16.4805 4.9275 16.6205 4.8125 16.9005 4.7675L20.6655 4.22L22.353 0.8075C22.448 0.6025 22.5705 0.5 22.7205 0.5C22.8705 0.5 22.993 0.6025 23.088 0.8075L24.7755 4.22L28.5405 4.7675C28.8205 4.8125 28.9605 4.9275 28.9605 5.1125Z" fill="#FFCC00"/>
                                                            </g>
                                                            <g clip-path="url(#clip2_298_3791)">
                                                            <path d="M45.4409 5.1125C45.4409 5.2225 45.3759 5.3425 45.2459 5.4725L42.5234 8.1275L43.1684 11.8775C43.1734 11.9125 43.1759 11.9625 43.1759 12.0275C43.1759 12.1325 43.1497 12.2213 43.0972 12.2938C43.0447 12.3663 42.9684 12.4025 42.8684 12.4025C42.7734 12.4025 42.6734 12.3725 42.5684 12.3125L39.2009 10.5425L35.8334 12.3125C35.7234 12.3725 35.6234 12.4025 35.5334 12.4025C35.4284 12.4025 35.3497 12.3663 35.2972 12.2938C35.2447 12.2213 35.2184 12.1325 35.2184 12.0275C35.2184 11.9975 35.2234 11.9475 35.2334 11.8775L35.8784 8.1275L33.1484 5.4725C33.0234 5.3375 32.9609 5.2175 32.9609 5.1125C32.9609 4.9275 33.1009 4.8125 33.3809 4.7675L37.1459 4.22L38.8334 0.8075C38.9284 0.6025 39.0509 0.5 39.2009 0.5C39.3509 0.5 39.4734 0.6025 39.5684 0.8075L41.2559 4.22L45.0209 4.7675C45.3009 4.8125 45.4409 4.9275 45.4409 5.1125Z" fill="#FFCC00"/>
                                                            </g>
                                                            <g clip-path="url(#clip3_298_3791)">
                                                            <path d="M57.967 7.79L60.262 5.5625L57.097 5.0975L55.6795 2.2325L54.262 5.0975L51.097 5.5625L53.392 7.79L52.8445 10.9475L55.6795 9.455L58.507 10.9475L57.967 7.79ZM61.9195 5.1125C61.9195 5.2225 61.8545 5.3425 61.7245 5.4725L59.002 8.1275L59.647 11.8775C59.652 11.9125 59.6545 11.9625 59.6545 12.0275C59.6545 12.2775 59.552 12.4025 59.347 12.4025C59.252 12.4025 59.152 12.3725 59.047 12.3125L55.6795 10.5425L52.312 12.3125C52.202 12.3725 52.102 12.4025 52.012 12.4025C51.907 12.4025 51.8282 12.3663 51.7757 12.2938C51.7232 12.2213 51.697 12.1325 51.697 12.0275C51.697 11.9975 51.702 11.9475 51.712 11.8775L52.357 8.1275L49.627 5.4725C49.502 5.3375 49.4395 5.2175 49.4395 5.1125C49.4395 4.9275 49.5795 4.8125 49.8595 4.7675L53.6245 4.22L55.312 0.8075C55.407 0.6025 55.5295 0.5 55.6795 0.5C55.8295 0.5 55.952 0.6025 56.047 0.8075L57.7345 4.22L61.4995 4.7675C61.7795 4.8125 61.9195 4.9275 61.9195 5.1125Z" fill="#FFCC00"/>
                                                            </g>
                                                            <g clip-path="url(#clip4_298_3791)">
                                                            <path d="M74.4474 7.79L76.7424 5.5625L73.5774 5.0975L72.1599 2.2325L70.7424 5.0975L67.5774 5.5625L69.8724 7.79L69.3249 10.9475L72.1599 9.455L74.9874 10.9475L74.4474 7.79ZM78.3999 5.1125C78.3999 5.2225 78.3349 5.3425 78.2049 5.4725L75.4824 8.1275L76.1274 11.8775C76.1324 11.9125 76.1349 11.9625 76.1349 12.0275C76.1349 12.2775 76.0324 12.4025 75.8274 12.4025C75.7324 12.4025 75.6324 12.3725 75.5274 12.3125L72.1599 10.5425L68.7924 12.3125C68.6824 12.3725 68.5824 12.4025 68.4924 12.4025C68.3874 12.4025 68.3087 12.3663 68.2562 12.2938C68.2037 12.2213 68.1774 12.1325 68.1774 12.0275C68.1774 11.9975 68.1824 11.9475 68.1924 11.8775L68.8374 8.1275L66.1074 5.4725C65.9824 5.3375 65.9199 5.2175 65.9199 5.1125C65.9199 4.9275 66.0599 4.8125 66.3399 4.7675L70.1049 4.22L71.7924 0.8075C71.8874 0.6025 72.0099 0.5 72.1599 0.5C72.3099 0.5 72.4324 0.6025 72.5274 0.8075L74.2149 4.22L77.9799 4.7675C78.2599 4.8125 78.3999 4.9275 78.3999 5.1125Z" fill="#FFCC00"/>
                                                            </g>
                                                            <defs>
                                                            <clipPath id="clip0_298_3791">
                                                            <rect width="12.48" height="12" fill="white" transform="translate(0 0.5)"/>
                                                            </clipPath>
                                                            <clipPath id="clip1_298_3791">
                                                            <rect width="12.48" height="12" fill="white" transform="translate(16.4805 0.5)"/>
                                                            </clipPath>
                                                            <clipPath id="clip2_298_3791">
                                                            <rect width="12.48" height="12" fill="white" transform="translate(32.9609 0.5)"/>
                                                            </clipPath>
                                                            <clipPath id="clip3_298_3791">
                                                            <rect width="12.48" height="12" fill="white" transform="translate(49.4395 0.5)"/>
                                                            </clipPath>
                                                            <clipPath id="clip4_298_3791">
                                                            <rect width="12.48" height="12" fill="white" transform="translate(65.9199 0.5)"/>
                                                            </clipPath>
                                                            </defs>
                                                        </svg>
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="2Starts">
                                                <label class="form-check-label" for="2Starts">
                                                    <span class="me-2">2 stars</span>
                                                    <span>
                                                        <svg width="79" height="13" viewBox="0 0 79 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <g clip-path="url(#clip0_298_3795)">
                                                            <path d="M12.48 5.1125C12.48 5.2225 12.415 5.3425 12.285 5.4725L9.5625 8.1275L10.2075 11.8775C10.2125 11.9125 10.215 11.9625 10.215 12.0275C10.215 12.1325 10.1888 12.2213 10.1363 12.2938C10.0838 12.3663 10.0075 12.4025 9.9075 12.4025C9.8125 12.4025 9.7125 12.3725 9.6075 12.3125L6.24 10.5425L2.8725 12.3125C2.7625 12.3725 2.6625 12.4025 2.5725 12.4025C2.4675 12.4025 2.38875 12.3663 2.33625 12.2938C2.28375 12.2213 2.2575 12.1325 2.2575 12.0275C2.2575 11.9975 2.2625 11.9475 2.2725 11.8775L2.9175 8.1275L0.1875 5.4725C0.0625 5.3375 0 5.2175 0 5.1125C0 4.9275 0.14 4.8125 0.42 4.7675L4.185 4.22L5.8725 0.8075C5.9675 0.6025 6.09 0.5 6.24 0.5C6.39 0.5 6.5125 0.6025 6.6075 0.8075L8.295 4.22L12.06 4.7675C12.34 4.8125 12.48 4.9275 12.48 5.1125Z" fill="#FFCC00"/>
                                                            </g>
                                                            <g clip-path="url(#clip1_298_3795)">
                                                            <path d="M28.9605 5.1125C28.9605 5.2225 28.8955 5.3425 28.7655 5.4725L26.043 8.1275L26.688 11.8775C26.693 11.9125 26.6955 11.9625 26.6955 12.0275C26.6955 12.1325 26.6692 12.2213 26.6167 12.2938C26.5642 12.3663 26.488 12.4025 26.388 12.4025C26.293 12.4025 26.193 12.3725 26.088 12.3125L22.7205 10.5425L19.353 12.3125C19.243 12.3725 19.143 12.4025 19.053 12.4025C18.948 12.4025 18.8692 12.3663 18.8167 12.2938C18.7642 12.2213 18.738 12.1325 18.738 12.0275C18.738 11.9975 18.743 11.9475 18.753 11.8775L19.398 8.1275L16.668 5.4725C16.543 5.3375 16.4805 5.2175 16.4805 5.1125C16.4805 4.9275 16.6205 4.8125 16.9005 4.7675L20.6655 4.22L22.353 0.8075C22.448 0.6025 22.5705 0.5 22.7205 0.5C22.8705 0.5 22.993 0.6025 23.088 0.8075L24.7755 4.22L28.5405 4.7675C28.8205 4.8125 28.9605 4.9275 28.9605 5.1125Z" fill="#FFCC00"/>
                                                            </g>
                                                            <g clip-path="url(#clip2_298_3795)">
                                                            <path d="M41.4884 7.79L43.7834 5.5625L40.6184 5.0975L39.2009 2.2325L37.7834 5.0975L34.6184 5.5625L36.9134 7.79L36.3659 10.9475L39.2009 9.455L42.0284 10.9475L41.4884 7.79ZM45.4409 5.1125C45.4409 5.2225 45.3759 5.3425 45.2459 5.4725L42.5234 8.1275L43.1684 11.8775C43.1734 11.9125 43.1759 11.9625 43.1759 12.0275C43.1759 12.2775 43.0734 12.4025 42.8684 12.4025C42.7734 12.4025 42.6734 12.3725 42.5684 12.3125L39.2009 10.5425L35.8334 12.3125C35.7234 12.3725 35.6234 12.4025 35.5334 12.4025C35.4284 12.4025 35.3497 12.3663 35.2972 12.2938C35.2447 12.2213 35.2184 12.1325 35.2184 12.0275C35.2184 11.9975 35.2234 11.9475 35.2334 11.8775L35.8784 8.1275L33.1484 5.4725C33.0234 5.3375 32.9609 5.2175 32.9609 5.1125C32.9609 4.9275 33.1009 4.8125 33.3809 4.7675L37.1459 4.22L38.8334 0.8075C38.9284 0.6025 39.0509 0.5 39.2009 0.5C39.3509 0.5 39.4734 0.6025 39.5684 0.8075L41.2559 4.22L45.0209 4.7675C45.3009 4.8125 45.4409 4.9275 45.4409 5.1125Z" fill="#FFCC00"/>
                                                            </g>
                                                            <g clip-path="url(#clip3_298_3795)">
                                                            <path d="M57.967 7.79L60.262 5.5625L57.097 5.0975L55.6795 2.2325L54.262 5.0975L51.097 5.5625L53.392 7.79L52.8445 10.9475L55.6795 9.455L58.507 10.9475L57.967 7.79ZM61.9195 5.1125C61.9195 5.2225 61.8545 5.3425 61.7245 5.4725L59.002 8.1275L59.647 11.8775C59.652 11.9125 59.6545 11.9625 59.6545 12.0275C59.6545 12.2775 59.552 12.4025 59.347 12.4025C59.252 12.4025 59.152 12.3725 59.047 12.3125L55.6795 10.5425L52.312 12.3125C52.202 12.3725 52.102 12.4025 52.012 12.4025C51.907 12.4025 51.8282 12.3663 51.7757 12.2938C51.7232 12.2213 51.697 12.1325 51.697 12.0275C51.697 11.9975 51.702 11.9475 51.712 11.8775L52.357 8.1275L49.627 5.4725C49.502 5.3375 49.4395 5.2175 49.4395 5.1125C49.4395 4.9275 49.5795 4.8125 49.8595 4.7675L53.6245 4.22L55.312 0.8075C55.407 0.6025 55.5295 0.5 55.6795 0.5C55.8295 0.5 55.952 0.6025 56.047 0.8075L57.7345 4.22L61.4995 4.7675C61.7795 4.8125 61.9195 4.9275 61.9195 5.1125Z" fill="#FFCC00"/>
                                                            </g>
                                                            <g clip-path="url(#clip4_298_3795)">
                                                            <path d="M74.4474 7.79L76.7424 5.5625L73.5774 5.0975L72.1599 2.2325L70.7424 5.0975L67.5774 5.5625L69.8724 7.79L69.3249 10.9475L72.1599 9.455L74.9874 10.9475L74.4474 7.79ZM78.3999 5.1125C78.3999 5.2225 78.3349 5.3425 78.2049 5.4725L75.4824 8.1275L76.1274 11.8775C76.1324 11.9125 76.1349 11.9625 76.1349 12.0275C76.1349 12.2775 76.0324 12.4025 75.8274 12.4025C75.7324 12.4025 75.6324 12.3725 75.5274 12.3125L72.1599 10.5425L68.7924 12.3125C68.6824 12.3725 68.5824 12.4025 68.4924 12.4025C68.3874 12.4025 68.3087 12.3663 68.2562 12.2938C68.2037 12.2213 68.1774 12.1325 68.1774 12.0275C68.1774 11.9975 68.1824 11.9475 68.1924 11.8775L68.8374 8.1275L66.1074 5.4725C65.9824 5.3375 65.9199 5.2175 65.9199 5.1125C65.9199 4.9275 66.0599 4.8125 66.3399 4.7675L70.1049 4.22L71.7924 0.8075C71.8874 0.6025 72.0099 0.5 72.1599 0.5C72.3099 0.5 72.4324 0.6025 72.5274 0.8075L74.2149 4.22L77.9799 4.7675C78.2599 4.8125 78.3999 4.9275 78.3999 5.1125Z" fill="#FFCC00"/>
                                                            </g>
                                                            <defs>
                                                            <clipPath id="clip0_298_3795">
                                                            <rect width="12.48" height="12" fill="white" transform="translate(0 0.5)"/>
                                                            </clipPath>
                                                            <clipPath id="clip1_298_3795">
                                                            <rect width="12.48" height="12" fill="white" transform="translate(16.4805 0.5)"/>
                                                            </clipPath>
                                                            <clipPath id="clip2_298_3795">
                                                            <rect width="12.48" height="12" fill="white" transform="translate(32.9609 0.5)"/>
                                                            </clipPath>
                                                            <clipPath id="clip3_298_3795">
                                                            <rect width="12.48" height="12" fill="white" transform="translate(49.4395 0.5)"/>
                                                            </clipPath>
                                                            <clipPath id="clip4_298_3795">
                                                            <rect width="12.48" height="12" fill="white" transform="translate(65.9199 0.5)"/>
                                                            </clipPath>
                                                            </defs>
                                                        </svg>
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="1Starts">
                                                <label class="form-check-label" for="1Starts">
                                                    <span class="me-3">1 star</span>
                                                    <span>
                                                        <svg width="79" height="13" viewBox="0 0 79 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <g clip-path="url(#clip0_298_3799)">
                                                            <path d="M12.48 5.1125C12.48 5.2225 12.415 5.3425 12.285 5.4725L9.5625 8.1275L10.2075 11.8775C10.2125 11.9125 10.215 11.9625 10.215 12.0275C10.215 12.1325 10.1888 12.2213 10.1363 12.2938C10.0838 12.3663 10.0075 12.4025 9.9075 12.4025C9.8125 12.4025 9.7125 12.3725 9.6075 12.3125L6.24 10.5425L2.8725 12.3125C2.7625 12.3725 2.6625 12.4025 2.5725 12.4025C2.4675 12.4025 2.38875 12.3663 2.33625 12.2938C2.28375 12.2213 2.2575 12.1325 2.2575 12.0275C2.2575 11.9975 2.2625 11.9475 2.2725 11.8775L2.9175 8.1275L0.1875 5.4725C0.0625 5.3375 0 5.2175 0 5.1125C0 4.9275 0.14 4.8125 0.42 4.7675L4.185 4.22L5.8725 0.8075C5.9675 0.6025 6.09 0.5 6.24 0.5C6.39 0.5 6.5125 0.6025 6.6075 0.8075L8.295 4.22L12.06 4.7675C12.34 4.8125 12.48 4.9275 12.48 5.1125Z" fill="#FFCC00"/>
                                                            </g>
                                                            <g clip-path="url(#clip1_298_3799)">
                                                            <path d="M25.008 7.79L27.303 5.5625L24.138 5.0975L22.7205 2.2325L21.303 5.0975L18.138 5.5625L20.433 7.79L19.8855 10.9475L22.7205 9.455L25.548 10.9475L25.008 7.79ZM28.9605 5.1125C28.9605 5.2225 28.8955 5.3425 28.7655 5.4725L26.043 8.1275L26.688 11.8775C26.693 11.9125 26.6955 11.9625 26.6955 12.0275C26.6955 12.2775 26.593 12.4025 26.388 12.4025C26.293 12.4025 26.193 12.3725 26.088 12.3125L22.7205 10.5425L19.353 12.3125C19.243 12.3725 19.143 12.4025 19.053 12.4025C18.948 12.4025 18.8692 12.3663 18.8167 12.2938C18.7642 12.2213 18.738 12.1325 18.738 12.0275C18.738 11.9975 18.743 11.9475 18.753 11.8775L19.398 8.1275L16.668 5.4725C16.543 5.3375 16.4805 5.2175 16.4805 5.1125C16.4805 4.9275 16.6205 4.8125 16.9005 4.7675L20.6655 4.22L22.353 0.8075C22.448 0.6025 22.5705 0.5 22.7205 0.5C22.8705 0.5 22.993 0.6025 23.088 0.8075L24.7755 4.22L28.5405 4.7675C28.8205 4.8125 28.9605 4.9275 28.9605 5.1125Z" fill="#FFCC00"/>
                                                            </g>
                                                            <g clip-path="url(#clip2_298_3799)">
                                                            <path d="M41.4884 7.79L43.7834 5.5625L40.6184 5.0975L39.2009 2.2325L37.7834 5.0975L34.6184 5.5625L36.9134 7.79L36.3659 10.9475L39.2009 9.455L42.0284 10.9475L41.4884 7.79ZM45.4409 5.1125C45.4409 5.2225 45.3759 5.3425 45.2459 5.4725L42.5234 8.1275L43.1684 11.8775C43.1734 11.9125 43.1759 11.9625 43.1759 12.0275C43.1759 12.2775 43.0734 12.4025 42.8684 12.4025C42.7734 12.4025 42.6734 12.3725 42.5684 12.3125L39.2009 10.5425L35.8334 12.3125C35.7234 12.3725 35.6234 12.4025 35.5334 12.4025C35.4284 12.4025 35.3497 12.3663 35.2972 12.2938C35.2447 12.2213 35.2184 12.1325 35.2184 12.0275C35.2184 11.9975 35.2234 11.9475 35.2334 11.8775L35.8784 8.1275L33.1484 5.4725C33.0234 5.3375 32.9609 5.2175 32.9609 5.1125C32.9609 4.9275 33.1009 4.8125 33.3809 4.7675L37.1459 4.22L38.8334 0.8075C38.9284 0.6025 39.0509 0.5 39.2009 0.5C39.3509 0.5 39.4734 0.6025 39.5684 0.8075L41.2559 4.22L45.0209 4.7675C45.3009 4.8125 45.4409 4.9275 45.4409 5.1125Z" fill="#FFCC00"/>
                                                            </g>
                                                            <g clip-path="url(#clip3_298_3799)">
                                                            <path d="M57.967 7.79L60.262 5.5625L57.097 5.0975L55.6795 2.2325L54.262 5.0975L51.097 5.5625L53.392 7.79L52.8445 10.9475L55.6795 9.455L58.507 10.9475L57.967 7.79ZM61.9195 5.1125C61.9195 5.2225 61.8545 5.3425 61.7245 5.4725L59.002 8.1275L59.647 11.8775C59.652 11.9125 59.6545 11.9625 59.6545 12.0275C59.6545 12.2775 59.552 12.4025 59.347 12.4025C59.252 12.4025 59.152 12.3725 59.047 12.3125L55.6795 10.5425L52.312 12.3125C52.202 12.3725 52.102 12.4025 52.012 12.4025C51.907 12.4025 51.8282 12.3663 51.7757 12.2938C51.7232 12.2213 51.697 12.1325 51.697 12.0275C51.697 11.9975 51.702 11.9475 51.712 11.8775L52.357 8.1275L49.627 5.4725C49.502 5.3375 49.4395 5.2175 49.4395 5.1125C49.4395 4.9275 49.5795 4.8125 49.8595 4.7675L53.6245 4.22L55.312 0.8075C55.407 0.6025 55.5295 0.5 55.6795 0.5C55.8295 0.5 55.952 0.6025 56.047 0.8075L57.7345 4.22L61.4995 4.7675C61.7795 4.8125 61.9195 4.9275 61.9195 5.1125Z" fill="#FFCC00"/>
                                                            </g>
                                                            <g clip-path="url(#clip4_298_3799)">
                                                            <path d="M74.4474 7.79L76.7424 5.5625L73.5774 5.0975L72.1599 2.2325L70.7424 5.0975L67.5774 5.5625L69.8724 7.79L69.3249 10.9475L72.1599 9.455L74.9874 10.9475L74.4474 7.79ZM78.3999 5.1125C78.3999 5.2225 78.3349 5.3425 78.2049 5.4725L75.4824 8.1275L76.1274 11.8775C76.1324 11.9125 76.1349 11.9625 76.1349 12.0275C76.1349 12.2775 76.0324 12.4025 75.8274 12.4025C75.7324 12.4025 75.6324 12.3725 75.5274 12.3125L72.1599 10.5425L68.7924 12.3125C68.6824 12.3725 68.5824 12.4025 68.4924 12.4025C68.3874 12.4025 68.3087 12.3663 68.2562 12.2938C68.2037 12.2213 68.1774 12.1325 68.1774 12.0275C68.1774 11.9975 68.1824 11.9475 68.1924 11.8775L68.8374 8.1275L66.1074 5.4725C65.9824 5.3375 65.9199 5.2175 65.9199 5.1125C65.9199 4.9275 66.0599 4.8125 66.3399 4.7675L70.1049 4.22L71.7924 0.8075C71.8874 0.6025 72.0099 0.5 72.1599 0.5C72.3099 0.5 72.4324 0.6025 72.5274 0.8075L74.2149 4.22L77.9799 4.7675C78.2599 4.8125 78.3999 4.9275 78.3999 5.1125Z" fill="#FFCC00"/>
                                                            </g>
                                                            <defs>
                                                            <clipPath id="clip0_298_3799">
                                                            <rect width="12.48" height="12" fill="white" transform="translate(0 0.5)"/>
                                                            </clipPath>
                                                            <clipPath id="clip1_298_3799">
                                                            <rect width="12.48" height="12" fill="white" transform="translate(16.4805 0.5)"/>
                                                            </clipPath>
                                                            <clipPath id="clip2_298_3799">
                                                            <rect width="12.48" height="12" fill="white" transform="translate(32.9609 0.5)"/>
                                                            </clipPath>
                                                            <clipPath id="clip3_298_3799">
                                                            <rect width="12.48" height="12" fill="white" transform="translate(49.4395 0.5)"/>
                                                            </clipPath>
                                                            <clipPath id="clip4_298_3799">
                                                            <rect width="12.48" height="12" fill="white" transform="translate(65.9199 0.5)"/>
                                                            </clipPath>
                                                            </defs>
                                                        </svg>
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
                <div class="col-md-9">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="fs-16 black-color">Showing 1 -16 of 16 results</div>
                        <div class="fs-16 black-color">
                            <span>Sort by <span class="fw-bold">Popularity</span></span>
                            <span class="ms-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#000000" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                                    <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                                </svg>
                            </span>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-6 col-lg-3 mb-4 mx-auto">
                            <div class="cart-item">
                                <a href="/product" class="text-decoration-none">
                                    <div class="image mb-3">
                                        <img
                                        width="233"
                                        height="192"
                                        loading="lazy"
                                        class="img-fluid"
                                        src="/assets/imgs/home/productt-1.webp"
                                        alt="Hashems Turkish Coffee 50 Light/50 Dark 16 Oz"
                                        />
                                    </div>
                                    <div class="px-1">
                                        <div class="fs-14 black-color mb-3">
                                            Turkish Coffee 50 Light/50 Dark 16 Oz
                                        </div>
                                        <div class="fs-14 black-color fw-bold mb-3">
                                            $13.99 - $19.99
                                        </div>
                                        <div class="d-flex w-100 justify-content-between align-items-center mb-3">
                                            <div>
                                                <span>
                                                    <svg
                                                        width="13"
                                                        height="13"
                                                        viewBox="0 0 13 13"
                                                        fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                    >
                                                        <g clip-path="url(#clip0_281_205)">
                                                        <path
                                                            d="M12.48 5.1125C12.48 5.2225 12.415 5.3425 12.285 5.4725L9.5625 8.1275L10.2075 11.8775C10.2125 11.9125 10.215 11.9625 10.215 12.0275C10.215 12.1325 10.1888 12.2213 10.1363 12.2938C10.0838 12.3663 10.0075 12.4025 9.9075 12.4025C9.8125 12.4025 9.7125 12.3725 9.6075 12.3125L6.24 10.5425L2.8725 12.3125C2.7625 12.3725 2.6625 12.4025 2.5725 12.4025C2.4675 12.4025 2.38875 12.3663 2.33625 12.2938C2.28375 12.2213 2.2575 12.1325 2.2575 12.0275C2.2575 11.9975 2.2625 11.9475 2.2725 11.8775L2.9175 8.1275L0.1875 5.4725C0.0625 5.3375 0 5.2175 0 5.1125C0 4.9275 0.14 4.8125 0.42 4.7675L4.185 4.22L5.8725 0.8075C5.9675 0.6025 6.09 0.5 6.24 0.5C6.39 0.5 6.5125 0.6025 6.6075 0.8075L8.295 4.22L12.06 4.7675C12.34 4.8125 12.48 4.9275 12.48 5.1125Z"
                                                            fill="#FFCC00"
                                                        />
                                                        </g>
                                                        <defs>
                                                        <clipPath id="clip0_281_205">
                                                            <rect
                                                            width="12.48"
                                                            height="12"
                                                            fill="white"
                                                            transform="translate(0 0.5)"
                                                            />
                                                        </clipPath>
                                                        </defs>
                                                    </svg>
                                                </span>
                                                <span>
                                                    <svg
                                                        width="13"
                                                        height="13"
                                                        viewBox="0 0 13 13"
                                                        fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                    >
                                                        <g clip-path="url(#clip0_281_205)">
                                                        <path
                                                            d="M12.48 5.1125C12.48 5.2225 12.415 5.3425 12.285 5.4725L9.5625 8.1275L10.2075 11.8775C10.2125 11.9125 10.215 11.9625 10.215 12.0275C10.215 12.1325 10.1888 12.2213 10.1363 12.2938C10.0838 12.3663 10.0075 12.4025 9.9075 12.4025C9.8125 12.4025 9.7125 12.3725 9.6075 12.3125L6.24 10.5425L2.8725 12.3125C2.7625 12.3725 2.6625 12.4025 2.5725 12.4025C2.4675 12.4025 2.38875 12.3663 2.33625 12.2938C2.28375 12.2213 2.2575 12.1325 2.2575 12.0275C2.2575 11.9975 2.2625 11.9475 2.2725 11.8775L2.9175 8.1275L0.1875 5.4725C0.0625 5.3375 0 5.2175 0 5.1125C0 4.9275 0.14 4.8125 0.42 4.7675L4.185 4.22L5.8725 0.8075C5.9675 0.6025 6.09 0.5 6.24 0.5C6.39 0.5 6.5125 0.6025 6.6075 0.8075L8.295 4.22L12.06 4.7675C12.34 4.8125 12.48 4.9275 12.48 5.1125Z"
                                                            fill="#FFCC00"
                                                        />
                                                        </g>
                                                        <defs>
                                                        <clipPath id="clip0_281_205">
                                                            <rect
                                                            width="12.48"
                                                            height="12"
                                                            fill="white"
                                                            transform="translate(0 0.5)"
                                                            />
                                                        </clipPath>
                                                        </defs>
                                                    </svg>
                                                </span>
                                                <span>
                                                    <svg
                                                        width="13"
                                                        height="13"
                                                        viewBox="0 0 13 13"
                                                        fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                    >
                                                        <g clip-path="url(#clip0_281_205)">
                                                        <path
                                                            d="M12.48 5.1125C12.48 5.2225 12.415 5.3425 12.285 5.4725L9.5625 8.1275L10.2075 11.8775C10.2125 11.9125 10.215 11.9625 10.215 12.0275C10.215 12.1325 10.1888 12.2213 10.1363 12.2938C10.0838 12.3663 10.0075 12.4025 9.9075 12.4025C9.8125 12.4025 9.7125 12.3725 9.6075 12.3125L6.24 10.5425L2.8725 12.3125C2.7625 12.3725 2.6625 12.4025 2.5725 12.4025C2.4675 12.4025 2.38875 12.3663 2.33625 12.2938C2.28375 12.2213 2.2575 12.1325 2.2575 12.0275C2.2575 11.9975 2.2625 11.9475 2.2725 11.8775L2.9175 8.1275L0.1875 5.4725C0.0625 5.3375 0 5.2175 0 5.1125C0 4.9275 0.14 4.8125 0.42 4.7675L4.185 4.22L5.8725 0.8075C5.9675 0.6025 6.09 0.5 6.24 0.5C6.39 0.5 6.5125 0.6025 6.6075 0.8075L8.295 4.22L12.06 4.7675C12.34 4.8125 12.48 4.9275 12.48 5.1125Z"
                                                            fill="#FFCC00"
                                                        />
                                                        </g>
                                                        <defs>
                                                        <clipPath id="clip0_281_205">
                                                            <rect
                                                            width="12.48"
                                                            height="12"
                                                            fill="white"
                                                            transform="translate(0 0.5)"
                                                            />
                                                        </clipPath>
                                                        </defs>
                                                    </svg>
                                                </span>
                                                <span>
                                                    <svg
                                                        width="13"
                                                        height="13"
                                                        viewBox="0 0 13 13"
                                                        fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                    >
                                                        <g clip-path="url(#clip0_281_211)">
                                                        <path
                                                            d="M9.335 7.4375L11.2625 5.5625L8.5925 5.1725L8.0975 5.0975L7.8725 4.6475L6.68 2.2325V9.455L7.1225 9.6875L9.5075 10.9475L9.0575 8.285L8.9675 7.79L9.335 7.4375ZM12.725 5.4725L10.0025 8.1275L10.6475 11.8775C10.6725 12.0425 10.6575 12.1713 10.6025 12.2638C10.5475 12.3563 10.4625 12.4025 10.3475 12.4025C10.2625 12.4025 10.1625 12.3725 10.0475 12.3125L6.68 10.5425L3.3125 12.3125C3.1975 12.3725 3.0975 12.4025 3.0125 12.4025C2.8975 12.4025 2.8125 12.3563 2.7575 12.2638C2.7025 12.1713 2.6875 12.0425 2.7125 11.8775L3.3575 8.1275L0.627503 5.4725C0.467503 5.3125 0.410003 5.16375 0.455003 5.02625C0.500003 4.88875 0.635003 4.8025 0.860003 4.7675L4.625 4.22L6.3125 0.8075C6.4125 0.6025 6.535 0.5 6.68 0.5C6.82 0.5 6.9425 0.6025 7.0475 0.8075L8.735 4.22L12.5 4.7675C12.725 4.8025 12.86 4.88875 12.905 5.02625C12.95 5.16375 12.89 5.3125 12.725 5.4725Z"
                                                            fill="#FFCC00"
                                                        />
                                                        </g>
                                                        <defs>
                                                        <clipPath id="clip0_281_211">
                                                            <rect
                                                            width="12.48"
                                                            height="12"
                                                            fill="white"
                                                            transform="translate(0.439941 0.5)"
                                                            />
                                                        </clipPath>
                                                        </defs>
                                                    </svg>
                                                </span>
                                                <span>
                                                    <svg
                                                        width="14"
                                                        height="13"
                                                        viewBox="0 0 14 13"
                                                        fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                    >
                                                        <g clip-path="url(#clip0_281_213)">
                                                        <path
                                                            d="M9.44742 7.79L11.7424 5.5625L8.57742 5.0975L7.15992 2.2325L5.74242 5.0975L2.57742 5.5625L4.87242 7.79L4.32492 10.9475L7.15992 9.455L9.98742 10.9475L9.44742 7.79ZM13.3999 5.1125C13.3999 5.2225 13.3349 5.3425 13.2049 5.4725L10.4824 8.1275L11.1274 11.8775C11.1324 11.9125 11.1349 11.9625 11.1349 12.0275C11.1349 12.2775 11.0324 12.4025 10.8274 12.4025C10.7324 12.4025 10.6324 12.3725 10.5274 12.3125L7.15992 10.5425L3.79242 12.3125C3.68242 12.3725 3.58242 12.4025 3.49242 12.4025C3.38742 12.4025 3.30867 12.3663 3.25617 12.2938C3.20367 12.2213 3.17742 12.1325 3.17742 12.0275C3.17742 11.9975 3.18242 11.9475 3.19242 11.8775L3.83742 8.1275L1.10742 5.4725C0.982422 5.3375 0.919922 5.2175 0.919922 5.1125C0.919922 4.9275 1.05992 4.8125 1.33992 4.7675L5.10492 4.22L6.79242 0.8075C6.88742 0.6025 7.00992 0.5 7.15992 0.5C7.30992 0.5 7.43242 0.6025 7.52742 0.8075L9.21492 4.22L12.9799 4.7675C13.2599 4.8125 13.3999 4.9275 13.3999 5.1125Z"
                                                            fill="#FFCC00"
                                                        />
                                                        </g>
                                                        <defs>
                                                        <clipPath id="clip0_281_213">
                                                            <rect
                                                            width="12.48"
                                                            height="12"
                                                            fill="white"
                                                            transform="translate(0.919922 0.5)"
                                                            />
                                                        </clipPath>
                                                        </defs>
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="fs-12 black-color">9.4k sold</div>
                                        </div>
                                    </div>
                                </a>
                                <a class="cart" href="#"> Add to cart </a>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3 mb-4 mx-auto">
                            <div class="cart-item">
                                <a href="/product" class="text-decoration-none">
                                    <div class="image mb-3">
                                        <img
                                        width="233"
                                        height="192"
                                        loading="lazy"
                                        class="img-fluid"
                                        src="/assets/imgs/home/productt-1.webp"
                                        alt="Hashems Turkish Coffee 50 Light/50 Dark 16 Oz"
                                        />
                                    </div>
                                    <div class="px-1">
                                        <div class="fs-14 black-color mb-3">
                                            Turkish Coffee 50 Light/50 Dark 16 Oz
                                        </div>
                                        <div class="fs-14 black-color fw-bold mb-3">
                                            $13.99 - $19.99
                                        </div>
                                        <div class="d-flex w-100 justify-content-between align-items-center mb-3">
                                            <div>
                                                <span>
                                                    <svg
                                                        width="13"
                                                        height="13"
                                                        viewBox="0 0 13 13"
                                                        fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                    >
                                                        <g clip-path="url(#clip0_281_205)">
                                                        <path
                                                            d="M12.48 5.1125C12.48 5.2225 12.415 5.3425 12.285 5.4725L9.5625 8.1275L10.2075 11.8775C10.2125 11.9125 10.215 11.9625 10.215 12.0275C10.215 12.1325 10.1888 12.2213 10.1363 12.2938C10.0838 12.3663 10.0075 12.4025 9.9075 12.4025C9.8125 12.4025 9.7125 12.3725 9.6075 12.3125L6.24 10.5425L2.8725 12.3125C2.7625 12.3725 2.6625 12.4025 2.5725 12.4025C2.4675 12.4025 2.38875 12.3663 2.33625 12.2938C2.28375 12.2213 2.2575 12.1325 2.2575 12.0275C2.2575 11.9975 2.2625 11.9475 2.2725 11.8775L2.9175 8.1275L0.1875 5.4725C0.0625 5.3375 0 5.2175 0 5.1125C0 4.9275 0.14 4.8125 0.42 4.7675L4.185 4.22L5.8725 0.8075C5.9675 0.6025 6.09 0.5 6.24 0.5C6.39 0.5 6.5125 0.6025 6.6075 0.8075L8.295 4.22L12.06 4.7675C12.34 4.8125 12.48 4.9275 12.48 5.1125Z"
                                                            fill="#FFCC00"
                                                        />
                                                        </g>
                                                        <defs>
                                                        <clipPath id="clip0_281_205">
                                                            <rect
                                                            width="12.48"
                                                            height="12"
                                                            fill="white"
                                                            transform="translate(0 0.5)"
                                                            />
                                                        </clipPath>
                                                        </defs>
                                                    </svg>
                                                </span>
                                                <span>
                                                    <svg
                                                        width="13"
                                                        height="13"
                                                        viewBox="0 0 13 13"
                                                        fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                    >
                                                        <g clip-path="url(#clip0_281_205)">
                                                        <path
                                                            d="M12.48 5.1125C12.48 5.2225 12.415 5.3425 12.285 5.4725L9.5625 8.1275L10.2075 11.8775C10.2125 11.9125 10.215 11.9625 10.215 12.0275C10.215 12.1325 10.1888 12.2213 10.1363 12.2938C10.0838 12.3663 10.0075 12.4025 9.9075 12.4025C9.8125 12.4025 9.7125 12.3725 9.6075 12.3125L6.24 10.5425L2.8725 12.3125C2.7625 12.3725 2.6625 12.4025 2.5725 12.4025C2.4675 12.4025 2.38875 12.3663 2.33625 12.2938C2.28375 12.2213 2.2575 12.1325 2.2575 12.0275C2.2575 11.9975 2.2625 11.9475 2.2725 11.8775L2.9175 8.1275L0.1875 5.4725C0.0625 5.3375 0 5.2175 0 5.1125C0 4.9275 0.14 4.8125 0.42 4.7675L4.185 4.22L5.8725 0.8075C5.9675 0.6025 6.09 0.5 6.24 0.5C6.39 0.5 6.5125 0.6025 6.6075 0.8075L8.295 4.22L12.06 4.7675C12.34 4.8125 12.48 4.9275 12.48 5.1125Z"
                                                            fill="#FFCC00"
                                                        />
                                                        </g>
                                                        <defs>
                                                        <clipPath id="clip0_281_205">
                                                            <rect
                                                            width="12.48"
                                                            height="12"
                                                            fill="white"
                                                            transform="translate(0 0.5)"
                                                            />
                                                        </clipPath>
                                                        </defs>
                                                    </svg>
                                                </span>
                                                <span>
                                                    <svg
                                                        width="13"
                                                        height="13"
                                                        viewBox="0 0 13 13"
                                                        fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                    >
                                                        <g clip-path="url(#clip0_281_205)">
                                                        <path
                                                            d="M12.48 5.1125C12.48 5.2225 12.415 5.3425 12.285 5.4725L9.5625 8.1275L10.2075 11.8775C10.2125 11.9125 10.215 11.9625 10.215 12.0275C10.215 12.1325 10.1888 12.2213 10.1363 12.2938C10.0838 12.3663 10.0075 12.4025 9.9075 12.4025C9.8125 12.4025 9.7125 12.3725 9.6075 12.3125L6.24 10.5425L2.8725 12.3125C2.7625 12.3725 2.6625 12.4025 2.5725 12.4025C2.4675 12.4025 2.38875 12.3663 2.33625 12.2938C2.28375 12.2213 2.2575 12.1325 2.2575 12.0275C2.2575 11.9975 2.2625 11.9475 2.2725 11.8775L2.9175 8.1275L0.1875 5.4725C0.0625 5.3375 0 5.2175 0 5.1125C0 4.9275 0.14 4.8125 0.42 4.7675L4.185 4.22L5.8725 0.8075C5.9675 0.6025 6.09 0.5 6.24 0.5C6.39 0.5 6.5125 0.6025 6.6075 0.8075L8.295 4.22L12.06 4.7675C12.34 4.8125 12.48 4.9275 12.48 5.1125Z"
                                                            fill="#FFCC00"
                                                        />
                                                        </g>
                                                        <defs>
                                                        <clipPath id="clip0_281_205">
                                                            <rect
                                                            width="12.48"
                                                            height="12"
                                                            fill="white"
                                                            transform="translate(0 0.5)"
                                                            />
                                                        </clipPath>
                                                        </defs>
                                                    </svg>
                                                </span>
                                                <span>
                                                    <svg
                                                        width="13"
                                                        height="13"
                                                        viewBox="0 0 13 13"
                                                        fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                    >
                                                        <g clip-path="url(#clip0_281_211)">
                                                        <path
                                                            d="M9.335 7.4375L11.2625 5.5625L8.5925 5.1725L8.0975 5.0975L7.8725 4.6475L6.68 2.2325V9.455L7.1225 9.6875L9.5075 10.9475L9.0575 8.285L8.9675 7.79L9.335 7.4375ZM12.725 5.4725L10.0025 8.1275L10.6475 11.8775C10.6725 12.0425 10.6575 12.1713 10.6025 12.2638C10.5475 12.3563 10.4625 12.4025 10.3475 12.4025C10.2625 12.4025 10.1625 12.3725 10.0475 12.3125L6.68 10.5425L3.3125 12.3125C3.1975 12.3725 3.0975 12.4025 3.0125 12.4025C2.8975 12.4025 2.8125 12.3563 2.7575 12.2638C2.7025 12.1713 2.6875 12.0425 2.7125 11.8775L3.3575 8.1275L0.627503 5.4725C0.467503 5.3125 0.410003 5.16375 0.455003 5.02625C0.500003 4.88875 0.635003 4.8025 0.860003 4.7675L4.625 4.22L6.3125 0.8075C6.4125 0.6025 6.535 0.5 6.68 0.5C6.82 0.5 6.9425 0.6025 7.0475 0.8075L8.735 4.22L12.5 4.7675C12.725 4.8025 12.86 4.88875 12.905 5.02625C12.95 5.16375 12.89 5.3125 12.725 5.4725Z"
                                                            fill="#FFCC00"
                                                        />
                                                        </g>
                                                        <defs>
                                                        <clipPath id="clip0_281_211">
                                                            <rect
                                                            width="12.48"
                                                            height="12"
                                                            fill="white"
                                                            transform="translate(0.439941 0.5)"
                                                            />
                                                        </clipPath>
                                                        </defs>
                                                    </svg>
                                                </span>
                                                <span>
                                                    <svg
                                                        width="14"
                                                        height="13"
                                                        viewBox="0 0 14 13"
                                                        fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                    >
                                                        <g clip-path="url(#clip0_281_213)">
                                                        <path
                                                            d="M9.44742 7.79L11.7424 5.5625L8.57742 5.0975L7.15992 2.2325L5.74242 5.0975L2.57742 5.5625L4.87242 7.79L4.32492 10.9475L7.15992 9.455L9.98742 10.9475L9.44742 7.79ZM13.3999 5.1125C13.3999 5.2225 13.3349 5.3425 13.2049 5.4725L10.4824 8.1275L11.1274 11.8775C11.1324 11.9125 11.1349 11.9625 11.1349 12.0275C11.1349 12.2775 11.0324 12.4025 10.8274 12.4025C10.7324 12.4025 10.6324 12.3725 10.5274 12.3125L7.15992 10.5425L3.79242 12.3125C3.68242 12.3725 3.58242 12.4025 3.49242 12.4025C3.38742 12.4025 3.30867 12.3663 3.25617 12.2938C3.20367 12.2213 3.17742 12.1325 3.17742 12.0275C3.17742 11.9975 3.18242 11.9475 3.19242 11.8775L3.83742 8.1275L1.10742 5.4725C0.982422 5.3375 0.919922 5.2175 0.919922 5.1125C0.919922 4.9275 1.05992 4.8125 1.33992 4.7675L5.10492 4.22L6.79242 0.8075C6.88742 0.6025 7.00992 0.5 7.15992 0.5C7.30992 0.5 7.43242 0.6025 7.52742 0.8075L9.21492 4.22L12.9799 4.7675C13.2599 4.8125 13.3999 4.9275 13.3999 5.1125Z"
                                                            fill="#FFCC00"
                                                        />
                                                        </g>
                                                        <defs>
                                                        <clipPath id="clip0_281_213">
                                                            <rect
                                                            width="12.48"
                                                            height="12"
                                                            fill="white"
                                                            transform="translate(0.919922 0.5)"
                                                            />
                                                        </clipPath>
                                                        </defs>
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="fs-12 black-color">9.4k sold</div>
                                        </div>
                                    </div>
                                </a>
                                <a class="cart" href="#"> Add to cart </a>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3 mb-4 mx-auto">
                            <div class="cart-item">
                                <a href="/product" class="text-decoration-none">
                                    <div class="image mb-3">
                                        <img
                                        width="233"
                                        height="192"
                                        loading="lazy"
                                        class="img-fluid"
                                        src="/assets/imgs/home/productt-1.webp"
                                        alt="Hashems Turkish Coffee 50 Light/50 Dark 16 Oz"
                                        />
                                    </div>
                                    <div class="px-1">
                                        <div class="fs-14 black-color mb-3">
                                            Turkish Coffee 50 Light/50 Dark 16 Oz
                                        </div>
                                        <div class="fs-14 black-color fw-bold mb-3">
                                            $13.99 - $19.99
                                        </div>
                                        <div class="d-flex w-100 justify-content-between align-items-center mb-3">
                                            <div>
                                                <span>
                                                    <svg
                                                        width="13"
                                                        height="13"
                                                        viewBox="0 0 13 13"
                                                        fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                    >
                                                        <g clip-path="url(#clip0_281_205)">
                                                        <path
                                                            d="M12.48 5.1125C12.48 5.2225 12.415 5.3425 12.285 5.4725L9.5625 8.1275L10.2075 11.8775C10.2125 11.9125 10.215 11.9625 10.215 12.0275C10.215 12.1325 10.1888 12.2213 10.1363 12.2938C10.0838 12.3663 10.0075 12.4025 9.9075 12.4025C9.8125 12.4025 9.7125 12.3725 9.6075 12.3125L6.24 10.5425L2.8725 12.3125C2.7625 12.3725 2.6625 12.4025 2.5725 12.4025C2.4675 12.4025 2.38875 12.3663 2.33625 12.2938C2.28375 12.2213 2.2575 12.1325 2.2575 12.0275C2.2575 11.9975 2.2625 11.9475 2.2725 11.8775L2.9175 8.1275L0.1875 5.4725C0.0625 5.3375 0 5.2175 0 5.1125C0 4.9275 0.14 4.8125 0.42 4.7675L4.185 4.22L5.8725 0.8075C5.9675 0.6025 6.09 0.5 6.24 0.5C6.39 0.5 6.5125 0.6025 6.6075 0.8075L8.295 4.22L12.06 4.7675C12.34 4.8125 12.48 4.9275 12.48 5.1125Z"
                                                            fill="#FFCC00"
                                                        />
                                                        </g>
                                                        <defs>
                                                        <clipPath id="clip0_281_205">
                                                            <rect
                                                            width="12.48"
                                                            height="12"
                                                            fill="white"
                                                            transform="translate(0 0.5)"
                                                            />
                                                        </clipPath>
                                                        </defs>
                                                    </svg>
                                                </span>
                                                <span>
                                                    <svg
                                                        width="13"
                                                        height="13"
                                                        viewBox="0 0 13 13"
                                                        fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                    >
                                                        <g clip-path="url(#clip0_281_205)">
                                                        <path
                                                            d="M12.48 5.1125C12.48 5.2225 12.415 5.3425 12.285 5.4725L9.5625 8.1275L10.2075 11.8775C10.2125 11.9125 10.215 11.9625 10.215 12.0275C10.215 12.1325 10.1888 12.2213 10.1363 12.2938C10.0838 12.3663 10.0075 12.4025 9.9075 12.4025C9.8125 12.4025 9.7125 12.3725 9.6075 12.3125L6.24 10.5425L2.8725 12.3125C2.7625 12.3725 2.6625 12.4025 2.5725 12.4025C2.4675 12.4025 2.38875 12.3663 2.33625 12.2938C2.28375 12.2213 2.2575 12.1325 2.2575 12.0275C2.2575 11.9975 2.2625 11.9475 2.2725 11.8775L2.9175 8.1275L0.1875 5.4725C0.0625 5.3375 0 5.2175 0 5.1125C0 4.9275 0.14 4.8125 0.42 4.7675L4.185 4.22L5.8725 0.8075C5.9675 0.6025 6.09 0.5 6.24 0.5C6.39 0.5 6.5125 0.6025 6.6075 0.8075L8.295 4.22L12.06 4.7675C12.34 4.8125 12.48 4.9275 12.48 5.1125Z"
                                                            fill="#FFCC00"
                                                        />
                                                        </g>
                                                        <defs>
                                                        <clipPath id="clip0_281_205">
                                                            <rect
                                                            width="12.48"
                                                            height="12"
                                                            fill="white"
                                                            transform="translate(0 0.5)"
                                                            />
                                                        </clipPath>
                                                        </defs>
                                                    </svg>
                                                </span>
                                                <span>
                                                    <svg
                                                        width="13"
                                                        height="13"
                                                        viewBox="0 0 13 13"
                                                        fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                    >
                                                        <g clip-path="url(#clip0_281_205)">
                                                        <path
                                                            d="M12.48 5.1125C12.48 5.2225 12.415 5.3425 12.285 5.4725L9.5625 8.1275L10.2075 11.8775C10.2125 11.9125 10.215 11.9625 10.215 12.0275C10.215 12.1325 10.1888 12.2213 10.1363 12.2938C10.0838 12.3663 10.0075 12.4025 9.9075 12.4025C9.8125 12.4025 9.7125 12.3725 9.6075 12.3125L6.24 10.5425L2.8725 12.3125C2.7625 12.3725 2.6625 12.4025 2.5725 12.4025C2.4675 12.4025 2.38875 12.3663 2.33625 12.2938C2.28375 12.2213 2.2575 12.1325 2.2575 12.0275C2.2575 11.9975 2.2625 11.9475 2.2725 11.8775L2.9175 8.1275L0.1875 5.4725C0.0625 5.3375 0 5.2175 0 5.1125C0 4.9275 0.14 4.8125 0.42 4.7675L4.185 4.22L5.8725 0.8075C5.9675 0.6025 6.09 0.5 6.24 0.5C6.39 0.5 6.5125 0.6025 6.6075 0.8075L8.295 4.22L12.06 4.7675C12.34 4.8125 12.48 4.9275 12.48 5.1125Z"
                                                            fill="#FFCC00"
                                                        />
                                                        </g>
                                                        <defs>
                                                        <clipPath id="clip0_281_205">
                                                            <rect
                                                            width="12.48"
                                                            height="12"
                                                            fill="white"
                                                            transform="translate(0 0.5)"
                                                            />
                                                        </clipPath>
                                                        </defs>
                                                    </svg>
                                                </span>
                                                <span>
                                                    <svg
                                                        width="13"
                                                        height="13"
                                                        viewBox="0 0 13 13"
                                                        fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                    >
                                                        <g clip-path="url(#clip0_281_211)">
                                                        <path
                                                            d="M9.335 7.4375L11.2625 5.5625L8.5925 5.1725L8.0975 5.0975L7.8725 4.6475L6.68 2.2325V9.455L7.1225 9.6875L9.5075 10.9475L9.0575 8.285L8.9675 7.79L9.335 7.4375ZM12.725 5.4725L10.0025 8.1275L10.6475 11.8775C10.6725 12.0425 10.6575 12.1713 10.6025 12.2638C10.5475 12.3563 10.4625 12.4025 10.3475 12.4025C10.2625 12.4025 10.1625 12.3725 10.0475 12.3125L6.68 10.5425L3.3125 12.3125C3.1975 12.3725 3.0975 12.4025 3.0125 12.4025C2.8975 12.4025 2.8125 12.3563 2.7575 12.2638C2.7025 12.1713 2.6875 12.0425 2.7125 11.8775L3.3575 8.1275L0.627503 5.4725C0.467503 5.3125 0.410003 5.16375 0.455003 5.02625C0.500003 4.88875 0.635003 4.8025 0.860003 4.7675L4.625 4.22L6.3125 0.8075C6.4125 0.6025 6.535 0.5 6.68 0.5C6.82 0.5 6.9425 0.6025 7.0475 0.8075L8.735 4.22L12.5 4.7675C12.725 4.8025 12.86 4.88875 12.905 5.02625C12.95 5.16375 12.89 5.3125 12.725 5.4725Z"
                                                            fill="#FFCC00"
                                                        />
                                                        </g>
                                                        <defs>
                                                        <clipPath id="clip0_281_211">
                                                            <rect
                                                            width="12.48"
                                                            height="12"
                                                            fill="white"
                                                            transform="translate(0.439941 0.5)"
                                                            />
                                                        </clipPath>
                                                        </defs>
                                                    </svg>
                                                </span>
                                                <span>
                                                    <svg
                                                        width="14"
                                                        height="13"
                                                        viewBox="0 0 14 13"
                                                        fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                    >
                                                        <g clip-path="url(#clip0_281_213)">
                                                        <path
                                                            d="M9.44742 7.79L11.7424 5.5625L8.57742 5.0975L7.15992 2.2325L5.74242 5.0975L2.57742 5.5625L4.87242 7.79L4.32492 10.9475L7.15992 9.455L9.98742 10.9475L9.44742 7.79ZM13.3999 5.1125C13.3999 5.2225 13.3349 5.3425 13.2049 5.4725L10.4824 8.1275L11.1274 11.8775C11.1324 11.9125 11.1349 11.9625 11.1349 12.0275C11.1349 12.2775 11.0324 12.4025 10.8274 12.4025C10.7324 12.4025 10.6324 12.3725 10.5274 12.3125L7.15992 10.5425L3.79242 12.3125C3.68242 12.3725 3.58242 12.4025 3.49242 12.4025C3.38742 12.4025 3.30867 12.3663 3.25617 12.2938C3.20367 12.2213 3.17742 12.1325 3.17742 12.0275C3.17742 11.9975 3.18242 11.9475 3.19242 11.8775L3.83742 8.1275L1.10742 5.4725C0.982422 5.3375 0.919922 5.2175 0.919922 5.1125C0.919922 4.9275 1.05992 4.8125 1.33992 4.7675L5.10492 4.22L6.79242 0.8075C6.88742 0.6025 7.00992 0.5 7.15992 0.5C7.30992 0.5 7.43242 0.6025 7.52742 0.8075L9.21492 4.22L12.9799 4.7675C13.2599 4.8125 13.3999 4.9275 13.3999 5.1125Z"
                                                            fill="#FFCC00"
                                                        />
                                                        </g>
                                                        <defs>
                                                        <clipPath id="clip0_281_213">
                                                            <rect
                                                            width="12.48"
                                                            height="12"
                                                            fill="white"
                                                            transform="translate(0.919922 0.5)"
                                                            />
                                                        </clipPath>
                                                        </defs>
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="fs-12 black-color">9.4k sold</div>
                                        </div>
                                    </div>
                                </a>
                                <a class="cart" href="#"> Add to cart </a>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3 mb-4 mx-auto">
                            <div class="cart-item">
                                <a href="/product" class="text-decoration-none">
                                    <div class="image mb-3">
                                        <img
                                        width="233"
                                        height="192"
                                        loading="lazy"
                                        class="img-fluid"
                                        src="/assets/imgs/home/productt-1.webp"
                                        alt="Hashems Turkish Coffee 50 Light/50 Dark 16 Oz"
                                        />
                                    </div>
                                    <div class="px-1">
                                        <div class="fs-14 black-color mb-3">
                                            Turkish Coffee 50 Light/50 Dark 16 Oz
                                        </div>
                                        <div class="fs-14 black-color fw-bold mb-3">
                                            $13.99 - $19.99
                                        </div>
                                        <div class="d-flex w-100 justify-content-between align-items-center mb-3">
                                            <div>
                                                <span>
                                                    <svg
                                                        width="13"
                                                        height="13"
                                                        viewBox="0 0 13 13"
                                                        fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                    >
                                                        <g clip-path="url(#clip0_281_205)">
                                                        <path
                                                            d="M12.48 5.1125C12.48 5.2225 12.415 5.3425 12.285 5.4725L9.5625 8.1275L10.2075 11.8775C10.2125 11.9125 10.215 11.9625 10.215 12.0275C10.215 12.1325 10.1888 12.2213 10.1363 12.2938C10.0838 12.3663 10.0075 12.4025 9.9075 12.4025C9.8125 12.4025 9.7125 12.3725 9.6075 12.3125L6.24 10.5425L2.8725 12.3125C2.7625 12.3725 2.6625 12.4025 2.5725 12.4025C2.4675 12.4025 2.38875 12.3663 2.33625 12.2938C2.28375 12.2213 2.2575 12.1325 2.2575 12.0275C2.2575 11.9975 2.2625 11.9475 2.2725 11.8775L2.9175 8.1275L0.1875 5.4725C0.0625 5.3375 0 5.2175 0 5.1125C0 4.9275 0.14 4.8125 0.42 4.7675L4.185 4.22L5.8725 0.8075C5.9675 0.6025 6.09 0.5 6.24 0.5C6.39 0.5 6.5125 0.6025 6.6075 0.8075L8.295 4.22L12.06 4.7675C12.34 4.8125 12.48 4.9275 12.48 5.1125Z"
                                                            fill="#FFCC00"
                                                        />
                                                        </g>
                                                        <defs>
                                                        <clipPath id="clip0_281_205">
                                                            <rect
                                                            width="12.48"
                                                            height="12"
                                                            fill="white"
                                                            transform="translate(0 0.5)"
                                                            />
                                                        </clipPath>
                                                        </defs>
                                                    </svg>
                                                </span>
                                                <span>
                                                    <svg
                                                        width="13"
                                                        height="13"
                                                        viewBox="0 0 13 13"
                                                        fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                    >
                                                        <g clip-path="url(#clip0_281_205)">
                                                        <path
                                                            d="M12.48 5.1125C12.48 5.2225 12.415 5.3425 12.285 5.4725L9.5625 8.1275L10.2075 11.8775C10.2125 11.9125 10.215 11.9625 10.215 12.0275C10.215 12.1325 10.1888 12.2213 10.1363 12.2938C10.0838 12.3663 10.0075 12.4025 9.9075 12.4025C9.8125 12.4025 9.7125 12.3725 9.6075 12.3125L6.24 10.5425L2.8725 12.3125C2.7625 12.3725 2.6625 12.4025 2.5725 12.4025C2.4675 12.4025 2.38875 12.3663 2.33625 12.2938C2.28375 12.2213 2.2575 12.1325 2.2575 12.0275C2.2575 11.9975 2.2625 11.9475 2.2725 11.8775L2.9175 8.1275L0.1875 5.4725C0.0625 5.3375 0 5.2175 0 5.1125C0 4.9275 0.14 4.8125 0.42 4.7675L4.185 4.22L5.8725 0.8075C5.9675 0.6025 6.09 0.5 6.24 0.5C6.39 0.5 6.5125 0.6025 6.6075 0.8075L8.295 4.22L12.06 4.7675C12.34 4.8125 12.48 4.9275 12.48 5.1125Z"
                                                            fill="#FFCC00"
                                                        />
                                                        </g>
                                                        <defs>
                                                        <clipPath id="clip0_281_205">
                                                            <rect
                                                            width="12.48"
                                                            height="12"
                                                            fill="white"
                                                            transform="translate(0 0.5)"
                                                            />
                                                        </clipPath>
                                                        </defs>
                                                    </svg>
                                                </span>
                                                <span>
                                                    <svg
                                                        width="13"
                                                        height="13"
                                                        viewBox="0 0 13 13"
                                                        fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                    >
                                                        <g clip-path="url(#clip0_281_205)">
                                                        <path
                                                            d="M12.48 5.1125C12.48 5.2225 12.415 5.3425 12.285 5.4725L9.5625 8.1275L10.2075 11.8775C10.2125 11.9125 10.215 11.9625 10.215 12.0275C10.215 12.1325 10.1888 12.2213 10.1363 12.2938C10.0838 12.3663 10.0075 12.4025 9.9075 12.4025C9.8125 12.4025 9.7125 12.3725 9.6075 12.3125L6.24 10.5425L2.8725 12.3125C2.7625 12.3725 2.6625 12.4025 2.5725 12.4025C2.4675 12.4025 2.38875 12.3663 2.33625 12.2938C2.28375 12.2213 2.2575 12.1325 2.2575 12.0275C2.2575 11.9975 2.2625 11.9475 2.2725 11.8775L2.9175 8.1275L0.1875 5.4725C0.0625 5.3375 0 5.2175 0 5.1125C0 4.9275 0.14 4.8125 0.42 4.7675L4.185 4.22L5.8725 0.8075C5.9675 0.6025 6.09 0.5 6.24 0.5C6.39 0.5 6.5125 0.6025 6.6075 0.8075L8.295 4.22L12.06 4.7675C12.34 4.8125 12.48 4.9275 12.48 5.1125Z"
                                                            fill="#FFCC00"
                                                        />
                                                        </g>
                                                        <defs>
                                                        <clipPath id="clip0_281_205">
                                                            <rect
                                                            width="12.48"
                                                            height="12"
                                                            fill="white"
                                                            transform="translate(0 0.5)"
                                                            />
                                                        </clipPath>
                                                        </defs>
                                                    </svg>
                                                </span>
                                                <span>
                                                    <svg
                                                        width="13"
                                                        height="13"
                                                        viewBox="0 0 13 13"
                                                        fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                    >
                                                        <g clip-path="url(#clip0_281_211)">
                                                        <path
                                                            d="M9.335 7.4375L11.2625 5.5625L8.5925 5.1725L8.0975 5.0975L7.8725 4.6475L6.68 2.2325V9.455L7.1225 9.6875L9.5075 10.9475L9.0575 8.285L8.9675 7.79L9.335 7.4375ZM12.725 5.4725L10.0025 8.1275L10.6475 11.8775C10.6725 12.0425 10.6575 12.1713 10.6025 12.2638C10.5475 12.3563 10.4625 12.4025 10.3475 12.4025C10.2625 12.4025 10.1625 12.3725 10.0475 12.3125L6.68 10.5425L3.3125 12.3125C3.1975 12.3725 3.0975 12.4025 3.0125 12.4025C2.8975 12.4025 2.8125 12.3563 2.7575 12.2638C2.7025 12.1713 2.6875 12.0425 2.7125 11.8775L3.3575 8.1275L0.627503 5.4725C0.467503 5.3125 0.410003 5.16375 0.455003 5.02625C0.500003 4.88875 0.635003 4.8025 0.860003 4.7675L4.625 4.22L6.3125 0.8075C6.4125 0.6025 6.535 0.5 6.68 0.5C6.82 0.5 6.9425 0.6025 7.0475 0.8075L8.735 4.22L12.5 4.7675C12.725 4.8025 12.86 4.88875 12.905 5.02625C12.95 5.16375 12.89 5.3125 12.725 5.4725Z"
                                                            fill="#FFCC00"
                                                        />
                                                        </g>
                                                        <defs>
                                                        <clipPath id="clip0_281_211">
                                                            <rect
                                                            width="12.48"
                                                            height="12"
                                                            fill="white"
                                                            transform="translate(0.439941 0.5)"
                                                            />
                                                        </clipPath>
                                                        </defs>
                                                    </svg>
                                                </span>
                                                <span>
                                                    <svg
                                                        width="14"
                                                        height="13"
                                                        viewBox="0 0 14 13"
                                                        fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                    >
                                                        <g clip-path="url(#clip0_281_213)">
                                                        <path
                                                            d="M9.44742 7.79L11.7424 5.5625L8.57742 5.0975L7.15992 2.2325L5.74242 5.0975L2.57742 5.5625L4.87242 7.79L4.32492 10.9475L7.15992 9.455L9.98742 10.9475L9.44742 7.79ZM13.3999 5.1125C13.3999 5.2225 13.3349 5.3425 13.2049 5.4725L10.4824 8.1275L11.1274 11.8775C11.1324 11.9125 11.1349 11.9625 11.1349 12.0275C11.1349 12.2775 11.0324 12.4025 10.8274 12.4025C10.7324 12.4025 10.6324 12.3725 10.5274 12.3125L7.15992 10.5425L3.79242 12.3125C3.68242 12.3725 3.58242 12.4025 3.49242 12.4025C3.38742 12.4025 3.30867 12.3663 3.25617 12.2938C3.20367 12.2213 3.17742 12.1325 3.17742 12.0275C3.17742 11.9975 3.18242 11.9475 3.19242 11.8775L3.83742 8.1275L1.10742 5.4725C0.982422 5.3375 0.919922 5.2175 0.919922 5.1125C0.919922 4.9275 1.05992 4.8125 1.33992 4.7675L5.10492 4.22L6.79242 0.8075C6.88742 0.6025 7.00992 0.5 7.15992 0.5C7.30992 0.5 7.43242 0.6025 7.52742 0.8075L9.21492 4.22L12.9799 4.7675C13.2599 4.8125 13.3999 4.9275 13.3999 5.1125Z"
                                                            fill="#FFCC00"
                                                        />
                                                        </g>
                                                        <defs>
                                                        <clipPath id="clip0_281_213">
                                                            <rect
                                                            width="12.48"
                                                            height="12"
                                                            fill="white"
                                                            transform="translate(0.919922 0.5)"
                                                            />
                                                        </clipPath>
                                                        </defs>
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="fs-12 black-color">9.4k sold</div>
                                        </div>
                                    </div>
                                </a>
                                <a class="cart" href="#"> Add to cart </a>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3 mb-4 mx-auto">
                            <div class="cart-item">
                                <a href="/product" class="text-decoration-none">
                                    <div class="image mb-3">
                                        <img
                                        width="233"
                                        height="192"
                                        loading="lazy"
                                        class="img-fluid"
                                        src="/assets/imgs/home/productt-1.webp"
                                        alt="Hashems Turkish Coffee 50 Light/50 Dark 16 Oz"
                                        />
                                    </div>
                                    <div class="px-1">
                                        <div class="fs-14 black-color mb-3">
                                            Turkish Coffee 50 Light/50 Dark 16 Oz
                                        </div>
                                        <div class="fs-14 black-color fw-bold mb-3">
                                            $13.99 - $19.99
                                        </div>
                                        <div class="d-flex w-100 justify-content-between align-items-center mb-3">
                                            <div>
                                                <span>
                                                    <svg
                                                        width="13"
                                                        height="13"
                                                        viewBox="0 0 13 13"
                                                        fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                    >
                                                        <g clip-path="url(#clip0_281_205)">
                                                        <path
                                                            d="M12.48 5.1125C12.48 5.2225 12.415 5.3425 12.285 5.4725L9.5625 8.1275L10.2075 11.8775C10.2125 11.9125 10.215 11.9625 10.215 12.0275C10.215 12.1325 10.1888 12.2213 10.1363 12.2938C10.0838 12.3663 10.0075 12.4025 9.9075 12.4025C9.8125 12.4025 9.7125 12.3725 9.6075 12.3125L6.24 10.5425L2.8725 12.3125C2.7625 12.3725 2.6625 12.4025 2.5725 12.4025C2.4675 12.4025 2.38875 12.3663 2.33625 12.2938C2.28375 12.2213 2.2575 12.1325 2.2575 12.0275C2.2575 11.9975 2.2625 11.9475 2.2725 11.8775L2.9175 8.1275L0.1875 5.4725C0.0625 5.3375 0 5.2175 0 5.1125C0 4.9275 0.14 4.8125 0.42 4.7675L4.185 4.22L5.8725 0.8075C5.9675 0.6025 6.09 0.5 6.24 0.5C6.39 0.5 6.5125 0.6025 6.6075 0.8075L8.295 4.22L12.06 4.7675C12.34 4.8125 12.48 4.9275 12.48 5.1125Z"
                                                            fill="#FFCC00"
                                                        />
                                                        </g>
                                                        <defs>
                                                        <clipPath id="clip0_281_205">
                                                            <rect
                                                            width="12.48"
                                                            height="12"
                                                            fill="white"
                                                            transform="translate(0 0.5)"
                                                            />
                                                        </clipPath>
                                                        </defs>
                                                    </svg>
                                                </span>
                                                <span>
                                                    <svg
                                                        width="13"
                                                        height="13"
                                                        viewBox="0 0 13 13"
                                                        fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                    >
                                                        <g clip-path="url(#clip0_281_205)">
                                                        <path
                                                            d="M12.48 5.1125C12.48 5.2225 12.415 5.3425 12.285 5.4725L9.5625 8.1275L10.2075 11.8775C10.2125 11.9125 10.215 11.9625 10.215 12.0275C10.215 12.1325 10.1888 12.2213 10.1363 12.2938C10.0838 12.3663 10.0075 12.4025 9.9075 12.4025C9.8125 12.4025 9.7125 12.3725 9.6075 12.3125L6.24 10.5425L2.8725 12.3125C2.7625 12.3725 2.6625 12.4025 2.5725 12.4025C2.4675 12.4025 2.38875 12.3663 2.33625 12.2938C2.28375 12.2213 2.2575 12.1325 2.2575 12.0275C2.2575 11.9975 2.2625 11.9475 2.2725 11.8775L2.9175 8.1275L0.1875 5.4725C0.0625 5.3375 0 5.2175 0 5.1125C0 4.9275 0.14 4.8125 0.42 4.7675L4.185 4.22L5.8725 0.8075C5.9675 0.6025 6.09 0.5 6.24 0.5C6.39 0.5 6.5125 0.6025 6.6075 0.8075L8.295 4.22L12.06 4.7675C12.34 4.8125 12.48 4.9275 12.48 5.1125Z"
                                                            fill="#FFCC00"
                                                        />
                                                        </g>
                                                        <defs>
                                                        <clipPath id="clip0_281_205">
                                                            <rect
                                                            width="12.48"
                                                            height="12"
                                                            fill="white"
                                                            transform="translate(0 0.5)"
                                                            />
                                                        </clipPath>
                                                        </defs>
                                                    </svg>
                                                </span>
                                                <span>
                                                    <svg
                                                        width="13"
                                                        height="13"
                                                        viewBox="0 0 13 13"
                                                        fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                    >
                                                        <g clip-path="url(#clip0_281_205)">
                                                        <path
                                                            d="M12.48 5.1125C12.48 5.2225 12.415 5.3425 12.285 5.4725L9.5625 8.1275L10.2075 11.8775C10.2125 11.9125 10.215 11.9625 10.215 12.0275C10.215 12.1325 10.1888 12.2213 10.1363 12.2938C10.0838 12.3663 10.0075 12.4025 9.9075 12.4025C9.8125 12.4025 9.7125 12.3725 9.6075 12.3125L6.24 10.5425L2.8725 12.3125C2.7625 12.3725 2.6625 12.4025 2.5725 12.4025C2.4675 12.4025 2.38875 12.3663 2.33625 12.2938C2.28375 12.2213 2.2575 12.1325 2.2575 12.0275C2.2575 11.9975 2.2625 11.9475 2.2725 11.8775L2.9175 8.1275L0.1875 5.4725C0.0625 5.3375 0 5.2175 0 5.1125C0 4.9275 0.14 4.8125 0.42 4.7675L4.185 4.22L5.8725 0.8075C5.9675 0.6025 6.09 0.5 6.24 0.5C6.39 0.5 6.5125 0.6025 6.6075 0.8075L8.295 4.22L12.06 4.7675C12.34 4.8125 12.48 4.9275 12.48 5.1125Z"
                                                            fill="#FFCC00"
                                                        />
                                                        </g>
                                                        <defs>
                                                        <clipPath id="clip0_281_205">
                                                            <rect
                                                            width="12.48"
                                                            height="12"
                                                            fill="white"
                                                            transform="translate(0 0.5)"
                                                            />
                                                        </clipPath>
                                                        </defs>
                                                    </svg>
                                                </span>
                                                <span>
                                                    <svg
                                                        width="13"
                                                        height="13"
                                                        viewBox="0 0 13 13"
                                                        fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                    >
                                                        <g clip-path="url(#clip0_281_211)">
                                                        <path
                                                            d="M9.335 7.4375L11.2625 5.5625L8.5925 5.1725L8.0975 5.0975L7.8725 4.6475L6.68 2.2325V9.455L7.1225 9.6875L9.5075 10.9475L9.0575 8.285L8.9675 7.79L9.335 7.4375ZM12.725 5.4725L10.0025 8.1275L10.6475 11.8775C10.6725 12.0425 10.6575 12.1713 10.6025 12.2638C10.5475 12.3563 10.4625 12.4025 10.3475 12.4025C10.2625 12.4025 10.1625 12.3725 10.0475 12.3125L6.68 10.5425L3.3125 12.3125C3.1975 12.3725 3.0975 12.4025 3.0125 12.4025C2.8975 12.4025 2.8125 12.3563 2.7575 12.2638C2.7025 12.1713 2.6875 12.0425 2.7125 11.8775L3.3575 8.1275L0.627503 5.4725C0.467503 5.3125 0.410003 5.16375 0.455003 5.02625C0.500003 4.88875 0.635003 4.8025 0.860003 4.7675L4.625 4.22L6.3125 0.8075C6.4125 0.6025 6.535 0.5 6.68 0.5C6.82 0.5 6.9425 0.6025 7.0475 0.8075L8.735 4.22L12.5 4.7675C12.725 4.8025 12.86 4.88875 12.905 5.02625C12.95 5.16375 12.89 5.3125 12.725 5.4725Z"
                                                            fill="#FFCC00"
                                                        />
                                                        </g>
                                                        <defs>
                                                        <clipPath id="clip0_281_211">
                                                            <rect
                                                            width="12.48"
                                                            height="12"
                                                            fill="white"
                                                            transform="translate(0.439941 0.5)"
                                                            />
                                                        </clipPath>
                                                        </defs>
                                                    </svg>
                                                </span>
                                                <span>
                                                    <svg
                                                        width="14"
                                                        height="13"
                                                        viewBox="0 0 14 13"
                                                        fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                    >
                                                        <g clip-path="url(#clip0_281_213)">
                                                        <path
                                                            d="M9.44742 7.79L11.7424 5.5625L8.57742 5.0975L7.15992 2.2325L5.74242 5.0975L2.57742 5.5625L4.87242 7.79L4.32492 10.9475L7.15992 9.455L9.98742 10.9475L9.44742 7.79ZM13.3999 5.1125C13.3999 5.2225 13.3349 5.3425 13.2049 5.4725L10.4824 8.1275L11.1274 11.8775C11.1324 11.9125 11.1349 11.9625 11.1349 12.0275C11.1349 12.2775 11.0324 12.4025 10.8274 12.4025C10.7324 12.4025 10.6324 12.3725 10.5274 12.3125L7.15992 10.5425L3.79242 12.3125C3.68242 12.3725 3.58242 12.4025 3.49242 12.4025C3.38742 12.4025 3.30867 12.3663 3.25617 12.2938C3.20367 12.2213 3.17742 12.1325 3.17742 12.0275C3.17742 11.9975 3.18242 11.9475 3.19242 11.8775L3.83742 8.1275L1.10742 5.4725C0.982422 5.3375 0.919922 5.2175 0.919922 5.1125C0.919922 4.9275 1.05992 4.8125 1.33992 4.7675L5.10492 4.22L6.79242 0.8075C6.88742 0.6025 7.00992 0.5 7.15992 0.5C7.30992 0.5 7.43242 0.6025 7.52742 0.8075L9.21492 4.22L12.9799 4.7675C13.2599 4.8125 13.3999 4.9275 13.3999 5.1125Z"
                                                            fill="#FFCC00"
                                                        />
                                                        </g>
                                                        <defs>
                                                        <clipPath id="clip0_281_213">
                                                            <rect
                                                            width="12.48"
                                                            height="12"
                                                            fill="white"
                                                            transform="translate(0.919922 0.5)"
                                                            />
                                                        </clipPath>
                                                        </defs>
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="fs-12 black-color">9.4k sold</div>
                                        </div>
                                    </div>
                                </a>
                                <a class="cart" href="#"> Add to cart </a>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3 mb-4 mx-auto">
                            <div class="cart-item">
                                <a href="/product" class="text-decoration-none">
                                    <div class="image mb-3">
                                        <img
                                        width="233"
                                        height="192"
                                        loading="lazy"
                                        class="img-fluid"
                                        src="/assets/imgs/home/productt-1.webp"
                                        alt="Hashems Turkish Coffee 50 Light/50 Dark 16 Oz"
                                        />
                                    </div>
                                    <div class="px-1">
                                        <div class="fs-14 black-color mb-3">
                                            Turkish Coffee 50 Light/50 Dark 16 Oz
                                        </div>
                                        <div class="fs-14 black-color fw-bold mb-3">
                                            $13.99 - $19.99
                                        </div>
                                        <div class="d-flex w-100 justify-content-between align-items-center mb-3">
                                            <div>
                                                <span>
                                                    <svg
                                                        width="13"
                                                        height="13"
                                                        viewBox="0 0 13 13"
                                                        fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                    >
                                                        <g clip-path="url(#clip0_281_205)">
                                                        <path
                                                            d="M12.48 5.1125C12.48 5.2225 12.415 5.3425 12.285 5.4725L9.5625 8.1275L10.2075 11.8775C10.2125 11.9125 10.215 11.9625 10.215 12.0275C10.215 12.1325 10.1888 12.2213 10.1363 12.2938C10.0838 12.3663 10.0075 12.4025 9.9075 12.4025C9.8125 12.4025 9.7125 12.3725 9.6075 12.3125L6.24 10.5425L2.8725 12.3125C2.7625 12.3725 2.6625 12.4025 2.5725 12.4025C2.4675 12.4025 2.38875 12.3663 2.33625 12.2938C2.28375 12.2213 2.2575 12.1325 2.2575 12.0275C2.2575 11.9975 2.2625 11.9475 2.2725 11.8775L2.9175 8.1275L0.1875 5.4725C0.0625 5.3375 0 5.2175 0 5.1125C0 4.9275 0.14 4.8125 0.42 4.7675L4.185 4.22L5.8725 0.8075C5.9675 0.6025 6.09 0.5 6.24 0.5C6.39 0.5 6.5125 0.6025 6.6075 0.8075L8.295 4.22L12.06 4.7675C12.34 4.8125 12.48 4.9275 12.48 5.1125Z"
                                                            fill="#FFCC00"
                                                        />
                                                        </g>
                                                        <defs>
                                                        <clipPath id="clip0_281_205">
                                                            <rect
                                                            width="12.48"
                                                            height="12"
                                                            fill="white"
                                                            transform="translate(0 0.5)"
                                                            />
                                                        </clipPath>
                                                        </defs>
                                                    </svg>
                                                </span>
                                                <span>
                                                    <svg
                                                        width="13"
                                                        height="13"
                                                        viewBox="0 0 13 13"
                                                        fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                    >
                                                        <g clip-path="url(#clip0_281_205)">
                                                        <path
                                                            d="M12.48 5.1125C12.48 5.2225 12.415 5.3425 12.285 5.4725L9.5625 8.1275L10.2075 11.8775C10.2125 11.9125 10.215 11.9625 10.215 12.0275C10.215 12.1325 10.1888 12.2213 10.1363 12.2938C10.0838 12.3663 10.0075 12.4025 9.9075 12.4025C9.8125 12.4025 9.7125 12.3725 9.6075 12.3125L6.24 10.5425L2.8725 12.3125C2.7625 12.3725 2.6625 12.4025 2.5725 12.4025C2.4675 12.4025 2.38875 12.3663 2.33625 12.2938C2.28375 12.2213 2.2575 12.1325 2.2575 12.0275C2.2575 11.9975 2.2625 11.9475 2.2725 11.8775L2.9175 8.1275L0.1875 5.4725C0.0625 5.3375 0 5.2175 0 5.1125C0 4.9275 0.14 4.8125 0.42 4.7675L4.185 4.22L5.8725 0.8075C5.9675 0.6025 6.09 0.5 6.24 0.5C6.39 0.5 6.5125 0.6025 6.6075 0.8075L8.295 4.22L12.06 4.7675C12.34 4.8125 12.48 4.9275 12.48 5.1125Z"
                                                            fill="#FFCC00"
                                                        />
                                                        </g>
                                                        <defs>
                                                        <clipPath id="clip0_281_205">
                                                            <rect
                                                            width="12.48"
                                                            height="12"
                                                            fill="white"
                                                            transform="translate(0 0.5)"
                                                            />
                                                        </clipPath>
                                                        </defs>
                                                    </svg>
                                                </span>
                                                <span>
                                                    <svg
                                                        width="13"
                                                        height="13"
                                                        viewBox="0 0 13 13"
                                                        fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                    >
                                                        <g clip-path="url(#clip0_281_205)">
                                                        <path
                                                            d="M12.48 5.1125C12.48 5.2225 12.415 5.3425 12.285 5.4725L9.5625 8.1275L10.2075 11.8775C10.2125 11.9125 10.215 11.9625 10.215 12.0275C10.215 12.1325 10.1888 12.2213 10.1363 12.2938C10.0838 12.3663 10.0075 12.4025 9.9075 12.4025C9.8125 12.4025 9.7125 12.3725 9.6075 12.3125L6.24 10.5425L2.8725 12.3125C2.7625 12.3725 2.6625 12.4025 2.5725 12.4025C2.4675 12.4025 2.38875 12.3663 2.33625 12.2938C2.28375 12.2213 2.2575 12.1325 2.2575 12.0275C2.2575 11.9975 2.2625 11.9475 2.2725 11.8775L2.9175 8.1275L0.1875 5.4725C0.0625 5.3375 0 5.2175 0 5.1125C0 4.9275 0.14 4.8125 0.42 4.7675L4.185 4.22L5.8725 0.8075C5.9675 0.6025 6.09 0.5 6.24 0.5C6.39 0.5 6.5125 0.6025 6.6075 0.8075L8.295 4.22L12.06 4.7675C12.34 4.8125 12.48 4.9275 12.48 5.1125Z"
                                                            fill="#FFCC00"
                                                        />
                                                        </g>
                                                        <defs>
                                                        <clipPath id="clip0_281_205">
                                                            <rect
                                                            width="12.48"
                                                            height="12"
                                                            fill="white"
                                                            transform="translate(0 0.5)"
                                                            />
                                                        </clipPath>
                                                        </defs>
                                                    </svg>
                                                </span>
                                                <span>
                                                    <svg
                                                        width="13"
                                                        height="13"
                                                        viewBox="0 0 13 13"
                                                        fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                    >
                                                        <g clip-path="url(#clip0_281_211)">
                                                        <path
                                                            d="M9.335 7.4375L11.2625 5.5625L8.5925 5.1725L8.0975 5.0975L7.8725 4.6475L6.68 2.2325V9.455L7.1225 9.6875L9.5075 10.9475L9.0575 8.285L8.9675 7.79L9.335 7.4375ZM12.725 5.4725L10.0025 8.1275L10.6475 11.8775C10.6725 12.0425 10.6575 12.1713 10.6025 12.2638C10.5475 12.3563 10.4625 12.4025 10.3475 12.4025C10.2625 12.4025 10.1625 12.3725 10.0475 12.3125L6.68 10.5425L3.3125 12.3125C3.1975 12.3725 3.0975 12.4025 3.0125 12.4025C2.8975 12.4025 2.8125 12.3563 2.7575 12.2638C2.7025 12.1713 2.6875 12.0425 2.7125 11.8775L3.3575 8.1275L0.627503 5.4725C0.467503 5.3125 0.410003 5.16375 0.455003 5.02625C0.500003 4.88875 0.635003 4.8025 0.860003 4.7675L4.625 4.22L6.3125 0.8075C6.4125 0.6025 6.535 0.5 6.68 0.5C6.82 0.5 6.9425 0.6025 7.0475 0.8075L8.735 4.22L12.5 4.7675C12.725 4.8025 12.86 4.88875 12.905 5.02625C12.95 5.16375 12.89 5.3125 12.725 5.4725Z"
                                                            fill="#FFCC00"
                                                        />
                                                        </g>
                                                        <defs>
                                                        <clipPath id="clip0_281_211">
                                                            <rect
                                                            width="12.48"
                                                            height="12"
                                                            fill="white"
                                                            transform="translate(0.439941 0.5)"
                                                            />
                                                        </clipPath>
                                                        </defs>
                                                    </svg>
                                                </span>
                                                <span>
                                                    <svg
                                                        width="14"
                                                        height="13"
                                                        viewBox="0 0 14 13"
                                                        fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                    >
                                                        <g clip-path="url(#clip0_281_213)">
                                                        <path
                                                            d="M9.44742 7.79L11.7424 5.5625L8.57742 5.0975L7.15992 2.2325L5.74242 5.0975L2.57742 5.5625L4.87242 7.79L4.32492 10.9475L7.15992 9.455L9.98742 10.9475L9.44742 7.79ZM13.3999 5.1125C13.3999 5.2225 13.3349 5.3425 13.2049 5.4725L10.4824 8.1275L11.1274 11.8775C11.1324 11.9125 11.1349 11.9625 11.1349 12.0275C11.1349 12.2775 11.0324 12.4025 10.8274 12.4025C10.7324 12.4025 10.6324 12.3725 10.5274 12.3125L7.15992 10.5425L3.79242 12.3125C3.68242 12.3725 3.58242 12.4025 3.49242 12.4025C3.38742 12.4025 3.30867 12.3663 3.25617 12.2938C3.20367 12.2213 3.17742 12.1325 3.17742 12.0275C3.17742 11.9975 3.18242 11.9475 3.19242 11.8775L3.83742 8.1275L1.10742 5.4725C0.982422 5.3375 0.919922 5.2175 0.919922 5.1125C0.919922 4.9275 1.05992 4.8125 1.33992 4.7675L5.10492 4.22L6.79242 0.8075C6.88742 0.6025 7.00992 0.5 7.15992 0.5C7.30992 0.5 7.43242 0.6025 7.52742 0.8075L9.21492 4.22L12.9799 4.7675C13.2599 4.8125 13.3999 4.9275 13.3999 5.1125Z"
                                                            fill="#FFCC00"
                                                        />
                                                        </g>
                                                        <defs>
                                                        <clipPath id="clip0_281_213">
                                                            <rect
                                                            width="12.48"
                                                            height="12"
                                                            fill="white"
                                                            transform="translate(0.919922 0.5)"
                                                            />
                                                        </clipPath>
                                                        </defs>
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="fs-12 black-color">9.4k sold</div>
                                        </div>
                                    </div>
                                </a>
                                <a class="cart" href="#"> Add to cart </a>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3 mb-4 mx-auto">
                            <div class="cart-item">
                                <a href="/product" class="text-decoration-none">
                                    <div class="image mb-3">
                                        <img
                                        width="233"
                                        height="192"
                                        loading="lazy"
                                        class="img-fluid"
                                        src="/assets/imgs/home/productt-1.webp"
                                        alt="Hashems Turkish Coffee 50 Light/50 Dark 16 Oz"
                                        />
                                    </div>
                                    <div class="px-1">
                                        <div class="fs-14 black-color mb-3">
                                            Turkish Coffee 50 Light/50 Dark 16 Oz
                                        </div>
                                        <div class="fs-14 black-color fw-bold mb-3">
                                            $13.99 - $19.99
                                        </div>
                                        <div class="d-flex w-100 justify-content-between align-items-center mb-3">
                                            <div>
                                                <span>
                                                    <svg
                                                        width="13"
                                                        height="13"
                                                        viewBox="0 0 13 13"
                                                        fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                    >
                                                        <g clip-path="url(#clip0_281_205)">
                                                        <path
                                                            d="M12.48 5.1125C12.48 5.2225 12.415 5.3425 12.285 5.4725L9.5625 8.1275L10.2075 11.8775C10.2125 11.9125 10.215 11.9625 10.215 12.0275C10.215 12.1325 10.1888 12.2213 10.1363 12.2938C10.0838 12.3663 10.0075 12.4025 9.9075 12.4025C9.8125 12.4025 9.7125 12.3725 9.6075 12.3125L6.24 10.5425L2.8725 12.3125C2.7625 12.3725 2.6625 12.4025 2.5725 12.4025C2.4675 12.4025 2.38875 12.3663 2.33625 12.2938C2.28375 12.2213 2.2575 12.1325 2.2575 12.0275C2.2575 11.9975 2.2625 11.9475 2.2725 11.8775L2.9175 8.1275L0.1875 5.4725C0.0625 5.3375 0 5.2175 0 5.1125C0 4.9275 0.14 4.8125 0.42 4.7675L4.185 4.22L5.8725 0.8075C5.9675 0.6025 6.09 0.5 6.24 0.5C6.39 0.5 6.5125 0.6025 6.6075 0.8075L8.295 4.22L12.06 4.7675C12.34 4.8125 12.48 4.9275 12.48 5.1125Z"
                                                            fill="#FFCC00"
                                                        />
                                                        </g>
                                                        <defs>
                                                        <clipPath id="clip0_281_205">
                                                            <rect
                                                            width="12.48"
                                                            height="12"
                                                            fill="white"
                                                            transform="translate(0 0.5)"
                                                            />
                                                        </clipPath>
                                                        </defs>
                                                    </svg>
                                                </span>
                                                <span>
                                                    <svg
                                                        width="13"
                                                        height="13"
                                                        viewBox="0 0 13 13"
                                                        fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                    >
                                                        <g clip-path="url(#clip0_281_205)">
                                                        <path
                                                            d="M12.48 5.1125C12.48 5.2225 12.415 5.3425 12.285 5.4725L9.5625 8.1275L10.2075 11.8775C10.2125 11.9125 10.215 11.9625 10.215 12.0275C10.215 12.1325 10.1888 12.2213 10.1363 12.2938C10.0838 12.3663 10.0075 12.4025 9.9075 12.4025C9.8125 12.4025 9.7125 12.3725 9.6075 12.3125L6.24 10.5425L2.8725 12.3125C2.7625 12.3725 2.6625 12.4025 2.5725 12.4025C2.4675 12.4025 2.38875 12.3663 2.33625 12.2938C2.28375 12.2213 2.2575 12.1325 2.2575 12.0275C2.2575 11.9975 2.2625 11.9475 2.2725 11.8775L2.9175 8.1275L0.1875 5.4725C0.0625 5.3375 0 5.2175 0 5.1125C0 4.9275 0.14 4.8125 0.42 4.7675L4.185 4.22L5.8725 0.8075C5.9675 0.6025 6.09 0.5 6.24 0.5C6.39 0.5 6.5125 0.6025 6.6075 0.8075L8.295 4.22L12.06 4.7675C12.34 4.8125 12.48 4.9275 12.48 5.1125Z"
                                                            fill="#FFCC00"
                                                        />
                                                        </g>
                                                        <defs>
                                                        <clipPath id="clip0_281_205">
                                                            <rect
                                                            width="12.48"
                                                            height="12"
                                                            fill="white"
                                                            transform="translate(0 0.5)"
                                                            />
                                                        </clipPath>
                                                        </defs>
                                                    </svg>
                                                </span>
                                                <span>
                                                    <svg
                                                        width="13"
                                                        height="13"
                                                        viewBox="0 0 13 13"
                                                        fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                    >
                                                        <g clip-path="url(#clip0_281_205)">
                                                        <path
                                                            d="M12.48 5.1125C12.48 5.2225 12.415 5.3425 12.285 5.4725L9.5625 8.1275L10.2075 11.8775C10.2125 11.9125 10.215 11.9625 10.215 12.0275C10.215 12.1325 10.1888 12.2213 10.1363 12.2938C10.0838 12.3663 10.0075 12.4025 9.9075 12.4025C9.8125 12.4025 9.7125 12.3725 9.6075 12.3125L6.24 10.5425L2.8725 12.3125C2.7625 12.3725 2.6625 12.4025 2.5725 12.4025C2.4675 12.4025 2.38875 12.3663 2.33625 12.2938C2.28375 12.2213 2.2575 12.1325 2.2575 12.0275C2.2575 11.9975 2.2625 11.9475 2.2725 11.8775L2.9175 8.1275L0.1875 5.4725C0.0625 5.3375 0 5.2175 0 5.1125C0 4.9275 0.14 4.8125 0.42 4.7675L4.185 4.22L5.8725 0.8075C5.9675 0.6025 6.09 0.5 6.24 0.5C6.39 0.5 6.5125 0.6025 6.6075 0.8075L8.295 4.22L12.06 4.7675C12.34 4.8125 12.48 4.9275 12.48 5.1125Z"
                                                            fill="#FFCC00"
                                                        />
                                                        </g>
                                                        <defs>
                                                        <clipPath id="clip0_281_205">
                                                            <rect
                                                            width="12.48"
                                                            height="12"
                                                            fill="white"
                                                            transform="translate(0 0.5)"
                                                            />
                                                        </clipPath>
                                                        </defs>
                                                    </svg>
                                                </span>
                                                <span>
                                                    <svg
                                                        width="13"
                                                        height="13"
                                                        viewBox="0 0 13 13"
                                                        fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                    >
                                                        <g clip-path="url(#clip0_281_211)">
                                                        <path
                                                            d="M9.335 7.4375L11.2625 5.5625L8.5925 5.1725L8.0975 5.0975L7.8725 4.6475L6.68 2.2325V9.455L7.1225 9.6875L9.5075 10.9475L9.0575 8.285L8.9675 7.79L9.335 7.4375ZM12.725 5.4725L10.0025 8.1275L10.6475 11.8775C10.6725 12.0425 10.6575 12.1713 10.6025 12.2638C10.5475 12.3563 10.4625 12.4025 10.3475 12.4025C10.2625 12.4025 10.1625 12.3725 10.0475 12.3125L6.68 10.5425L3.3125 12.3125C3.1975 12.3725 3.0975 12.4025 3.0125 12.4025C2.8975 12.4025 2.8125 12.3563 2.7575 12.2638C2.7025 12.1713 2.6875 12.0425 2.7125 11.8775L3.3575 8.1275L0.627503 5.4725C0.467503 5.3125 0.410003 5.16375 0.455003 5.02625C0.500003 4.88875 0.635003 4.8025 0.860003 4.7675L4.625 4.22L6.3125 0.8075C6.4125 0.6025 6.535 0.5 6.68 0.5C6.82 0.5 6.9425 0.6025 7.0475 0.8075L8.735 4.22L12.5 4.7675C12.725 4.8025 12.86 4.88875 12.905 5.02625C12.95 5.16375 12.89 5.3125 12.725 5.4725Z"
                                                            fill="#FFCC00"
                                                        />
                                                        </g>
                                                        <defs>
                                                        <clipPath id="clip0_281_211">
                                                            <rect
                                                            width="12.48"
                                                            height="12"
                                                            fill="white"
                                                            transform="translate(0.439941 0.5)"
                                                            />
                                                        </clipPath>
                                                        </defs>
                                                    </svg>
                                                </span>
                                                <span>
                                                    <svg
                                                        width="14"
                                                        height="13"
                                                        viewBox="0 0 14 13"
                                                        fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                    >
                                                        <g clip-path="url(#clip0_281_213)">
                                                        <path
                                                            d="M9.44742 7.79L11.7424 5.5625L8.57742 5.0975L7.15992 2.2325L5.74242 5.0975L2.57742 5.5625L4.87242 7.79L4.32492 10.9475L7.15992 9.455L9.98742 10.9475L9.44742 7.79ZM13.3999 5.1125C13.3999 5.2225 13.3349 5.3425 13.2049 5.4725L10.4824 8.1275L11.1274 11.8775C11.1324 11.9125 11.1349 11.9625 11.1349 12.0275C11.1349 12.2775 11.0324 12.4025 10.8274 12.4025C10.7324 12.4025 10.6324 12.3725 10.5274 12.3125L7.15992 10.5425L3.79242 12.3125C3.68242 12.3725 3.58242 12.4025 3.49242 12.4025C3.38742 12.4025 3.30867 12.3663 3.25617 12.2938C3.20367 12.2213 3.17742 12.1325 3.17742 12.0275C3.17742 11.9975 3.18242 11.9475 3.19242 11.8775L3.83742 8.1275L1.10742 5.4725C0.982422 5.3375 0.919922 5.2175 0.919922 5.1125C0.919922 4.9275 1.05992 4.8125 1.33992 4.7675L5.10492 4.22L6.79242 0.8075C6.88742 0.6025 7.00992 0.5 7.15992 0.5C7.30992 0.5 7.43242 0.6025 7.52742 0.8075L9.21492 4.22L12.9799 4.7675C13.2599 4.8125 13.3999 4.9275 13.3999 5.1125Z"
                                                            fill="#FFCC00"
                                                        />
                                                        </g>
                                                        <defs>
                                                        <clipPath id="clip0_281_213">
                                                            <rect
                                                            width="12.48"
                                                            height="12"
                                                            fill="white"
                                                            transform="translate(0.919922 0.5)"
                                                            />
                                                        </clipPath>
                                                        </defs>
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="fs-12 black-color">9.4k sold</div>
                                        </div>
                                    </div>
                                </a>
                                <a class="cart" href="#"> Add to cart </a>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3 mb-4 mx-auto">
                            <div class="cart-item">
                                <a href="/product" class="text-decoration-none">
                                    <div class="image mb-3">
                                        <img
                                        width="233"
                                        height="192"
                                        loading="lazy"
                                        class="img-fluid"
                                        src="/assets/imgs/home/productt-1.webp"
                                        alt="Hashems Turkish Coffee 50 Light/50 Dark 16 Oz"
                                        />
                                    </div>
                                    <div class="px-1">
                                        <div class="fs-14 black-color mb-3">
                                            Turkish Coffee 50 Light/50 Dark 16 Oz
                                        </div>
                                        <div class="fs-14 black-color fw-bold mb-3">
                                            $13.99 - $19.99
                                        </div>
                                        <div class="d-flex w-100 justify-content-between align-items-center mb-3">
                                            <div>
                                                <span>
                                                    <svg
                                                        width="13"
                                                        height="13"
                                                        viewBox="0 0 13 13"
                                                        fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                    >
                                                        <g clip-path="url(#clip0_281_205)">
                                                        <path
                                                            d="M12.48 5.1125C12.48 5.2225 12.415 5.3425 12.285 5.4725L9.5625 8.1275L10.2075 11.8775C10.2125 11.9125 10.215 11.9625 10.215 12.0275C10.215 12.1325 10.1888 12.2213 10.1363 12.2938C10.0838 12.3663 10.0075 12.4025 9.9075 12.4025C9.8125 12.4025 9.7125 12.3725 9.6075 12.3125L6.24 10.5425L2.8725 12.3125C2.7625 12.3725 2.6625 12.4025 2.5725 12.4025C2.4675 12.4025 2.38875 12.3663 2.33625 12.2938C2.28375 12.2213 2.2575 12.1325 2.2575 12.0275C2.2575 11.9975 2.2625 11.9475 2.2725 11.8775L2.9175 8.1275L0.1875 5.4725C0.0625 5.3375 0 5.2175 0 5.1125C0 4.9275 0.14 4.8125 0.42 4.7675L4.185 4.22L5.8725 0.8075C5.9675 0.6025 6.09 0.5 6.24 0.5C6.39 0.5 6.5125 0.6025 6.6075 0.8075L8.295 4.22L12.06 4.7675C12.34 4.8125 12.48 4.9275 12.48 5.1125Z"
                                                            fill="#FFCC00"
                                                        />
                                                        </g>
                                                        <defs>
                                                        <clipPath id="clip0_281_205">
                                                            <rect
                                                            width="12.48"
                                                            height="12"
                                                            fill="white"
                                                            transform="translate(0 0.5)"
                                                            />
                                                        </clipPath>
                                                        </defs>
                                                    </svg>
                                                </span>
                                                <span>
                                                    <svg
                                                        width="13"
                                                        height="13"
                                                        viewBox="0 0 13 13"
                                                        fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                    >
                                                        <g clip-path="url(#clip0_281_205)">
                                                        <path
                                                            d="M12.48 5.1125C12.48 5.2225 12.415 5.3425 12.285 5.4725L9.5625 8.1275L10.2075 11.8775C10.2125 11.9125 10.215 11.9625 10.215 12.0275C10.215 12.1325 10.1888 12.2213 10.1363 12.2938C10.0838 12.3663 10.0075 12.4025 9.9075 12.4025C9.8125 12.4025 9.7125 12.3725 9.6075 12.3125L6.24 10.5425L2.8725 12.3125C2.7625 12.3725 2.6625 12.4025 2.5725 12.4025C2.4675 12.4025 2.38875 12.3663 2.33625 12.2938C2.28375 12.2213 2.2575 12.1325 2.2575 12.0275C2.2575 11.9975 2.2625 11.9475 2.2725 11.8775L2.9175 8.1275L0.1875 5.4725C0.0625 5.3375 0 5.2175 0 5.1125C0 4.9275 0.14 4.8125 0.42 4.7675L4.185 4.22L5.8725 0.8075C5.9675 0.6025 6.09 0.5 6.24 0.5C6.39 0.5 6.5125 0.6025 6.6075 0.8075L8.295 4.22L12.06 4.7675C12.34 4.8125 12.48 4.9275 12.48 5.1125Z"
                                                            fill="#FFCC00"
                                                        />
                                                        </g>
                                                        <defs>
                                                        <clipPath id="clip0_281_205">
                                                            <rect
                                                            width="12.48"
                                                            height="12"
                                                            fill="white"
                                                            transform="translate(0 0.5)"
                                                            />
                                                        </clipPath>
                                                        </defs>
                                                    </svg>
                                                </span>
                                                <span>
                                                    <svg
                                                        width="13"
                                                        height="13"
                                                        viewBox="0 0 13 13"
                                                        fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                    >
                                                        <g clip-path="url(#clip0_281_205)">
                                                        <path
                                                            d="M12.48 5.1125C12.48 5.2225 12.415 5.3425 12.285 5.4725L9.5625 8.1275L10.2075 11.8775C10.2125 11.9125 10.215 11.9625 10.215 12.0275C10.215 12.1325 10.1888 12.2213 10.1363 12.2938C10.0838 12.3663 10.0075 12.4025 9.9075 12.4025C9.8125 12.4025 9.7125 12.3725 9.6075 12.3125L6.24 10.5425L2.8725 12.3125C2.7625 12.3725 2.6625 12.4025 2.5725 12.4025C2.4675 12.4025 2.38875 12.3663 2.33625 12.2938C2.28375 12.2213 2.2575 12.1325 2.2575 12.0275C2.2575 11.9975 2.2625 11.9475 2.2725 11.8775L2.9175 8.1275L0.1875 5.4725C0.0625 5.3375 0 5.2175 0 5.1125C0 4.9275 0.14 4.8125 0.42 4.7675L4.185 4.22L5.8725 0.8075C5.9675 0.6025 6.09 0.5 6.24 0.5C6.39 0.5 6.5125 0.6025 6.6075 0.8075L8.295 4.22L12.06 4.7675C12.34 4.8125 12.48 4.9275 12.48 5.1125Z"
                                                            fill="#FFCC00"
                                                        />
                                                        </g>
                                                        <defs>
                                                        <clipPath id="clip0_281_205">
                                                            <rect
                                                            width="12.48"
                                                            height="12"
                                                            fill="white"
                                                            transform="translate(0 0.5)"
                                                            />
                                                        </clipPath>
                                                        </defs>
                                                    </svg>
                                                </span>
                                                <span>
                                                    <svg
                                                        width="13"
                                                        height="13"
                                                        viewBox="0 0 13 13"
                                                        fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                    >
                                                        <g clip-path="url(#clip0_281_211)">
                                                        <path
                                                            d="M9.335 7.4375L11.2625 5.5625L8.5925 5.1725L8.0975 5.0975L7.8725 4.6475L6.68 2.2325V9.455L7.1225 9.6875L9.5075 10.9475L9.0575 8.285L8.9675 7.79L9.335 7.4375ZM12.725 5.4725L10.0025 8.1275L10.6475 11.8775C10.6725 12.0425 10.6575 12.1713 10.6025 12.2638C10.5475 12.3563 10.4625 12.4025 10.3475 12.4025C10.2625 12.4025 10.1625 12.3725 10.0475 12.3125L6.68 10.5425L3.3125 12.3125C3.1975 12.3725 3.0975 12.4025 3.0125 12.4025C2.8975 12.4025 2.8125 12.3563 2.7575 12.2638C2.7025 12.1713 2.6875 12.0425 2.7125 11.8775L3.3575 8.1275L0.627503 5.4725C0.467503 5.3125 0.410003 5.16375 0.455003 5.02625C0.500003 4.88875 0.635003 4.8025 0.860003 4.7675L4.625 4.22L6.3125 0.8075C6.4125 0.6025 6.535 0.5 6.68 0.5C6.82 0.5 6.9425 0.6025 7.0475 0.8075L8.735 4.22L12.5 4.7675C12.725 4.8025 12.86 4.88875 12.905 5.02625C12.95 5.16375 12.89 5.3125 12.725 5.4725Z"
                                                            fill="#FFCC00"
                                                        />
                                                        </g>
                                                        <defs>
                                                        <clipPath id="clip0_281_211">
                                                            <rect
                                                            width="12.48"
                                                            height="12"
                                                            fill="white"
                                                            transform="translate(0.439941 0.5)"
                                                            />
                                                        </clipPath>
                                                        </defs>
                                                    </svg>
                                                </span>
                                                <span>
                                                    <svg
                                                        width="14"
                                                        height="13"
                                                        viewBox="0 0 14 13"
                                                        fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                    >
                                                        <g clip-path="url(#clip0_281_213)">
                                                        <path
                                                            d="M9.44742 7.79L11.7424 5.5625L8.57742 5.0975L7.15992 2.2325L5.74242 5.0975L2.57742 5.5625L4.87242 7.79L4.32492 10.9475L7.15992 9.455L9.98742 10.9475L9.44742 7.79ZM13.3999 5.1125C13.3999 5.2225 13.3349 5.3425 13.2049 5.4725L10.4824 8.1275L11.1274 11.8775C11.1324 11.9125 11.1349 11.9625 11.1349 12.0275C11.1349 12.2775 11.0324 12.4025 10.8274 12.4025C10.7324 12.4025 10.6324 12.3725 10.5274 12.3125L7.15992 10.5425L3.79242 12.3125C3.68242 12.3725 3.58242 12.4025 3.49242 12.4025C3.38742 12.4025 3.30867 12.3663 3.25617 12.2938C3.20367 12.2213 3.17742 12.1325 3.17742 12.0275C3.17742 11.9975 3.18242 11.9475 3.19242 11.8775L3.83742 8.1275L1.10742 5.4725C0.982422 5.3375 0.919922 5.2175 0.919922 5.1125C0.919922 4.9275 1.05992 4.8125 1.33992 4.7675L5.10492 4.22L6.79242 0.8075C6.88742 0.6025 7.00992 0.5 7.15992 0.5C7.30992 0.5 7.43242 0.6025 7.52742 0.8075L9.21492 4.22L12.9799 4.7675C13.2599 4.8125 13.3999 4.9275 13.3999 5.1125Z"
                                                            fill="#FFCC00"
                                                        />
                                                        </g>
                                                        <defs>
                                                        <clipPath id="clip0_281_213">
                                                            <rect
                                                            width="12.48"
                                                            height="12"
                                                            fill="white"
                                                            transform="translate(0.919922 0.5)"
                                                            />
                                                        </clipPath>
                                                        </defs>
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="fs-12 black-color">9.4k sold</div>
                                        </div>
                                    </div>
                                </a>
                                <a class="cart" href="#"> Add to cart </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
      <div class="container">
        <div>
          <h5 class="fs-24 black-color fw-600 d-flex align-items-center">
            <span>Guests also took home</span>
            <a class="fs-14 green-color ms-5 text-decoration-none" href="#"
              >Explore now >></a
            >
          </h5>
        </div>
        <div class="row mt-4">
          <div class="col-xl-2 col-6 col-lg-3 mb-4 mx-auto">
              <div class="cart-item">
                  <a href="/product" class="text-decoration-none">
                      <div class="image mb-3">
                          <img
                          width="233"
                          height="192"
                          loading="lazy"
                          class="img-fluid"
                          src="/assets/imgs/home/productt-1.webp"
                          alt="Hashems Turkish Coffee 50 Light/50 Dark 16 Oz"
                          />
                      </div>
                      <div class="px-1">
                          <div class="fs-14 black-color mb-3">
                              Turkish Coffee 50 Light/50 Dark 16 Oz
                          </div>
                          <div class="fs-14 black-color fw-bold mb-3">
                              $13.99 - $19.99
                          </div>
                          <div class="d-flex w-100 justify-content-between align-items-center mb-3">
                              <div>
                                  <span>
                                      <svg
                                          width="13"
                                          height="13"
                                          viewBox="0 0 13 13"
                                          fill="none"
                                          xmlns="http://www.w3.org/2000/svg"
                                      >
                                          <g clip-path="url(#clip0_281_205)">
                                          <path
                                              d="M12.48 5.1125C12.48 5.2225 12.415 5.3425 12.285 5.4725L9.5625 8.1275L10.2075 11.8775C10.2125 11.9125 10.215 11.9625 10.215 12.0275C10.215 12.1325 10.1888 12.2213 10.1363 12.2938C10.0838 12.3663 10.0075 12.4025 9.9075 12.4025C9.8125 12.4025 9.7125 12.3725 9.6075 12.3125L6.24 10.5425L2.8725 12.3125C2.7625 12.3725 2.6625 12.4025 2.5725 12.4025C2.4675 12.4025 2.38875 12.3663 2.33625 12.2938C2.28375 12.2213 2.2575 12.1325 2.2575 12.0275C2.2575 11.9975 2.2625 11.9475 2.2725 11.8775L2.9175 8.1275L0.1875 5.4725C0.0625 5.3375 0 5.2175 0 5.1125C0 4.9275 0.14 4.8125 0.42 4.7675L4.185 4.22L5.8725 0.8075C5.9675 0.6025 6.09 0.5 6.24 0.5C6.39 0.5 6.5125 0.6025 6.6075 0.8075L8.295 4.22L12.06 4.7675C12.34 4.8125 12.48 4.9275 12.48 5.1125Z"
                                              fill="#FFCC00"
                                          />
                                          </g>
                                          <defs>
                                          <clipPath id="clip0_281_205">
                                              <rect
                                              width="12.48"
                                              height="12"
                                              fill="white"
                                              transform="translate(0 0.5)"
                                              />
                                          </clipPath>
                                          </defs>
                                      </svg>
                                  </span>
                                  <span>
                                      <svg
                                          width="13"
                                          height="13"
                                          viewBox="0 0 13 13"
                                          fill="none"
                                          xmlns="http://www.w3.org/2000/svg"
                                      >
                                          <g clip-path="url(#clip0_281_205)">
                                          <path
                                              d="M12.48 5.1125C12.48 5.2225 12.415 5.3425 12.285 5.4725L9.5625 8.1275L10.2075 11.8775C10.2125 11.9125 10.215 11.9625 10.215 12.0275C10.215 12.1325 10.1888 12.2213 10.1363 12.2938C10.0838 12.3663 10.0075 12.4025 9.9075 12.4025C9.8125 12.4025 9.7125 12.3725 9.6075 12.3125L6.24 10.5425L2.8725 12.3125C2.7625 12.3725 2.6625 12.4025 2.5725 12.4025C2.4675 12.4025 2.38875 12.3663 2.33625 12.2938C2.28375 12.2213 2.2575 12.1325 2.2575 12.0275C2.2575 11.9975 2.2625 11.9475 2.2725 11.8775L2.9175 8.1275L0.1875 5.4725C0.0625 5.3375 0 5.2175 0 5.1125C0 4.9275 0.14 4.8125 0.42 4.7675L4.185 4.22L5.8725 0.8075C5.9675 0.6025 6.09 0.5 6.24 0.5C6.39 0.5 6.5125 0.6025 6.6075 0.8075L8.295 4.22L12.06 4.7675C12.34 4.8125 12.48 4.9275 12.48 5.1125Z"
                                              fill="#FFCC00"
                                          />
                                          </g>
                                          <defs>
                                          <clipPath id="clip0_281_205">
                                              <rect
                                              width="12.48"
                                              height="12"
                                              fill="white"
                                              transform="translate(0 0.5)"
                                              />
                                          </clipPath>
                                          </defs>
                                      </svg>
                                  </span>
                                  <span>
                                      <svg
                                          width="13"
                                          height="13"
                                          viewBox="0 0 13 13"
                                          fill="none"
                                          xmlns="http://www.w3.org/2000/svg"
                                      >
                                          <g clip-path="url(#clip0_281_205)">
                                          <path
                                              d="M12.48 5.1125C12.48 5.2225 12.415 5.3425 12.285 5.4725L9.5625 8.1275L10.2075 11.8775C10.2125 11.9125 10.215 11.9625 10.215 12.0275C10.215 12.1325 10.1888 12.2213 10.1363 12.2938C10.0838 12.3663 10.0075 12.4025 9.9075 12.4025C9.8125 12.4025 9.7125 12.3725 9.6075 12.3125L6.24 10.5425L2.8725 12.3125C2.7625 12.3725 2.6625 12.4025 2.5725 12.4025C2.4675 12.4025 2.38875 12.3663 2.33625 12.2938C2.28375 12.2213 2.2575 12.1325 2.2575 12.0275C2.2575 11.9975 2.2625 11.9475 2.2725 11.8775L2.9175 8.1275L0.1875 5.4725C0.0625 5.3375 0 5.2175 0 5.1125C0 4.9275 0.14 4.8125 0.42 4.7675L4.185 4.22L5.8725 0.8075C5.9675 0.6025 6.09 0.5 6.24 0.5C6.39 0.5 6.5125 0.6025 6.6075 0.8075L8.295 4.22L12.06 4.7675C12.34 4.8125 12.48 4.9275 12.48 5.1125Z"
                                              fill="#FFCC00"
                                          />
                                          </g>
                                          <defs>
                                          <clipPath id="clip0_281_205">
                                              <rect
                                              width="12.48"
                                              height="12"
                                              fill="white"
                                              transform="translate(0 0.5)"
                                              />
                                          </clipPath>
                                          </defs>
                                      </svg>
                                  </span>
                                  <span>
                                      <svg
                                          width="13"
                                          height="13"
                                          viewBox="0 0 13 13"
                                          fill="none"
                                          xmlns="http://www.w3.org/2000/svg"
                                      >
                                          <g clip-path="url(#clip0_281_211)">
                                          <path
                                              d="M9.335 7.4375L11.2625 5.5625L8.5925 5.1725L8.0975 5.0975L7.8725 4.6475L6.68 2.2325V9.455L7.1225 9.6875L9.5075 10.9475L9.0575 8.285L8.9675 7.79L9.335 7.4375ZM12.725 5.4725L10.0025 8.1275L10.6475 11.8775C10.6725 12.0425 10.6575 12.1713 10.6025 12.2638C10.5475 12.3563 10.4625 12.4025 10.3475 12.4025C10.2625 12.4025 10.1625 12.3725 10.0475 12.3125L6.68 10.5425L3.3125 12.3125C3.1975 12.3725 3.0975 12.4025 3.0125 12.4025C2.8975 12.4025 2.8125 12.3563 2.7575 12.2638C2.7025 12.1713 2.6875 12.0425 2.7125 11.8775L3.3575 8.1275L0.627503 5.4725C0.467503 5.3125 0.410003 5.16375 0.455003 5.02625C0.500003 4.88875 0.635003 4.8025 0.860003 4.7675L4.625 4.22L6.3125 0.8075C6.4125 0.6025 6.535 0.5 6.68 0.5C6.82 0.5 6.9425 0.6025 7.0475 0.8075L8.735 4.22L12.5 4.7675C12.725 4.8025 12.86 4.88875 12.905 5.02625C12.95 5.16375 12.89 5.3125 12.725 5.4725Z"
                                              fill="#FFCC00"
                                          />
                                          </g>
                                          <defs>
                                          <clipPath id="clip0_281_211">
                                              <rect
                                              width="12.48"
                                              height="12"
                                              fill="white"
                                              transform="translate(0.439941 0.5)"
                                              />
                                          </clipPath>
                                          </defs>
                                      </svg>
                                  </span>
                                  <span>
                                      <svg
                                          width="14"
                                          height="13"
                                          viewBox="0 0 14 13"
                                          fill="none"
                                          xmlns="http://www.w3.org/2000/svg"
                                      >
                                          <g clip-path="url(#clip0_281_213)">
                                          <path
                                              d="M9.44742 7.79L11.7424 5.5625L8.57742 5.0975L7.15992 2.2325L5.74242 5.0975L2.57742 5.5625L4.87242 7.79L4.32492 10.9475L7.15992 9.455L9.98742 10.9475L9.44742 7.79ZM13.3999 5.1125C13.3999 5.2225 13.3349 5.3425 13.2049 5.4725L10.4824 8.1275L11.1274 11.8775C11.1324 11.9125 11.1349 11.9625 11.1349 12.0275C11.1349 12.2775 11.0324 12.4025 10.8274 12.4025C10.7324 12.4025 10.6324 12.3725 10.5274 12.3125L7.15992 10.5425L3.79242 12.3125C3.68242 12.3725 3.58242 12.4025 3.49242 12.4025C3.38742 12.4025 3.30867 12.3663 3.25617 12.2938C3.20367 12.2213 3.17742 12.1325 3.17742 12.0275C3.17742 11.9975 3.18242 11.9475 3.19242 11.8775L3.83742 8.1275L1.10742 5.4725C0.982422 5.3375 0.919922 5.2175 0.919922 5.1125C0.919922 4.9275 1.05992 4.8125 1.33992 4.7675L5.10492 4.22L6.79242 0.8075C6.88742 0.6025 7.00992 0.5 7.15992 0.5C7.30992 0.5 7.43242 0.6025 7.52742 0.8075L9.21492 4.22L12.9799 4.7675C13.2599 4.8125 13.3999 4.9275 13.3999 5.1125Z"
                                              fill="#FFCC00"
                                          />
                                          </g>
                                          <defs>
                                          <clipPath id="clip0_281_213">
                                              <rect
                                              width="12.48"
                                              height="12"
                                              fill="white"
                                              transform="translate(0.919922 0.5)"
                                              />
                                          </clipPath>
                                          </defs>
                                      </svg>
                                  </span>
                              </div>
                              <div class="fs-12 black-color">9.4k sold</div>
                          </div>
                      </div>
                  </a>
                  <a class="cart" href="#"> Add to cart </a>
              </div>
          </div>
          <div class="col-xl-2 col-6 col-lg-3 mb-4 mx-auto">
              <div class="cart-item">
                  <a href="/product" class="text-decoration-none">
                      <div class="image mb-3">
                          <img
                          width="233"
                          height="192"
                          loading="lazy"
                          class="img-fluid"
                          src="/assets/imgs/home/productt-1.webp"
                          alt="Hashems Turkish Coffee 50 Light/50 Dark 16 Oz"
                          />
                      </div>
                      <div class="px-1">
                          <div class="fs-14 black-color mb-3">
                              Turkish Coffee 50 Light/50 Dark 16 Oz
                          </div>
                          <div class="fs-14 black-color fw-bold mb-3">
                              $13.99 - $19.99
                          </div>
                          <div class="d-flex w-100 justify-content-between align-items-center mb-3">
                              <div>
                                  <span>
                                      <svg
                                          width="13"
                                          height="13"
                                          viewBox="0 0 13 13"
                                          fill="none"
                                          xmlns="http://www.w3.org/2000/svg"
                                      >
                                          <g clip-path="url(#clip0_281_205)">
                                          <path
                                              d="M12.48 5.1125C12.48 5.2225 12.415 5.3425 12.285 5.4725L9.5625 8.1275L10.2075 11.8775C10.2125 11.9125 10.215 11.9625 10.215 12.0275C10.215 12.1325 10.1888 12.2213 10.1363 12.2938C10.0838 12.3663 10.0075 12.4025 9.9075 12.4025C9.8125 12.4025 9.7125 12.3725 9.6075 12.3125L6.24 10.5425L2.8725 12.3125C2.7625 12.3725 2.6625 12.4025 2.5725 12.4025C2.4675 12.4025 2.38875 12.3663 2.33625 12.2938C2.28375 12.2213 2.2575 12.1325 2.2575 12.0275C2.2575 11.9975 2.2625 11.9475 2.2725 11.8775L2.9175 8.1275L0.1875 5.4725C0.0625 5.3375 0 5.2175 0 5.1125C0 4.9275 0.14 4.8125 0.42 4.7675L4.185 4.22L5.8725 0.8075C5.9675 0.6025 6.09 0.5 6.24 0.5C6.39 0.5 6.5125 0.6025 6.6075 0.8075L8.295 4.22L12.06 4.7675C12.34 4.8125 12.48 4.9275 12.48 5.1125Z"
                                              fill="#FFCC00"
                                          />
                                          </g>
                                          <defs>
                                          <clipPath id="clip0_281_205">
                                              <rect
                                              width="12.48"
                                              height="12"
                                              fill="white"
                                              transform="translate(0 0.5)"
                                              />
                                          </clipPath>
                                          </defs>
                                      </svg>
                                  </span>
                                  <span>
                                      <svg
                                          width="13"
                                          height="13"
                                          viewBox="0 0 13 13"
                                          fill="none"
                                          xmlns="http://www.w3.org/2000/svg"
                                      >
                                          <g clip-path="url(#clip0_281_205)">
                                          <path
                                              d="M12.48 5.1125C12.48 5.2225 12.415 5.3425 12.285 5.4725L9.5625 8.1275L10.2075 11.8775C10.2125 11.9125 10.215 11.9625 10.215 12.0275C10.215 12.1325 10.1888 12.2213 10.1363 12.2938C10.0838 12.3663 10.0075 12.4025 9.9075 12.4025C9.8125 12.4025 9.7125 12.3725 9.6075 12.3125L6.24 10.5425L2.8725 12.3125C2.7625 12.3725 2.6625 12.4025 2.5725 12.4025C2.4675 12.4025 2.38875 12.3663 2.33625 12.2938C2.28375 12.2213 2.2575 12.1325 2.2575 12.0275C2.2575 11.9975 2.2625 11.9475 2.2725 11.8775L2.9175 8.1275L0.1875 5.4725C0.0625 5.3375 0 5.2175 0 5.1125C0 4.9275 0.14 4.8125 0.42 4.7675L4.185 4.22L5.8725 0.8075C5.9675 0.6025 6.09 0.5 6.24 0.5C6.39 0.5 6.5125 0.6025 6.6075 0.8075L8.295 4.22L12.06 4.7675C12.34 4.8125 12.48 4.9275 12.48 5.1125Z"
                                              fill="#FFCC00"
                                          />
                                          </g>
                                          <defs>
                                          <clipPath id="clip0_281_205">
                                              <rect
                                              width="12.48"
                                              height="12"
                                              fill="white"
                                              transform="translate(0 0.5)"
                                              />
                                          </clipPath>
                                          </defs>
                                      </svg>
                                  </span>
                                  <span>
                                      <svg
                                          width="13"
                                          height="13"
                                          viewBox="0 0 13 13"
                                          fill="none"
                                          xmlns="http://www.w3.org/2000/svg"
                                      >
                                          <g clip-path="url(#clip0_281_205)">
                                          <path
                                              d="M12.48 5.1125C12.48 5.2225 12.415 5.3425 12.285 5.4725L9.5625 8.1275L10.2075 11.8775C10.2125 11.9125 10.215 11.9625 10.215 12.0275C10.215 12.1325 10.1888 12.2213 10.1363 12.2938C10.0838 12.3663 10.0075 12.4025 9.9075 12.4025C9.8125 12.4025 9.7125 12.3725 9.6075 12.3125L6.24 10.5425L2.8725 12.3125C2.7625 12.3725 2.6625 12.4025 2.5725 12.4025C2.4675 12.4025 2.38875 12.3663 2.33625 12.2938C2.28375 12.2213 2.2575 12.1325 2.2575 12.0275C2.2575 11.9975 2.2625 11.9475 2.2725 11.8775L2.9175 8.1275L0.1875 5.4725C0.0625 5.3375 0 5.2175 0 5.1125C0 4.9275 0.14 4.8125 0.42 4.7675L4.185 4.22L5.8725 0.8075C5.9675 0.6025 6.09 0.5 6.24 0.5C6.39 0.5 6.5125 0.6025 6.6075 0.8075L8.295 4.22L12.06 4.7675C12.34 4.8125 12.48 4.9275 12.48 5.1125Z"
                                              fill="#FFCC00"
                                          />
                                          </g>
                                          <defs>
                                          <clipPath id="clip0_281_205">
                                              <rect
                                              width="12.48"
                                              height="12"
                                              fill="white"
                                              transform="translate(0 0.5)"
                                              />
                                          </clipPath>
                                          </defs>
                                      </svg>
                                  </span>
                                  <span>
                                      <svg
                                          width="13"
                                          height="13"
                                          viewBox="0 0 13 13"
                                          fill="none"
                                          xmlns="http://www.w3.org/2000/svg"
                                      >
                                          <g clip-path="url(#clip0_281_211)">
                                          <path
                                              d="M9.335 7.4375L11.2625 5.5625L8.5925 5.1725L8.0975 5.0975L7.8725 4.6475L6.68 2.2325V9.455L7.1225 9.6875L9.5075 10.9475L9.0575 8.285L8.9675 7.79L9.335 7.4375ZM12.725 5.4725L10.0025 8.1275L10.6475 11.8775C10.6725 12.0425 10.6575 12.1713 10.6025 12.2638C10.5475 12.3563 10.4625 12.4025 10.3475 12.4025C10.2625 12.4025 10.1625 12.3725 10.0475 12.3125L6.68 10.5425L3.3125 12.3125C3.1975 12.3725 3.0975 12.4025 3.0125 12.4025C2.8975 12.4025 2.8125 12.3563 2.7575 12.2638C2.7025 12.1713 2.6875 12.0425 2.7125 11.8775L3.3575 8.1275L0.627503 5.4725C0.467503 5.3125 0.410003 5.16375 0.455003 5.02625C0.500003 4.88875 0.635003 4.8025 0.860003 4.7675L4.625 4.22L6.3125 0.8075C6.4125 0.6025 6.535 0.5 6.68 0.5C6.82 0.5 6.9425 0.6025 7.0475 0.8075L8.735 4.22L12.5 4.7675C12.725 4.8025 12.86 4.88875 12.905 5.02625C12.95 5.16375 12.89 5.3125 12.725 5.4725Z"
                                              fill="#FFCC00"
                                          />
                                          </g>
                                          <defs>
                                          <clipPath id="clip0_281_211">
                                              <rect
                                              width="12.48"
                                              height="12"
                                              fill="white"
                                              transform="translate(0.439941 0.5)"
                                              />
                                          </clipPath>
                                          </defs>
                                      </svg>
                                  </span>
                                  <span>
                                      <svg
                                          width="14"
                                          height="13"
                                          viewBox="0 0 14 13"
                                          fill="none"
                                          xmlns="http://www.w3.org/2000/svg"
                                      >
                                          <g clip-path="url(#clip0_281_213)">
                                          <path
                                              d="M9.44742 7.79L11.7424 5.5625L8.57742 5.0975L7.15992 2.2325L5.74242 5.0975L2.57742 5.5625L4.87242 7.79L4.32492 10.9475L7.15992 9.455L9.98742 10.9475L9.44742 7.79ZM13.3999 5.1125C13.3999 5.2225 13.3349 5.3425 13.2049 5.4725L10.4824 8.1275L11.1274 11.8775C11.1324 11.9125 11.1349 11.9625 11.1349 12.0275C11.1349 12.2775 11.0324 12.4025 10.8274 12.4025C10.7324 12.4025 10.6324 12.3725 10.5274 12.3125L7.15992 10.5425L3.79242 12.3125C3.68242 12.3725 3.58242 12.4025 3.49242 12.4025C3.38742 12.4025 3.30867 12.3663 3.25617 12.2938C3.20367 12.2213 3.17742 12.1325 3.17742 12.0275C3.17742 11.9975 3.18242 11.9475 3.19242 11.8775L3.83742 8.1275L1.10742 5.4725C0.982422 5.3375 0.919922 5.2175 0.919922 5.1125C0.919922 4.9275 1.05992 4.8125 1.33992 4.7675L5.10492 4.22L6.79242 0.8075C6.88742 0.6025 7.00992 0.5 7.15992 0.5C7.30992 0.5 7.43242 0.6025 7.52742 0.8075L9.21492 4.22L12.9799 4.7675C13.2599 4.8125 13.3999 4.9275 13.3999 5.1125Z"
                                              fill="#FFCC00"
                                          />
                                          </g>
                                          <defs>
                                          <clipPath id="clip0_281_213">
                                              <rect
                                              width="12.48"
                                              height="12"
                                              fill="white"
                                              transform="translate(0.919922 0.5)"
                                              />
                                          </clipPath>
                                          </defs>
                                      </svg>
                                  </span>
                              </div>
                              <div class="fs-12 black-color">9.4k sold</div>
                          </div>
                      </div>
                  </a>
                  <a class="cart" href="#"> Add to cart </a>
              </div>
          </div>
          <div class="col-xl-2 col-6 col-lg-3 mb-4 mx-auto">
              <div class="cart-item">
                  <a href="/product" class="text-decoration-none">
                      <div class="image mb-3">
                          <img
                          width="233"
                          height="192"
                          loading="lazy"
                          class="img-fluid"
                          src="/assets/imgs/home/productt-1.webp"
                          alt="Hashems Turkish Coffee 50 Light/50 Dark 16 Oz"
                          />
                      </div>
                      <div class="px-1">
                          <div class="fs-14 black-color mb-3">
                              Turkish Coffee 50 Light/50 Dark 16 Oz
                          </div>
                          <div class="fs-14 black-color fw-bold mb-3">
                              $13.99 - $19.99
                          </div>
                          <div class="d-flex w-100 justify-content-between align-items-center mb-3">
                              <div>
                                  <span>
                                      <svg
                                          width="13"
                                          height="13"
                                          viewBox="0 0 13 13"
                                          fill="none"
                                          xmlns="http://www.w3.org/2000/svg"
                                      >
                                          <g clip-path="url(#clip0_281_205)">
                                          <path
                                              d="M12.48 5.1125C12.48 5.2225 12.415 5.3425 12.285 5.4725L9.5625 8.1275L10.2075 11.8775C10.2125 11.9125 10.215 11.9625 10.215 12.0275C10.215 12.1325 10.1888 12.2213 10.1363 12.2938C10.0838 12.3663 10.0075 12.4025 9.9075 12.4025C9.8125 12.4025 9.7125 12.3725 9.6075 12.3125L6.24 10.5425L2.8725 12.3125C2.7625 12.3725 2.6625 12.4025 2.5725 12.4025C2.4675 12.4025 2.38875 12.3663 2.33625 12.2938C2.28375 12.2213 2.2575 12.1325 2.2575 12.0275C2.2575 11.9975 2.2625 11.9475 2.2725 11.8775L2.9175 8.1275L0.1875 5.4725C0.0625 5.3375 0 5.2175 0 5.1125C0 4.9275 0.14 4.8125 0.42 4.7675L4.185 4.22L5.8725 0.8075C5.9675 0.6025 6.09 0.5 6.24 0.5C6.39 0.5 6.5125 0.6025 6.6075 0.8075L8.295 4.22L12.06 4.7675C12.34 4.8125 12.48 4.9275 12.48 5.1125Z"
                                              fill="#FFCC00"
                                          />
                                          </g>
                                          <defs>
                                          <clipPath id="clip0_281_205">
                                              <rect
                                              width="12.48"
                                              height="12"
                                              fill="white"
                                              transform="translate(0 0.5)"
                                              />
                                          </clipPath>
                                          </defs>
                                      </svg>
                                  </span>
                                  <span>
                                      <svg
                                          width="13"
                                          height="13"
                                          viewBox="0 0 13 13"
                                          fill="none"
                                          xmlns="http://www.w3.org/2000/svg"
                                      >
                                          <g clip-path="url(#clip0_281_205)">
                                          <path
                                              d="M12.48 5.1125C12.48 5.2225 12.415 5.3425 12.285 5.4725L9.5625 8.1275L10.2075 11.8775C10.2125 11.9125 10.215 11.9625 10.215 12.0275C10.215 12.1325 10.1888 12.2213 10.1363 12.2938C10.0838 12.3663 10.0075 12.4025 9.9075 12.4025C9.8125 12.4025 9.7125 12.3725 9.6075 12.3125L6.24 10.5425L2.8725 12.3125C2.7625 12.3725 2.6625 12.4025 2.5725 12.4025C2.4675 12.4025 2.38875 12.3663 2.33625 12.2938C2.28375 12.2213 2.2575 12.1325 2.2575 12.0275C2.2575 11.9975 2.2625 11.9475 2.2725 11.8775L2.9175 8.1275L0.1875 5.4725C0.0625 5.3375 0 5.2175 0 5.1125C0 4.9275 0.14 4.8125 0.42 4.7675L4.185 4.22L5.8725 0.8075C5.9675 0.6025 6.09 0.5 6.24 0.5C6.39 0.5 6.5125 0.6025 6.6075 0.8075L8.295 4.22L12.06 4.7675C12.34 4.8125 12.48 4.9275 12.48 5.1125Z"
                                              fill="#FFCC00"
                                          />
                                          </g>
                                          <defs>
                                          <clipPath id="clip0_281_205">
                                              <rect
                                              width="12.48"
                                              height="12"
                                              fill="white"
                                              transform="translate(0 0.5)"
                                              />
                                          </clipPath>
                                          </defs>
                                      </svg>
                                  </span>
                                  <span>
                                      <svg
                                          width="13"
                                          height="13"
                                          viewBox="0 0 13 13"
                                          fill="none"
                                          xmlns="http://www.w3.org/2000/svg"
                                      >
                                          <g clip-path="url(#clip0_281_205)">
                                          <path
                                              d="M12.48 5.1125C12.48 5.2225 12.415 5.3425 12.285 5.4725L9.5625 8.1275L10.2075 11.8775C10.2125 11.9125 10.215 11.9625 10.215 12.0275C10.215 12.1325 10.1888 12.2213 10.1363 12.2938C10.0838 12.3663 10.0075 12.4025 9.9075 12.4025C9.8125 12.4025 9.7125 12.3725 9.6075 12.3125L6.24 10.5425L2.8725 12.3125C2.7625 12.3725 2.6625 12.4025 2.5725 12.4025C2.4675 12.4025 2.38875 12.3663 2.33625 12.2938C2.28375 12.2213 2.2575 12.1325 2.2575 12.0275C2.2575 11.9975 2.2625 11.9475 2.2725 11.8775L2.9175 8.1275L0.1875 5.4725C0.0625 5.3375 0 5.2175 0 5.1125C0 4.9275 0.14 4.8125 0.42 4.7675L4.185 4.22L5.8725 0.8075C5.9675 0.6025 6.09 0.5 6.24 0.5C6.39 0.5 6.5125 0.6025 6.6075 0.8075L8.295 4.22L12.06 4.7675C12.34 4.8125 12.48 4.9275 12.48 5.1125Z"
                                              fill="#FFCC00"
                                          />
                                          </g>
                                          <defs>
                                          <clipPath id="clip0_281_205">
                                              <rect
                                              width="12.48"
                                              height="12"
                                              fill="white"
                                              transform="translate(0 0.5)"
                                              />
                                          </clipPath>
                                          </defs>
                                      </svg>
                                  </span>
                                  <span>
                                      <svg
                                          width="13"
                                          height="13"
                                          viewBox="0 0 13 13"
                                          fill="none"
                                          xmlns="http://www.w3.org/2000/svg"
                                      >
                                          <g clip-path="url(#clip0_281_211)">
                                          <path
                                              d="M9.335 7.4375L11.2625 5.5625L8.5925 5.1725L8.0975 5.0975L7.8725 4.6475L6.68 2.2325V9.455L7.1225 9.6875L9.5075 10.9475L9.0575 8.285L8.9675 7.79L9.335 7.4375ZM12.725 5.4725L10.0025 8.1275L10.6475 11.8775C10.6725 12.0425 10.6575 12.1713 10.6025 12.2638C10.5475 12.3563 10.4625 12.4025 10.3475 12.4025C10.2625 12.4025 10.1625 12.3725 10.0475 12.3125L6.68 10.5425L3.3125 12.3125C3.1975 12.3725 3.0975 12.4025 3.0125 12.4025C2.8975 12.4025 2.8125 12.3563 2.7575 12.2638C2.7025 12.1713 2.6875 12.0425 2.7125 11.8775L3.3575 8.1275L0.627503 5.4725C0.467503 5.3125 0.410003 5.16375 0.455003 5.02625C0.500003 4.88875 0.635003 4.8025 0.860003 4.7675L4.625 4.22L6.3125 0.8075C6.4125 0.6025 6.535 0.5 6.68 0.5C6.82 0.5 6.9425 0.6025 7.0475 0.8075L8.735 4.22L12.5 4.7675C12.725 4.8025 12.86 4.88875 12.905 5.02625C12.95 5.16375 12.89 5.3125 12.725 5.4725Z"
                                              fill="#FFCC00"
                                          />
                                          </g>
                                          <defs>
                                          <clipPath id="clip0_281_211">
                                              <rect
                                              width="12.48"
                                              height="12"
                                              fill="white"
                                              transform="translate(0.439941 0.5)"
                                              />
                                          </clipPath>
                                          </defs>
                                      </svg>
                                  </span>
                                  <span>
                                      <svg
                                          width="14"
                                          height="13"
                                          viewBox="0 0 14 13"
                                          fill="none"
                                          xmlns="http://www.w3.org/2000/svg"
                                      >
                                          <g clip-path="url(#clip0_281_213)">
                                          <path
                                              d="M9.44742 7.79L11.7424 5.5625L8.57742 5.0975L7.15992 2.2325L5.74242 5.0975L2.57742 5.5625L4.87242 7.79L4.32492 10.9475L7.15992 9.455L9.98742 10.9475L9.44742 7.79ZM13.3999 5.1125C13.3999 5.2225 13.3349 5.3425 13.2049 5.4725L10.4824 8.1275L11.1274 11.8775C11.1324 11.9125 11.1349 11.9625 11.1349 12.0275C11.1349 12.2775 11.0324 12.4025 10.8274 12.4025C10.7324 12.4025 10.6324 12.3725 10.5274 12.3125L7.15992 10.5425L3.79242 12.3125C3.68242 12.3725 3.58242 12.4025 3.49242 12.4025C3.38742 12.4025 3.30867 12.3663 3.25617 12.2938C3.20367 12.2213 3.17742 12.1325 3.17742 12.0275C3.17742 11.9975 3.18242 11.9475 3.19242 11.8775L3.83742 8.1275L1.10742 5.4725C0.982422 5.3375 0.919922 5.2175 0.919922 5.1125C0.919922 4.9275 1.05992 4.8125 1.33992 4.7675L5.10492 4.22L6.79242 0.8075C6.88742 0.6025 7.00992 0.5 7.15992 0.5C7.30992 0.5 7.43242 0.6025 7.52742 0.8075L9.21492 4.22L12.9799 4.7675C13.2599 4.8125 13.3999 4.9275 13.3999 5.1125Z"
                                              fill="#FFCC00"
                                          />
                                          </g>
                                          <defs>
                                          <clipPath id="clip0_281_213">
                                              <rect
                                              width="12.48"
                                              height="12"
                                              fill="white"
                                              transform="translate(0.919922 0.5)"
                                              />
                                          </clipPath>
                                          </defs>
                                      </svg>
                                  </span>
                              </div>
                              <div class="fs-12 black-color">9.4k sold</div>
                          </div>
                      </div>
                  </a>
                  <a class="cart" href="#"> Add to cart </a>
              </div>
          </div>
          <div class="col-xl-2 col-6 col-lg-3 mb-4 mx-auto">
              <div class="cart-item">
                  <a href="/product" class="text-decoration-none">
                      <div class="image mb-3">
                          <img
                          width="233"
                          height="192"
                          loading="lazy"
                          class="img-fluid"
                          src="/assets/imgs/home/productt-1.webp"
                          alt="Hashems Turkish Coffee 50 Light/50 Dark 16 Oz"
                          />
                      </div>
                      <div class="px-1">
                          <div class="fs-14 black-color mb-3">
                              Turkish Coffee 50 Light/50 Dark 16 Oz
                          </div>
                          <div class="fs-14 black-color fw-bold mb-3">
                              $13.99 - $19.99
                          </div>
                          <div class="d-flex w-100 justify-content-between align-items-center mb-3">
                              <div>
                                  <span>
                                      <svg
                                          width="13"
                                          height="13"
                                          viewBox="0 0 13 13"
                                          fill="none"
                                          xmlns="http://www.w3.org/2000/svg"
                                      >
                                          <g clip-path="url(#clip0_281_205)">
                                          <path
                                              d="M12.48 5.1125C12.48 5.2225 12.415 5.3425 12.285 5.4725L9.5625 8.1275L10.2075 11.8775C10.2125 11.9125 10.215 11.9625 10.215 12.0275C10.215 12.1325 10.1888 12.2213 10.1363 12.2938C10.0838 12.3663 10.0075 12.4025 9.9075 12.4025C9.8125 12.4025 9.7125 12.3725 9.6075 12.3125L6.24 10.5425L2.8725 12.3125C2.7625 12.3725 2.6625 12.4025 2.5725 12.4025C2.4675 12.4025 2.38875 12.3663 2.33625 12.2938C2.28375 12.2213 2.2575 12.1325 2.2575 12.0275C2.2575 11.9975 2.2625 11.9475 2.2725 11.8775L2.9175 8.1275L0.1875 5.4725C0.0625 5.3375 0 5.2175 0 5.1125C0 4.9275 0.14 4.8125 0.42 4.7675L4.185 4.22L5.8725 0.8075C5.9675 0.6025 6.09 0.5 6.24 0.5C6.39 0.5 6.5125 0.6025 6.6075 0.8075L8.295 4.22L12.06 4.7675C12.34 4.8125 12.48 4.9275 12.48 5.1125Z"
                                              fill="#FFCC00"
                                          />
                                          </g>
                                          <defs>
                                          <clipPath id="clip0_281_205">
                                              <rect
                                              width="12.48"
                                              height="12"
                                              fill="white"
                                              transform="translate(0 0.5)"
                                              />
                                          </clipPath>
                                          </defs>
                                      </svg>
                                  </span>
                                  <span>
                                      <svg
                                          width="13"
                                          height="13"
                                          viewBox="0 0 13 13"
                                          fill="none"
                                          xmlns="http://www.w3.org/2000/svg"
                                      >
                                          <g clip-path="url(#clip0_281_205)">
                                          <path
                                              d="M12.48 5.1125C12.48 5.2225 12.415 5.3425 12.285 5.4725L9.5625 8.1275L10.2075 11.8775C10.2125 11.9125 10.215 11.9625 10.215 12.0275C10.215 12.1325 10.1888 12.2213 10.1363 12.2938C10.0838 12.3663 10.0075 12.4025 9.9075 12.4025C9.8125 12.4025 9.7125 12.3725 9.6075 12.3125L6.24 10.5425L2.8725 12.3125C2.7625 12.3725 2.6625 12.4025 2.5725 12.4025C2.4675 12.4025 2.38875 12.3663 2.33625 12.2938C2.28375 12.2213 2.2575 12.1325 2.2575 12.0275C2.2575 11.9975 2.2625 11.9475 2.2725 11.8775L2.9175 8.1275L0.1875 5.4725C0.0625 5.3375 0 5.2175 0 5.1125C0 4.9275 0.14 4.8125 0.42 4.7675L4.185 4.22L5.8725 0.8075C5.9675 0.6025 6.09 0.5 6.24 0.5C6.39 0.5 6.5125 0.6025 6.6075 0.8075L8.295 4.22L12.06 4.7675C12.34 4.8125 12.48 4.9275 12.48 5.1125Z"
                                              fill="#FFCC00"
                                          />
                                          </g>
                                          <defs>
                                          <clipPath id="clip0_281_205">
                                              <rect
                                              width="12.48"
                                              height="12"
                                              fill="white"
                                              transform="translate(0 0.5)"
                                              />
                                          </clipPath>
                                          </defs>
                                      </svg>
                                  </span>
                                  <span>
                                      <svg
                                          width="13"
                                          height="13"
                                          viewBox="0 0 13 13"
                                          fill="none"
                                          xmlns="http://www.w3.org/2000/svg"
                                      >
                                          <g clip-path="url(#clip0_281_205)">
                                          <path
                                              d="M12.48 5.1125C12.48 5.2225 12.415 5.3425 12.285 5.4725L9.5625 8.1275L10.2075 11.8775C10.2125 11.9125 10.215 11.9625 10.215 12.0275C10.215 12.1325 10.1888 12.2213 10.1363 12.2938C10.0838 12.3663 10.0075 12.4025 9.9075 12.4025C9.8125 12.4025 9.7125 12.3725 9.6075 12.3125L6.24 10.5425L2.8725 12.3125C2.7625 12.3725 2.6625 12.4025 2.5725 12.4025C2.4675 12.4025 2.38875 12.3663 2.33625 12.2938C2.28375 12.2213 2.2575 12.1325 2.2575 12.0275C2.2575 11.9975 2.2625 11.9475 2.2725 11.8775L2.9175 8.1275L0.1875 5.4725C0.0625 5.3375 0 5.2175 0 5.1125C0 4.9275 0.14 4.8125 0.42 4.7675L4.185 4.22L5.8725 0.8075C5.9675 0.6025 6.09 0.5 6.24 0.5C6.39 0.5 6.5125 0.6025 6.6075 0.8075L8.295 4.22L12.06 4.7675C12.34 4.8125 12.48 4.9275 12.48 5.1125Z"
                                              fill="#FFCC00"
                                          />
                                          </g>
                                          <defs>
                                          <clipPath id="clip0_281_205">
                                              <rect
                                              width="12.48"
                                              height="12"
                                              fill="white"
                                              transform="translate(0 0.5)"
                                              />
                                          </clipPath>
                                          </defs>
                                      </svg>
                                  </span>
                                  <span>
                                      <svg
                                          width="13"
                                          height="13"
                                          viewBox="0 0 13 13"
                                          fill="none"
                                          xmlns="http://www.w3.org/2000/svg"
                                      >
                                          <g clip-path="url(#clip0_281_211)">
                                          <path
                                              d="M9.335 7.4375L11.2625 5.5625L8.5925 5.1725L8.0975 5.0975L7.8725 4.6475L6.68 2.2325V9.455L7.1225 9.6875L9.5075 10.9475L9.0575 8.285L8.9675 7.79L9.335 7.4375ZM12.725 5.4725L10.0025 8.1275L10.6475 11.8775C10.6725 12.0425 10.6575 12.1713 10.6025 12.2638C10.5475 12.3563 10.4625 12.4025 10.3475 12.4025C10.2625 12.4025 10.1625 12.3725 10.0475 12.3125L6.68 10.5425L3.3125 12.3125C3.1975 12.3725 3.0975 12.4025 3.0125 12.4025C2.8975 12.4025 2.8125 12.3563 2.7575 12.2638C2.7025 12.1713 2.6875 12.0425 2.7125 11.8775L3.3575 8.1275L0.627503 5.4725C0.467503 5.3125 0.410003 5.16375 0.455003 5.02625C0.500003 4.88875 0.635003 4.8025 0.860003 4.7675L4.625 4.22L6.3125 0.8075C6.4125 0.6025 6.535 0.5 6.68 0.5C6.82 0.5 6.9425 0.6025 7.0475 0.8075L8.735 4.22L12.5 4.7675C12.725 4.8025 12.86 4.88875 12.905 5.02625C12.95 5.16375 12.89 5.3125 12.725 5.4725Z"
                                              fill="#FFCC00"
                                          />
                                          </g>
                                          <defs>
                                          <clipPath id="clip0_281_211">
                                              <rect
                                              width="12.48"
                                              height="12"
                                              fill="white"
                                              transform="translate(0.439941 0.5)"
                                              />
                                          </clipPath>
                                          </defs>
                                      </svg>
                                  </span>
                                  <span>
                                      <svg
                                          width="14"
                                          height="13"
                                          viewBox="0 0 14 13"
                                          fill="none"
                                          xmlns="http://www.w3.org/2000/svg"
                                      >
                                          <g clip-path="url(#clip0_281_213)">
                                          <path
                                              d="M9.44742 7.79L11.7424 5.5625L8.57742 5.0975L7.15992 2.2325L5.74242 5.0975L2.57742 5.5625L4.87242 7.79L4.32492 10.9475L7.15992 9.455L9.98742 10.9475L9.44742 7.79ZM13.3999 5.1125C13.3999 5.2225 13.3349 5.3425 13.2049 5.4725L10.4824 8.1275L11.1274 11.8775C11.1324 11.9125 11.1349 11.9625 11.1349 12.0275C11.1349 12.2775 11.0324 12.4025 10.8274 12.4025C10.7324 12.4025 10.6324 12.3725 10.5274 12.3125L7.15992 10.5425L3.79242 12.3125C3.68242 12.3725 3.58242 12.4025 3.49242 12.4025C3.38742 12.4025 3.30867 12.3663 3.25617 12.2938C3.20367 12.2213 3.17742 12.1325 3.17742 12.0275C3.17742 11.9975 3.18242 11.9475 3.19242 11.8775L3.83742 8.1275L1.10742 5.4725C0.982422 5.3375 0.919922 5.2175 0.919922 5.1125C0.919922 4.9275 1.05992 4.8125 1.33992 4.7675L5.10492 4.22L6.79242 0.8075C6.88742 0.6025 7.00992 0.5 7.15992 0.5C7.30992 0.5 7.43242 0.6025 7.52742 0.8075L9.21492 4.22L12.9799 4.7675C13.2599 4.8125 13.3999 4.9275 13.3999 5.1125Z"
                                              fill="#FFCC00"
                                          />
                                          </g>
                                          <defs>
                                          <clipPath id="clip0_281_213">
                                              <rect
                                              width="12.48"
                                              height="12"
                                              fill="white"
                                              transform="translate(0.919922 0.5)"
                                              />
                                          </clipPath>
                                          </defs>
                                      </svg>
                                  </span>
                              </div>
                              <div class="fs-12 black-color">9.4k sold</div>
                          </div>
                      </div>
                  </a>
                  <a class="cart" href="#"> Add to cart </a>
              </div>
          </div>
          <div class="col-xl-2 col-6 col-lg-3 mb-4 mx-auto">
              <div class="cart-item">
                  <a href="/product" class="text-decoration-none">
                      <div class="image mb-3">
                          <img
                          width="233"
                          height="192"
                          loading="lazy"
                          class="img-fluid"
                          src="/assets/imgs/home/productt-1.webp"
                          alt="Hashems Turkish Coffee 50 Light/50 Dark 16 Oz"
                          />
                      </div>
                      <div class="px-1">
                          <div class="fs-14 black-color mb-3">
                              Turkish Coffee 50 Light/50 Dark 16 Oz
                          </div>
                          <div class="fs-14 black-color fw-bold mb-3">
                              $13.99 - $19.99
                          </div>
                          <div class="d-flex w-100 justify-content-between align-items-center mb-3">
                              <div>
                                  <span>
                                      <svg
                                          width="13"
                                          height="13"
                                          viewBox="0 0 13 13"
                                          fill="none"
                                          xmlns="http://www.w3.org/2000/svg"
                                      >
                                          <g clip-path="url(#clip0_281_205)">
                                          <path
                                              d="M12.48 5.1125C12.48 5.2225 12.415 5.3425 12.285 5.4725L9.5625 8.1275L10.2075 11.8775C10.2125 11.9125 10.215 11.9625 10.215 12.0275C10.215 12.1325 10.1888 12.2213 10.1363 12.2938C10.0838 12.3663 10.0075 12.4025 9.9075 12.4025C9.8125 12.4025 9.7125 12.3725 9.6075 12.3125L6.24 10.5425L2.8725 12.3125C2.7625 12.3725 2.6625 12.4025 2.5725 12.4025C2.4675 12.4025 2.38875 12.3663 2.33625 12.2938C2.28375 12.2213 2.2575 12.1325 2.2575 12.0275C2.2575 11.9975 2.2625 11.9475 2.2725 11.8775L2.9175 8.1275L0.1875 5.4725C0.0625 5.3375 0 5.2175 0 5.1125C0 4.9275 0.14 4.8125 0.42 4.7675L4.185 4.22L5.8725 0.8075C5.9675 0.6025 6.09 0.5 6.24 0.5C6.39 0.5 6.5125 0.6025 6.6075 0.8075L8.295 4.22L12.06 4.7675C12.34 4.8125 12.48 4.9275 12.48 5.1125Z"
                                              fill="#FFCC00"
                                          />
                                          </g>
                                          <defs>
                                          <clipPath id="clip0_281_205">
                                              <rect
                                              width="12.48"
                                              height="12"
                                              fill="white"
                                              transform="translate(0 0.5)"
                                              />
                                          </clipPath>
                                          </defs>
                                      </svg>
                                  </span>
                                  <span>
                                      <svg
                                          width="13"
                                          height="13"
                                          viewBox="0 0 13 13"
                                          fill="none"
                                          xmlns="http://www.w3.org/2000/svg"
                                      >
                                          <g clip-path="url(#clip0_281_205)">
                                          <path
                                              d="M12.48 5.1125C12.48 5.2225 12.415 5.3425 12.285 5.4725L9.5625 8.1275L10.2075 11.8775C10.2125 11.9125 10.215 11.9625 10.215 12.0275C10.215 12.1325 10.1888 12.2213 10.1363 12.2938C10.0838 12.3663 10.0075 12.4025 9.9075 12.4025C9.8125 12.4025 9.7125 12.3725 9.6075 12.3125L6.24 10.5425L2.8725 12.3125C2.7625 12.3725 2.6625 12.4025 2.5725 12.4025C2.4675 12.4025 2.38875 12.3663 2.33625 12.2938C2.28375 12.2213 2.2575 12.1325 2.2575 12.0275C2.2575 11.9975 2.2625 11.9475 2.2725 11.8775L2.9175 8.1275L0.1875 5.4725C0.0625 5.3375 0 5.2175 0 5.1125C0 4.9275 0.14 4.8125 0.42 4.7675L4.185 4.22L5.8725 0.8075C5.9675 0.6025 6.09 0.5 6.24 0.5C6.39 0.5 6.5125 0.6025 6.6075 0.8075L8.295 4.22L12.06 4.7675C12.34 4.8125 12.48 4.9275 12.48 5.1125Z"
                                              fill="#FFCC00"
                                          />
                                          </g>
                                          <defs>
                                          <clipPath id="clip0_281_205">
                                              <rect
                                              width="12.48"
                                              height="12"
                                              fill="white"
                                              transform="translate(0 0.5)"
                                              />
                                          </clipPath>
                                          </defs>
                                      </svg>
                                  </span>
                                  <span>
                                      <svg
                                          width="13"
                                          height="13"
                                          viewBox="0 0 13 13"
                                          fill="none"
                                          xmlns="http://www.w3.org/2000/svg"
                                      >
                                          <g clip-path="url(#clip0_281_205)">
                                          <path
                                              d="M12.48 5.1125C12.48 5.2225 12.415 5.3425 12.285 5.4725L9.5625 8.1275L10.2075 11.8775C10.2125 11.9125 10.215 11.9625 10.215 12.0275C10.215 12.1325 10.1888 12.2213 10.1363 12.2938C10.0838 12.3663 10.0075 12.4025 9.9075 12.4025C9.8125 12.4025 9.7125 12.3725 9.6075 12.3125L6.24 10.5425L2.8725 12.3125C2.7625 12.3725 2.6625 12.4025 2.5725 12.4025C2.4675 12.4025 2.38875 12.3663 2.33625 12.2938C2.28375 12.2213 2.2575 12.1325 2.2575 12.0275C2.2575 11.9975 2.2625 11.9475 2.2725 11.8775L2.9175 8.1275L0.1875 5.4725C0.0625 5.3375 0 5.2175 0 5.1125C0 4.9275 0.14 4.8125 0.42 4.7675L4.185 4.22L5.8725 0.8075C5.9675 0.6025 6.09 0.5 6.24 0.5C6.39 0.5 6.5125 0.6025 6.6075 0.8075L8.295 4.22L12.06 4.7675C12.34 4.8125 12.48 4.9275 12.48 5.1125Z"
                                              fill="#FFCC00"
                                          />
                                          </g>
                                          <defs>
                                          <clipPath id="clip0_281_205">
                                              <rect
                                              width="12.48"
                                              height="12"
                                              fill="white"
                                              transform="translate(0 0.5)"
                                              />
                                          </clipPath>
                                          </defs>
                                      </svg>
                                  </span>
                                  <span>
                                      <svg
                                          width="13"
                                          height="13"
                                          viewBox="0 0 13 13"
                                          fill="none"
                                          xmlns="http://www.w3.org/2000/svg"
                                      >
                                          <g clip-path="url(#clip0_281_211)">
                                          <path
                                              d="M9.335 7.4375L11.2625 5.5625L8.5925 5.1725L8.0975 5.0975L7.8725 4.6475L6.68 2.2325V9.455L7.1225 9.6875L9.5075 10.9475L9.0575 8.285L8.9675 7.79L9.335 7.4375ZM12.725 5.4725L10.0025 8.1275L10.6475 11.8775C10.6725 12.0425 10.6575 12.1713 10.6025 12.2638C10.5475 12.3563 10.4625 12.4025 10.3475 12.4025C10.2625 12.4025 10.1625 12.3725 10.0475 12.3125L6.68 10.5425L3.3125 12.3125C3.1975 12.3725 3.0975 12.4025 3.0125 12.4025C2.8975 12.4025 2.8125 12.3563 2.7575 12.2638C2.7025 12.1713 2.6875 12.0425 2.7125 11.8775L3.3575 8.1275L0.627503 5.4725C0.467503 5.3125 0.410003 5.16375 0.455003 5.02625C0.500003 4.88875 0.635003 4.8025 0.860003 4.7675L4.625 4.22L6.3125 0.8075C6.4125 0.6025 6.535 0.5 6.68 0.5C6.82 0.5 6.9425 0.6025 7.0475 0.8075L8.735 4.22L12.5 4.7675C12.725 4.8025 12.86 4.88875 12.905 5.02625C12.95 5.16375 12.89 5.3125 12.725 5.4725Z"
                                              fill="#FFCC00"
                                          />
                                          </g>
                                          <defs>
                                          <clipPath id="clip0_281_211">
                                              <rect
                                              width="12.48"
                                              height="12"
                                              fill="white"
                                              transform="translate(0.439941 0.5)"
                                              />
                                          </clipPath>
                                          </defs>
                                      </svg>
                                  </span>
                                  <span>
                                      <svg
                                          width="14"
                                          height="13"
                                          viewBox="0 0 14 13"
                                          fill="none"
                                          xmlns="http://www.w3.org/2000/svg"
                                      >
                                          <g clip-path="url(#clip0_281_213)">
                                          <path
                                              d="M9.44742 7.79L11.7424 5.5625L8.57742 5.0975L7.15992 2.2325L5.74242 5.0975L2.57742 5.5625L4.87242 7.79L4.32492 10.9475L7.15992 9.455L9.98742 10.9475L9.44742 7.79ZM13.3999 5.1125C13.3999 5.2225 13.3349 5.3425 13.2049 5.4725L10.4824 8.1275L11.1274 11.8775C11.1324 11.9125 11.1349 11.9625 11.1349 12.0275C11.1349 12.2775 11.0324 12.4025 10.8274 12.4025C10.7324 12.4025 10.6324 12.3725 10.5274 12.3125L7.15992 10.5425L3.79242 12.3125C3.68242 12.3725 3.58242 12.4025 3.49242 12.4025C3.38742 12.4025 3.30867 12.3663 3.25617 12.2938C3.20367 12.2213 3.17742 12.1325 3.17742 12.0275C3.17742 11.9975 3.18242 11.9475 3.19242 11.8775L3.83742 8.1275L1.10742 5.4725C0.982422 5.3375 0.919922 5.2175 0.919922 5.1125C0.919922 4.9275 1.05992 4.8125 1.33992 4.7675L5.10492 4.22L6.79242 0.8075C6.88742 0.6025 7.00992 0.5 7.15992 0.5C7.30992 0.5 7.43242 0.6025 7.52742 0.8075L9.21492 4.22L12.9799 4.7675C13.2599 4.8125 13.3999 4.9275 13.3999 5.1125Z"
                                              fill="#FFCC00"
                                          />
                                          </g>
                                          <defs>
                                          <clipPath id="clip0_281_213">
                                              <rect
                                              width="12.48"
                                              height="12"
                                              fill="white"
                                              transform="translate(0.919922 0.5)"
                                              />
                                          </clipPath>
                                          </defs>
                                      </svg>
                                  </span>
                              </div>
                              <div class="fs-12 black-color">9.4k sold</div>
                          </div>
                      </div>
                  </a>
                  <a class="cart" href="#"> Add to cart </a>
              </div>
          </div>
          <div class="col-xl-2 col-6 col-lg-3 mb-4 mx-auto">
              <div class="cart-item">
                  <a href="/product" class="text-decoration-none">
                      <div class="image mb-3">
                          <img
                          width="233"
                          height="192"
                          loading="lazy"
                          class="img-fluid"
                          src="/assets/imgs/home/productt-1.webp"
                          alt="Hashems Turkish Coffee 50 Light/50 Dark 16 Oz"
                          />
                      </div>
                      <div class="px-1">
                          <div class="fs-14 black-color mb-3">
                              Turkish Coffee 50 Light/50 Dark 16 Oz
                          </div>
                          <div class="fs-14 black-color fw-bold mb-3">
                              $13.99 - $19.99
                          </div>
                          <div class="d-flex w-100 justify-content-between align-items-center mb-3">
                              <div>
                                  <span>
                                      <svg
                                          width="13"
                                          height="13"
                                          viewBox="0 0 13 13"
                                          fill="none"
                                          xmlns="http://www.w3.org/2000/svg"
                                      >
                                          <g clip-path="url(#clip0_281_205)">
                                          <path
                                              d="M12.48 5.1125C12.48 5.2225 12.415 5.3425 12.285 5.4725L9.5625 8.1275L10.2075 11.8775C10.2125 11.9125 10.215 11.9625 10.215 12.0275C10.215 12.1325 10.1888 12.2213 10.1363 12.2938C10.0838 12.3663 10.0075 12.4025 9.9075 12.4025C9.8125 12.4025 9.7125 12.3725 9.6075 12.3125L6.24 10.5425L2.8725 12.3125C2.7625 12.3725 2.6625 12.4025 2.5725 12.4025C2.4675 12.4025 2.38875 12.3663 2.33625 12.2938C2.28375 12.2213 2.2575 12.1325 2.2575 12.0275C2.2575 11.9975 2.2625 11.9475 2.2725 11.8775L2.9175 8.1275L0.1875 5.4725C0.0625 5.3375 0 5.2175 0 5.1125C0 4.9275 0.14 4.8125 0.42 4.7675L4.185 4.22L5.8725 0.8075C5.9675 0.6025 6.09 0.5 6.24 0.5C6.39 0.5 6.5125 0.6025 6.6075 0.8075L8.295 4.22L12.06 4.7675C12.34 4.8125 12.48 4.9275 12.48 5.1125Z"
                                              fill="#FFCC00"
                                          />
                                          </g>
                                          <defs>
                                          <clipPath id="clip0_281_205">
                                              <rect
                                              width="12.48"
                                              height="12"
                                              fill="white"
                                              transform="translate(0 0.5)"
                                              />
                                          </clipPath>
                                          </defs>
                                      </svg>
                                  </span>
                                  <span>
                                      <svg
                                          width="13"
                                          height="13"
                                          viewBox="0 0 13 13"
                                          fill="none"
                                          xmlns="http://www.w3.org/2000/svg"
                                      >
                                          <g clip-path="url(#clip0_281_205)">
                                          <path
                                              d="M12.48 5.1125C12.48 5.2225 12.415 5.3425 12.285 5.4725L9.5625 8.1275L10.2075 11.8775C10.2125 11.9125 10.215 11.9625 10.215 12.0275C10.215 12.1325 10.1888 12.2213 10.1363 12.2938C10.0838 12.3663 10.0075 12.4025 9.9075 12.4025C9.8125 12.4025 9.7125 12.3725 9.6075 12.3125L6.24 10.5425L2.8725 12.3125C2.7625 12.3725 2.6625 12.4025 2.5725 12.4025C2.4675 12.4025 2.38875 12.3663 2.33625 12.2938C2.28375 12.2213 2.2575 12.1325 2.2575 12.0275C2.2575 11.9975 2.2625 11.9475 2.2725 11.8775L2.9175 8.1275L0.1875 5.4725C0.0625 5.3375 0 5.2175 0 5.1125C0 4.9275 0.14 4.8125 0.42 4.7675L4.185 4.22L5.8725 0.8075C5.9675 0.6025 6.09 0.5 6.24 0.5C6.39 0.5 6.5125 0.6025 6.6075 0.8075L8.295 4.22L12.06 4.7675C12.34 4.8125 12.48 4.9275 12.48 5.1125Z"
                                              fill="#FFCC00"
                                          />
                                          </g>
                                          <defs>
                                          <clipPath id="clip0_281_205">
                                              <rect
                                              width="12.48"
                                              height="12"
                                              fill="white"
                                              transform="translate(0 0.5)"
                                              />
                                          </clipPath>
                                          </defs>
                                      </svg>
                                  </span>
                                  <span>
                                      <svg
                                          width="13"
                                          height="13"
                                          viewBox="0 0 13 13"
                                          fill="none"
                                          xmlns="http://www.w3.org/2000/svg"
                                      >
                                          <g clip-path="url(#clip0_281_205)">
                                          <path
                                              d="M12.48 5.1125C12.48 5.2225 12.415 5.3425 12.285 5.4725L9.5625 8.1275L10.2075 11.8775C10.2125 11.9125 10.215 11.9625 10.215 12.0275C10.215 12.1325 10.1888 12.2213 10.1363 12.2938C10.0838 12.3663 10.0075 12.4025 9.9075 12.4025C9.8125 12.4025 9.7125 12.3725 9.6075 12.3125L6.24 10.5425L2.8725 12.3125C2.7625 12.3725 2.6625 12.4025 2.5725 12.4025C2.4675 12.4025 2.38875 12.3663 2.33625 12.2938C2.28375 12.2213 2.2575 12.1325 2.2575 12.0275C2.2575 11.9975 2.2625 11.9475 2.2725 11.8775L2.9175 8.1275L0.1875 5.4725C0.0625 5.3375 0 5.2175 0 5.1125C0 4.9275 0.14 4.8125 0.42 4.7675L4.185 4.22L5.8725 0.8075C5.9675 0.6025 6.09 0.5 6.24 0.5C6.39 0.5 6.5125 0.6025 6.6075 0.8075L8.295 4.22L12.06 4.7675C12.34 4.8125 12.48 4.9275 12.48 5.1125Z"
                                              fill="#FFCC00"
                                          />
                                          </g>
                                          <defs>
                                          <clipPath id="clip0_281_205">
                                              <rect
                                              width="12.48"
                                              height="12"
                                              fill="white"
                                              transform="translate(0 0.5)"
                                              />
                                          </clipPath>
                                          </defs>
                                      </svg>
                                  </span>
                                  <span>
                                      <svg
                                          width="13"
                                          height="13"
                                          viewBox="0 0 13 13"
                                          fill="none"
                                          xmlns="http://www.w3.org/2000/svg"
                                      >
                                          <g clip-path="url(#clip0_281_211)">
                                          <path
                                              d="M9.335 7.4375L11.2625 5.5625L8.5925 5.1725L8.0975 5.0975L7.8725 4.6475L6.68 2.2325V9.455L7.1225 9.6875L9.5075 10.9475L9.0575 8.285L8.9675 7.79L9.335 7.4375ZM12.725 5.4725L10.0025 8.1275L10.6475 11.8775C10.6725 12.0425 10.6575 12.1713 10.6025 12.2638C10.5475 12.3563 10.4625 12.4025 10.3475 12.4025C10.2625 12.4025 10.1625 12.3725 10.0475 12.3125L6.68 10.5425L3.3125 12.3125C3.1975 12.3725 3.0975 12.4025 3.0125 12.4025C2.8975 12.4025 2.8125 12.3563 2.7575 12.2638C2.7025 12.1713 2.6875 12.0425 2.7125 11.8775L3.3575 8.1275L0.627503 5.4725C0.467503 5.3125 0.410003 5.16375 0.455003 5.02625C0.500003 4.88875 0.635003 4.8025 0.860003 4.7675L4.625 4.22L6.3125 0.8075C6.4125 0.6025 6.535 0.5 6.68 0.5C6.82 0.5 6.9425 0.6025 7.0475 0.8075L8.735 4.22L12.5 4.7675C12.725 4.8025 12.86 4.88875 12.905 5.02625C12.95 5.16375 12.89 5.3125 12.725 5.4725Z"
                                              fill="#FFCC00"
                                          />
                                          </g>
                                          <defs>
                                          <clipPath id="clip0_281_211">
                                              <rect
                                              width="12.48"
                                              height="12"
                                              fill="white"
                                              transform="translate(0.439941 0.5)"
                                              />
                                          </clipPath>
                                          </defs>
                                      </svg>
                                  </span>
                                  <span>
                                      <svg
                                          width="14"
                                          height="13"
                                          viewBox="0 0 14 13"
                                          fill="none"
                                          xmlns="http://www.w3.org/2000/svg"
                                      >
                                          <g clip-path="url(#clip0_281_213)">
                                          <path
                                              d="M9.44742 7.79L11.7424 5.5625L8.57742 5.0975L7.15992 2.2325L5.74242 5.0975L2.57742 5.5625L4.87242 7.79L4.32492 10.9475L7.15992 9.455L9.98742 10.9475L9.44742 7.79ZM13.3999 5.1125C13.3999 5.2225 13.3349 5.3425 13.2049 5.4725L10.4824 8.1275L11.1274 11.8775C11.1324 11.9125 11.1349 11.9625 11.1349 12.0275C11.1349 12.2775 11.0324 12.4025 10.8274 12.4025C10.7324 12.4025 10.6324 12.3725 10.5274 12.3125L7.15992 10.5425L3.79242 12.3125C3.68242 12.3725 3.58242 12.4025 3.49242 12.4025C3.38742 12.4025 3.30867 12.3663 3.25617 12.2938C3.20367 12.2213 3.17742 12.1325 3.17742 12.0275C3.17742 11.9975 3.18242 11.9475 3.19242 11.8775L3.83742 8.1275L1.10742 5.4725C0.982422 5.3375 0.919922 5.2175 0.919922 5.1125C0.919922 4.9275 1.05992 4.8125 1.33992 4.7675L5.10492 4.22L6.79242 0.8075C6.88742 0.6025 7.00992 0.5 7.15992 0.5C7.30992 0.5 7.43242 0.6025 7.52742 0.8075L9.21492 4.22L12.9799 4.7675C13.2599 4.8125 13.3999 4.9275 13.3999 5.1125Z"
                                              fill="#FFCC00"
                                          />
                                          </g>
                                          <defs>
                                          <clipPath id="clip0_281_213">
                                              <rect
                                              width="12.48"
                                              height="12"
                                              fill="white"
                                              transform="translate(0.919922 0.5)"
                                              />
                                          </clipPath>
                                          </defs>
                                      </svg>
                                  </span>
                              </div>
                              <div class="fs-12 black-color">9.4k sold</div>
                          </div>
                      </div>
                  </a>
                  <a class="cart" href="#"> Add to cart </a>
              </div>
          </div>
        </div>
      </div>
    </section>

    <section class="py-5">
      <div class="container">
        <div>
          <h5 class="fs-24 black-color fw-600 d-flex align-items-center">
            <span>You may also like</span>
            <a class="fs-14 green-color ms-5 text-decoration-none" href="#"
              >Explore now >></a
            >
          </h5>
        </div>
        <div class="row mt-4">
          <div class="col-xl-2 col-6 col-lg-3 mb-4 mx-auto">
              <div class="cart-item">
                  <a href="/product" class="text-decoration-none">
                      <div class="image mb-3">
                          <img
                          width="233"
                          height="192"
                          loading="lazy"
                          class="img-fluid"
                          src="/assets/imgs/home/productt-1.webp"
                          alt="Hashems Turkish Coffee 50 Light/50 Dark 16 Oz"
                          />
                      </div>
                      <div class="px-1">
                          <div class="fs-14 black-color mb-3">
                              Turkish Coffee 50 Light/50 Dark 16 Oz
                          </div>
                          <div class="fs-14 black-color fw-bold mb-3">
                              $13.99 - $19.99
                          </div>
                          <div class="d-flex w-100 justify-content-between align-items-center mb-3">
                              <div>
                                  <span>
                                      <svg
                                          width="13"
                                          height="13"
                                          viewBox="0 0 13 13"
                                          fill="none"
                                          xmlns="http://www.w3.org/2000/svg"
                                      >
                                          <g clip-path="url(#clip0_281_205)">
                                          <path
                                              d="M12.48 5.1125C12.48 5.2225 12.415 5.3425 12.285 5.4725L9.5625 8.1275L10.2075 11.8775C10.2125 11.9125 10.215 11.9625 10.215 12.0275C10.215 12.1325 10.1888 12.2213 10.1363 12.2938C10.0838 12.3663 10.0075 12.4025 9.9075 12.4025C9.8125 12.4025 9.7125 12.3725 9.6075 12.3125L6.24 10.5425L2.8725 12.3125C2.7625 12.3725 2.6625 12.4025 2.5725 12.4025C2.4675 12.4025 2.38875 12.3663 2.33625 12.2938C2.28375 12.2213 2.2575 12.1325 2.2575 12.0275C2.2575 11.9975 2.2625 11.9475 2.2725 11.8775L2.9175 8.1275L0.1875 5.4725C0.0625 5.3375 0 5.2175 0 5.1125C0 4.9275 0.14 4.8125 0.42 4.7675L4.185 4.22L5.8725 0.8075C5.9675 0.6025 6.09 0.5 6.24 0.5C6.39 0.5 6.5125 0.6025 6.6075 0.8075L8.295 4.22L12.06 4.7675C12.34 4.8125 12.48 4.9275 12.48 5.1125Z"
                                              fill="#FFCC00"
                                          />
                                          </g>
                                          <defs>
                                          <clipPath id="clip0_281_205">
                                              <rect
                                              width="12.48"
                                              height="12"
                                              fill="white"
                                              transform="translate(0 0.5)"
                                              />
                                          </clipPath>
                                          </defs>
                                      </svg>
                                  </span>
                                  <span>
                                      <svg
                                          width="13"
                                          height="13"
                                          viewBox="0 0 13 13"
                                          fill="none"
                                          xmlns="http://www.w3.org/2000/svg"
                                      >
                                          <g clip-path="url(#clip0_281_205)">
                                          <path
                                              d="M12.48 5.1125C12.48 5.2225 12.415 5.3425 12.285 5.4725L9.5625 8.1275L10.2075 11.8775C10.2125 11.9125 10.215 11.9625 10.215 12.0275C10.215 12.1325 10.1888 12.2213 10.1363 12.2938C10.0838 12.3663 10.0075 12.4025 9.9075 12.4025C9.8125 12.4025 9.7125 12.3725 9.6075 12.3125L6.24 10.5425L2.8725 12.3125C2.7625 12.3725 2.6625 12.4025 2.5725 12.4025C2.4675 12.4025 2.38875 12.3663 2.33625 12.2938C2.28375 12.2213 2.2575 12.1325 2.2575 12.0275C2.2575 11.9975 2.2625 11.9475 2.2725 11.8775L2.9175 8.1275L0.1875 5.4725C0.0625 5.3375 0 5.2175 0 5.1125C0 4.9275 0.14 4.8125 0.42 4.7675L4.185 4.22L5.8725 0.8075C5.9675 0.6025 6.09 0.5 6.24 0.5C6.39 0.5 6.5125 0.6025 6.6075 0.8075L8.295 4.22L12.06 4.7675C12.34 4.8125 12.48 4.9275 12.48 5.1125Z"
                                              fill="#FFCC00"
                                          />
                                          </g>
                                          <defs>
                                          <clipPath id="clip0_281_205">
                                              <rect
                                              width="12.48"
                                              height="12"
                                              fill="white"
                                              transform="translate(0 0.5)"
                                              />
                                          </clipPath>
                                          </defs>
                                      </svg>
                                  </span>
                                  <span>
                                      <svg
                                          width="13"
                                          height="13"
                                          viewBox="0 0 13 13"
                                          fill="none"
                                          xmlns="http://www.w3.org/2000/svg"
                                      >
                                          <g clip-path="url(#clip0_281_205)">
                                          <path
                                              d="M12.48 5.1125C12.48 5.2225 12.415 5.3425 12.285 5.4725L9.5625 8.1275L10.2075 11.8775C10.2125 11.9125 10.215 11.9625 10.215 12.0275C10.215 12.1325 10.1888 12.2213 10.1363 12.2938C10.0838 12.3663 10.0075 12.4025 9.9075 12.4025C9.8125 12.4025 9.7125 12.3725 9.6075 12.3125L6.24 10.5425L2.8725 12.3125C2.7625 12.3725 2.6625 12.4025 2.5725 12.4025C2.4675 12.4025 2.38875 12.3663 2.33625 12.2938C2.28375 12.2213 2.2575 12.1325 2.2575 12.0275C2.2575 11.9975 2.2625 11.9475 2.2725 11.8775L2.9175 8.1275L0.1875 5.4725C0.0625 5.3375 0 5.2175 0 5.1125C0 4.9275 0.14 4.8125 0.42 4.7675L4.185 4.22L5.8725 0.8075C5.9675 0.6025 6.09 0.5 6.24 0.5C6.39 0.5 6.5125 0.6025 6.6075 0.8075L8.295 4.22L12.06 4.7675C12.34 4.8125 12.48 4.9275 12.48 5.1125Z"
                                              fill="#FFCC00"
                                          />
                                          </g>
                                          <defs>
                                          <clipPath id="clip0_281_205">
                                              <rect
                                              width="12.48"
                                              height="12"
                                              fill="white"
                                              transform="translate(0 0.5)"
                                              />
                                          </clipPath>
                                          </defs>
                                      </svg>
                                  </span>
                                  <span>
                                      <svg
                                          width="13"
                                          height="13"
                                          viewBox="0 0 13 13"
                                          fill="none"
                                          xmlns="http://www.w3.org/2000/svg"
                                      >
                                          <g clip-path="url(#clip0_281_211)">
                                          <path
                                              d="M9.335 7.4375L11.2625 5.5625L8.5925 5.1725L8.0975 5.0975L7.8725 4.6475L6.68 2.2325V9.455L7.1225 9.6875L9.5075 10.9475L9.0575 8.285L8.9675 7.79L9.335 7.4375ZM12.725 5.4725L10.0025 8.1275L10.6475 11.8775C10.6725 12.0425 10.6575 12.1713 10.6025 12.2638C10.5475 12.3563 10.4625 12.4025 10.3475 12.4025C10.2625 12.4025 10.1625 12.3725 10.0475 12.3125L6.68 10.5425L3.3125 12.3125C3.1975 12.3725 3.0975 12.4025 3.0125 12.4025C2.8975 12.4025 2.8125 12.3563 2.7575 12.2638C2.7025 12.1713 2.6875 12.0425 2.7125 11.8775L3.3575 8.1275L0.627503 5.4725C0.467503 5.3125 0.410003 5.16375 0.455003 5.02625C0.500003 4.88875 0.635003 4.8025 0.860003 4.7675L4.625 4.22L6.3125 0.8075C6.4125 0.6025 6.535 0.5 6.68 0.5C6.82 0.5 6.9425 0.6025 7.0475 0.8075L8.735 4.22L12.5 4.7675C12.725 4.8025 12.86 4.88875 12.905 5.02625C12.95 5.16375 12.89 5.3125 12.725 5.4725Z"
                                              fill="#FFCC00"
                                          />
                                          </g>
                                          <defs>
                                          <clipPath id="clip0_281_211">
                                              <rect
                                              width="12.48"
                                              height="12"
                                              fill="white"
                                              transform="translate(0.439941 0.5)"
                                              />
                                          </clipPath>
                                          </defs>
                                      </svg>
                                  </span>
                                  <span>
                                      <svg
                                          width="14"
                                          height="13"
                                          viewBox="0 0 14 13"
                                          fill="none"
                                          xmlns="http://www.w3.org/2000/svg"
                                      >
                                          <g clip-path="url(#clip0_281_213)">
                                          <path
                                              d="M9.44742 7.79L11.7424 5.5625L8.57742 5.0975L7.15992 2.2325L5.74242 5.0975L2.57742 5.5625L4.87242 7.79L4.32492 10.9475L7.15992 9.455L9.98742 10.9475L9.44742 7.79ZM13.3999 5.1125C13.3999 5.2225 13.3349 5.3425 13.2049 5.4725L10.4824 8.1275L11.1274 11.8775C11.1324 11.9125 11.1349 11.9625 11.1349 12.0275C11.1349 12.2775 11.0324 12.4025 10.8274 12.4025C10.7324 12.4025 10.6324 12.3725 10.5274 12.3125L7.15992 10.5425L3.79242 12.3125C3.68242 12.3725 3.58242 12.4025 3.49242 12.4025C3.38742 12.4025 3.30867 12.3663 3.25617 12.2938C3.20367 12.2213 3.17742 12.1325 3.17742 12.0275C3.17742 11.9975 3.18242 11.9475 3.19242 11.8775L3.83742 8.1275L1.10742 5.4725C0.982422 5.3375 0.919922 5.2175 0.919922 5.1125C0.919922 4.9275 1.05992 4.8125 1.33992 4.7675L5.10492 4.22L6.79242 0.8075C6.88742 0.6025 7.00992 0.5 7.15992 0.5C7.30992 0.5 7.43242 0.6025 7.52742 0.8075L9.21492 4.22L12.9799 4.7675C13.2599 4.8125 13.3999 4.9275 13.3999 5.1125Z"
                                              fill="#FFCC00"
                                          />
                                          </g>
                                          <defs>
                                          <clipPath id="clip0_281_213">
                                              <rect
                                              width="12.48"
                                              height="12"
                                              fill="white"
                                              transform="translate(0.919922 0.5)"
                                              />
                                          </clipPath>
                                          </defs>
                                      </svg>
                                  </span>
                              </div>
                              <div class="fs-12 black-color">9.4k sold</div>
                          </div>
                      </div>
                  </a>
                  <a class="cart" href="#"> Add to cart </a>
              </div>
          </div>
          <div class="col-xl-2 col-6 col-lg-3 mb-4 mx-auto">
              <div class="cart-item">
                  <a href="/product" class="text-decoration-none">
                      <div class="image mb-3">
                          <img
                          width="233"
                          height="192"
                          loading="lazy"
                          class="img-fluid"
                          src="/assets/imgs/home/productt-1.webp"
                          alt="Hashems Turkish Coffee 50 Light/50 Dark 16 Oz"
                          />
                      </div>
                      <div class="px-1">
                          <div class="fs-14 black-color mb-3">
                              Turkish Coffee 50 Light/50 Dark 16 Oz
                          </div>
                          <div class="fs-14 black-color fw-bold mb-3">
                              $13.99 - $19.99
                          </div>
                          <div class="d-flex w-100 justify-content-between align-items-center mb-3">
                              <div>
                                  <span>
                                      <svg
                                          width="13"
                                          height="13"
                                          viewBox="0 0 13 13"
                                          fill="none"
                                          xmlns="http://www.w3.org/2000/svg"
                                      >
                                          <g clip-path="url(#clip0_281_205)">
                                          <path
                                              d="M12.48 5.1125C12.48 5.2225 12.415 5.3425 12.285 5.4725L9.5625 8.1275L10.2075 11.8775C10.2125 11.9125 10.215 11.9625 10.215 12.0275C10.215 12.1325 10.1888 12.2213 10.1363 12.2938C10.0838 12.3663 10.0075 12.4025 9.9075 12.4025C9.8125 12.4025 9.7125 12.3725 9.6075 12.3125L6.24 10.5425L2.8725 12.3125C2.7625 12.3725 2.6625 12.4025 2.5725 12.4025C2.4675 12.4025 2.38875 12.3663 2.33625 12.2938C2.28375 12.2213 2.2575 12.1325 2.2575 12.0275C2.2575 11.9975 2.2625 11.9475 2.2725 11.8775L2.9175 8.1275L0.1875 5.4725C0.0625 5.3375 0 5.2175 0 5.1125C0 4.9275 0.14 4.8125 0.42 4.7675L4.185 4.22L5.8725 0.8075C5.9675 0.6025 6.09 0.5 6.24 0.5C6.39 0.5 6.5125 0.6025 6.6075 0.8075L8.295 4.22L12.06 4.7675C12.34 4.8125 12.48 4.9275 12.48 5.1125Z"
                                              fill="#FFCC00"
                                          />
                                          </g>
                                          <defs>
                                          <clipPath id="clip0_281_205">
                                              <rect
                                              width="12.48"
                                              height="12"
                                              fill="white"
                                              transform="translate(0 0.5)"
                                              />
                                          </clipPath>
                                          </defs>
                                      </svg>
                                  </span>
                                  <span>
                                      <svg
                                          width="13"
                                          height="13"
                                          viewBox="0 0 13 13"
                                          fill="none"
                                          xmlns="http://www.w3.org/2000/svg"
                                      >
                                          <g clip-path="url(#clip0_281_205)">
                                          <path
                                              d="M12.48 5.1125C12.48 5.2225 12.415 5.3425 12.285 5.4725L9.5625 8.1275L10.2075 11.8775C10.2125 11.9125 10.215 11.9625 10.215 12.0275C10.215 12.1325 10.1888 12.2213 10.1363 12.2938C10.0838 12.3663 10.0075 12.4025 9.9075 12.4025C9.8125 12.4025 9.7125 12.3725 9.6075 12.3125L6.24 10.5425L2.8725 12.3125C2.7625 12.3725 2.6625 12.4025 2.5725 12.4025C2.4675 12.4025 2.38875 12.3663 2.33625 12.2938C2.28375 12.2213 2.2575 12.1325 2.2575 12.0275C2.2575 11.9975 2.2625 11.9475 2.2725 11.8775L2.9175 8.1275L0.1875 5.4725C0.0625 5.3375 0 5.2175 0 5.1125C0 4.9275 0.14 4.8125 0.42 4.7675L4.185 4.22L5.8725 0.8075C5.9675 0.6025 6.09 0.5 6.24 0.5C6.39 0.5 6.5125 0.6025 6.6075 0.8075L8.295 4.22L12.06 4.7675C12.34 4.8125 12.48 4.9275 12.48 5.1125Z"
                                              fill="#FFCC00"
                                          />
                                          </g>
                                          <defs>
                                          <clipPath id="clip0_281_205">
                                              <rect
                                              width="12.48"
                                              height="12"
                                              fill="white"
                                              transform="translate(0 0.5)"
                                              />
                                          </clipPath>
                                          </defs>
                                      </svg>
                                  </span>
                                  <span>
                                      <svg
                                          width="13"
                                          height="13"
                                          viewBox="0 0 13 13"
                                          fill="none"
                                          xmlns="http://www.w3.org/2000/svg"
                                      >
                                          <g clip-path="url(#clip0_281_205)">
                                          <path
                                              d="M12.48 5.1125C12.48 5.2225 12.415 5.3425 12.285 5.4725L9.5625 8.1275L10.2075 11.8775C10.2125 11.9125 10.215 11.9625 10.215 12.0275C10.215 12.1325 10.1888 12.2213 10.1363 12.2938C10.0838 12.3663 10.0075 12.4025 9.9075 12.4025C9.8125 12.4025 9.7125 12.3725 9.6075 12.3125L6.24 10.5425L2.8725 12.3125C2.7625 12.3725 2.6625 12.4025 2.5725 12.4025C2.4675 12.4025 2.38875 12.3663 2.33625 12.2938C2.28375 12.2213 2.2575 12.1325 2.2575 12.0275C2.2575 11.9975 2.2625 11.9475 2.2725 11.8775L2.9175 8.1275L0.1875 5.4725C0.0625 5.3375 0 5.2175 0 5.1125C0 4.9275 0.14 4.8125 0.42 4.7675L4.185 4.22L5.8725 0.8075C5.9675 0.6025 6.09 0.5 6.24 0.5C6.39 0.5 6.5125 0.6025 6.6075 0.8075L8.295 4.22L12.06 4.7675C12.34 4.8125 12.48 4.9275 12.48 5.1125Z"
                                              fill="#FFCC00"
                                          />
                                          </g>
                                          <defs>
                                          <clipPath id="clip0_281_205">
                                              <rect
                                              width="12.48"
                                              height="12"
                                              fill="white"
                                              transform="translate(0 0.5)"
                                              />
                                          </clipPath>
                                          </defs>
                                      </svg>
                                  </span>
                                  <span>
                                      <svg
                                          width="13"
                                          height="13"
                                          viewBox="0 0 13 13"
                                          fill="none"
                                          xmlns="http://www.w3.org/2000/svg"
                                      >
                                          <g clip-path="url(#clip0_281_211)">
                                          <path
                                              d="M9.335 7.4375L11.2625 5.5625L8.5925 5.1725L8.0975 5.0975L7.8725 4.6475L6.68 2.2325V9.455L7.1225 9.6875L9.5075 10.9475L9.0575 8.285L8.9675 7.79L9.335 7.4375ZM12.725 5.4725L10.0025 8.1275L10.6475 11.8775C10.6725 12.0425 10.6575 12.1713 10.6025 12.2638C10.5475 12.3563 10.4625 12.4025 10.3475 12.4025C10.2625 12.4025 10.1625 12.3725 10.0475 12.3125L6.68 10.5425L3.3125 12.3125C3.1975 12.3725 3.0975 12.4025 3.0125 12.4025C2.8975 12.4025 2.8125 12.3563 2.7575 12.2638C2.7025 12.1713 2.6875 12.0425 2.7125 11.8775L3.3575 8.1275L0.627503 5.4725C0.467503 5.3125 0.410003 5.16375 0.455003 5.02625C0.500003 4.88875 0.635003 4.8025 0.860003 4.7675L4.625 4.22L6.3125 0.8075C6.4125 0.6025 6.535 0.5 6.68 0.5C6.82 0.5 6.9425 0.6025 7.0475 0.8075L8.735 4.22L12.5 4.7675C12.725 4.8025 12.86 4.88875 12.905 5.02625C12.95 5.16375 12.89 5.3125 12.725 5.4725Z"
                                              fill="#FFCC00"
                                          />
                                          </g>
                                          <defs>
                                          <clipPath id="clip0_281_211">
                                              <rect
                                              width="12.48"
                                              height="12"
                                              fill="white"
                                              transform="translate(0.439941 0.5)"
                                              />
                                          </clipPath>
                                          </defs>
                                      </svg>
                                  </span>
                                  <span>
                                      <svg
                                          width="14"
                                          height="13"
                                          viewBox="0 0 14 13"
                                          fill="none"
                                          xmlns="http://www.w3.org/2000/svg"
                                      >
                                          <g clip-path="url(#clip0_281_213)">
                                          <path
                                              d="M9.44742 7.79L11.7424 5.5625L8.57742 5.0975L7.15992 2.2325L5.74242 5.0975L2.57742 5.5625L4.87242 7.79L4.32492 10.9475L7.15992 9.455L9.98742 10.9475L9.44742 7.79ZM13.3999 5.1125C13.3999 5.2225 13.3349 5.3425 13.2049 5.4725L10.4824 8.1275L11.1274 11.8775C11.1324 11.9125 11.1349 11.9625 11.1349 12.0275C11.1349 12.2775 11.0324 12.4025 10.8274 12.4025C10.7324 12.4025 10.6324 12.3725 10.5274 12.3125L7.15992 10.5425L3.79242 12.3125C3.68242 12.3725 3.58242 12.4025 3.49242 12.4025C3.38742 12.4025 3.30867 12.3663 3.25617 12.2938C3.20367 12.2213 3.17742 12.1325 3.17742 12.0275C3.17742 11.9975 3.18242 11.9475 3.19242 11.8775L3.83742 8.1275L1.10742 5.4725C0.982422 5.3375 0.919922 5.2175 0.919922 5.1125C0.919922 4.9275 1.05992 4.8125 1.33992 4.7675L5.10492 4.22L6.79242 0.8075C6.88742 0.6025 7.00992 0.5 7.15992 0.5C7.30992 0.5 7.43242 0.6025 7.52742 0.8075L9.21492 4.22L12.9799 4.7675C13.2599 4.8125 13.3999 4.9275 13.3999 5.1125Z"
                                              fill="#FFCC00"
                                          />
                                          </g>
                                          <defs>
                                          <clipPath id="clip0_281_213">
                                              <rect
                                              width="12.48"
                                              height="12"
                                              fill="white"
                                              transform="translate(0.919922 0.5)"
                                              />
                                          </clipPath>
                                          </defs>
                                      </svg>
                                  </span>
                              </div>
                              <div class="fs-12 black-color">9.4k sold</div>
                          </div>
                      </div>
                  </a>
                  <a class="cart" href="#"> Add to cart </a>
              </div>
          </div>
          <div class="col-xl-2 col-6 col-lg-3 mb-4 mx-auto">
              <div class="cart-item">
                  <a href="/product" class="text-decoration-none">
                      <div class="image mb-3">
                          <img
                          width="233"
                          height="192"
                          loading="lazy"
                          class="img-fluid"
                          src="/assets/imgs/home/productt-1.webp"
                          alt="Hashems Turkish Coffee 50 Light/50 Dark 16 Oz"
                          />
                      </div>
                      <div class="px-1">
                          <div class="fs-14 black-color mb-3">
                              Turkish Coffee 50 Light/50 Dark 16 Oz
                          </div>
                          <div class="fs-14 black-color fw-bold mb-3">
                              $13.99 - $19.99
                          </div>
                          <div class="d-flex w-100 justify-content-between align-items-center mb-3">
                              <div>
                                  <span>
                                      <svg
                                          width="13"
                                          height="13"
                                          viewBox="0 0 13 13"
                                          fill="none"
                                          xmlns="http://www.w3.org/2000/svg"
                                      >
                                          <g clip-path="url(#clip0_281_205)">
                                          <path
                                              d="M12.48 5.1125C12.48 5.2225 12.415 5.3425 12.285 5.4725L9.5625 8.1275L10.2075 11.8775C10.2125 11.9125 10.215 11.9625 10.215 12.0275C10.215 12.1325 10.1888 12.2213 10.1363 12.2938C10.0838 12.3663 10.0075 12.4025 9.9075 12.4025C9.8125 12.4025 9.7125 12.3725 9.6075 12.3125L6.24 10.5425L2.8725 12.3125C2.7625 12.3725 2.6625 12.4025 2.5725 12.4025C2.4675 12.4025 2.38875 12.3663 2.33625 12.2938C2.28375 12.2213 2.2575 12.1325 2.2575 12.0275C2.2575 11.9975 2.2625 11.9475 2.2725 11.8775L2.9175 8.1275L0.1875 5.4725C0.0625 5.3375 0 5.2175 0 5.1125C0 4.9275 0.14 4.8125 0.42 4.7675L4.185 4.22L5.8725 0.8075C5.9675 0.6025 6.09 0.5 6.24 0.5C6.39 0.5 6.5125 0.6025 6.6075 0.8075L8.295 4.22L12.06 4.7675C12.34 4.8125 12.48 4.9275 12.48 5.1125Z"
                                              fill="#FFCC00"
                                          />
                                          </g>
                                          <defs>
                                          <clipPath id="clip0_281_205">
                                              <rect
                                              width="12.48"
                                              height="12"
                                              fill="white"
                                              transform="translate(0 0.5)"
                                              />
                                          </clipPath>
                                          </defs>
                                      </svg>
                                  </span>
                                  <span>
                                      <svg
                                          width="13"
                                          height="13"
                                          viewBox="0 0 13 13"
                                          fill="none"
                                          xmlns="http://www.w3.org/2000/svg"
                                      >
                                          <g clip-path="url(#clip0_281_205)">
                                          <path
                                              d="M12.48 5.1125C12.48 5.2225 12.415 5.3425 12.285 5.4725L9.5625 8.1275L10.2075 11.8775C10.2125 11.9125 10.215 11.9625 10.215 12.0275C10.215 12.1325 10.1888 12.2213 10.1363 12.2938C10.0838 12.3663 10.0075 12.4025 9.9075 12.4025C9.8125 12.4025 9.7125 12.3725 9.6075 12.3125L6.24 10.5425L2.8725 12.3125C2.7625 12.3725 2.6625 12.4025 2.5725 12.4025C2.4675 12.4025 2.38875 12.3663 2.33625 12.2938C2.28375 12.2213 2.2575 12.1325 2.2575 12.0275C2.2575 11.9975 2.2625 11.9475 2.2725 11.8775L2.9175 8.1275L0.1875 5.4725C0.0625 5.3375 0 5.2175 0 5.1125C0 4.9275 0.14 4.8125 0.42 4.7675L4.185 4.22L5.8725 0.8075C5.9675 0.6025 6.09 0.5 6.24 0.5C6.39 0.5 6.5125 0.6025 6.6075 0.8075L8.295 4.22L12.06 4.7675C12.34 4.8125 12.48 4.9275 12.48 5.1125Z"
                                              fill="#FFCC00"
                                          />
                                          </g>
                                          <defs>
                                          <clipPath id="clip0_281_205">
                                              <rect
                                              width="12.48"
                                              height="12"
                                              fill="white"
                                              transform="translate(0 0.5)"
                                              />
                                          </clipPath>
                                          </defs>
                                      </svg>
                                  </span>
                                  <span>
                                      <svg
                                          width="13"
                                          height="13"
                                          viewBox="0 0 13 13"
                                          fill="none"
                                          xmlns="http://www.w3.org/2000/svg"
                                      >
                                          <g clip-path="url(#clip0_281_205)">
                                          <path
                                              d="M12.48 5.1125C12.48 5.2225 12.415 5.3425 12.285 5.4725L9.5625 8.1275L10.2075 11.8775C10.2125 11.9125 10.215 11.9625 10.215 12.0275C10.215 12.1325 10.1888 12.2213 10.1363 12.2938C10.0838 12.3663 10.0075 12.4025 9.9075 12.4025C9.8125 12.4025 9.7125 12.3725 9.6075 12.3125L6.24 10.5425L2.8725 12.3125C2.7625 12.3725 2.6625 12.4025 2.5725 12.4025C2.4675 12.4025 2.38875 12.3663 2.33625 12.2938C2.28375 12.2213 2.2575 12.1325 2.2575 12.0275C2.2575 11.9975 2.2625 11.9475 2.2725 11.8775L2.9175 8.1275L0.1875 5.4725C0.0625 5.3375 0 5.2175 0 5.1125C0 4.9275 0.14 4.8125 0.42 4.7675L4.185 4.22L5.8725 0.8075C5.9675 0.6025 6.09 0.5 6.24 0.5C6.39 0.5 6.5125 0.6025 6.6075 0.8075L8.295 4.22L12.06 4.7675C12.34 4.8125 12.48 4.9275 12.48 5.1125Z"
                                              fill="#FFCC00"
                                          />
                                          </g>
                                          <defs>
                                          <clipPath id="clip0_281_205">
                                              <rect
                                              width="12.48"
                                              height="12"
                                              fill="white"
                                              transform="translate(0 0.5)"
                                              />
                                          </clipPath>
                                          </defs>
                                      </svg>
                                  </span>
                                  <span>
                                      <svg
                                          width="13"
                                          height="13"
                                          viewBox="0 0 13 13"
                                          fill="none"
                                          xmlns="http://www.w3.org/2000/svg"
                                      >
                                          <g clip-path="url(#clip0_281_211)">
                                          <path
                                              d="M9.335 7.4375L11.2625 5.5625L8.5925 5.1725L8.0975 5.0975L7.8725 4.6475L6.68 2.2325V9.455L7.1225 9.6875L9.5075 10.9475L9.0575 8.285L8.9675 7.79L9.335 7.4375ZM12.725 5.4725L10.0025 8.1275L10.6475 11.8775C10.6725 12.0425 10.6575 12.1713 10.6025 12.2638C10.5475 12.3563 10.4625 12.4025 10.3475 12.4025C10.2625 12.4025 10.1625 12.3725 10.0475 12.3125L6.68 10.5425L3.3125 12.3125C3.1975 12.3725 3.0975 12.4025 3.0125 12.4025C2.8975 12.4025 2.8125 12.3563 2.7575 12.2638C2.7025 12.1713 2.6875 12.0425 2.7125 11.8775L3.3575 8.1275L0.627503 5.4725C0.467503 5.3125 0.410003 5.16375 0.455003 5.02625C0.500003 4.88875 0.635003 4.8025 0.860003 4.7675L4.625 4.22L6.3125 0.8075C6.4125 0.6025 6.535 0.5 6.68 0.5C6.82 0.5 6.9425 0.6025 7.0475 0.8075L8.735 4.22L12.5 4.7675C12.725 4.8025 12.86 4.88875 12.905 5.02625C12.95 5.16375 12.89 5.3125 12.725 5.4725Z"
                                              fill="#FFCC00"
                                          />
                                          </g>
                                          <defs>
                                          <clipPath id="clip0_281_211">
                                              <rect
                                              width="12.48"
                                              height="12"
                                              fill="white"
                                              transform="translate(0.439941 0.5)"
                                              />
                                          </clipPath>
                                          </defs>
                                      </svg>
                                  </span>
                                  <span>
                                      <svg
                                          width="14"
                                          height="13"
                                          viewBox="0 0 14 13"
                                          fill="none"
                                          xmlns="http://www.w3.org/2000/svg"
                                      >
                                          <g clip-path="url(#clip0_281_213)">
                                          <path
                                              d="M9.44742 7.79L11.7424 5.5625L8.57742 5.0975L7.15992 2.2325L5.74242 5.0975L2.57742 5.5625L4.87242 7.79L4.32492 10.9475L7.15992 9.455L9.98742 10.9475L9.44742 7.79ZM13.3999 5.1125C13.3999 5.2225 13.3349 5.3425 13.2049 5.4725L10.4824 8.1275L11.1274 11.8775C11.1324 11.9125 11.1349 11.9625 11.1349 12.0275C11.1349 12.2775 11.0324 12.4025 10.8274 12.4025C10.7324 12.4025 10.6324 12.3725 10.5274 12.3125L7.15992 10.5425L3.79242 12.3125C3.68242 12.3725 3.58242 12.4025 3.49242 12.4025C3.38742 12.4025 3.30867 12.3663 3.25617 12.2938C3.20367 12.2213 3.17742 12.1325 3.17742 12.0275C3.17742 11.9975 3.18242 11.9475 3.19242 11.8775L3.83742 8.1275L1.10742 5.4725C0.982422 5.3375 0.919922 5.2175 0.919922 5.1125C0.919922 4.9275 1.05992 4.8125 1.33992 4.7675L5.10492 4.22L6.79242 0.8075C6.88742 0.6025 7.00992 0.5 7.15992 0.5C7.30992 0.5 7.43242 0.6025 7.52742 0.8075L9.21492 4.22L12.9799 4.7675C13.2599 4.8125 13.3999 4.9275 13.3999 5.1125Z"
                                              fill="#FFCC00"
                                          />
                                          </g>
                                          <defs>
                                          <clipPath id="clip0_281_213">
                                              <rect
                                              width="12.48"
                                              height="12"
                                              fill="white"
                                              transform="translate(0.919922 0.5)"
                                              />
                                          </clipPath>
                                          </defs>
                                      </svg>
                                  </span>
                              </div>
                              <div class="fs-12 black-color">9.4k sold</div>
                          </div>
                      </div>
                  </a>
                  <a class="cart" href="#"> Add to cart </a>
              </div>
          </div>
          <div class="col-xl-2 col-6 col-lg-3 mb-4 mx-auto">
              <div class="cart-item">
                  <a href="/product" class="text-decoration-none">
                      <div class="image mb-3">
                          <img
                          width="233"
                          height="192"
                          loading="lazy"
                          class="img-fluid"
                          src="/assets/imgs/home/productt-1.webp"
                          alt="Hashems Turkish Coffee 50 Light/50 Dark 16 Oz"
                          />
                      </div>
                      <div class="px-1">
                          <div class="fs-14 black-color mb-3">
                              Turkish Coffee 50 Light/50 Dark 16 Oz
                          </div>
                          <div class="fs-14 black-color fw-bold mb-3">
                              $13.99 - $19.99
                          </div>
                          <div class="d-flex w-100 justify-content-between align-items-center mb-3">
                              <div>
                                  <span>
                                      <svg
                                          width="13"
                                          height="13"
                                          viewBox="0 0 13 13"
                                          fill="none"
                                          xmlns="http://www.w3.org/2000/svg"
                                      >
                                          <g clip-path="url(#clip0_281_205)">
                                          <path
                                              d="M12.48 5.1125C12.48 5.2225 12.415 5.3425 12.285 5.4725L9.5625 8.1275L10.2075 11.8775C10.2125 11.9125 10.215 11.9625 10.215 12.0275C10.215 12.1325 10.1888 12.2213 10.1363 12.2938C10.0838 12.3663 10.0075 12.4025 9.9075 12.4025C9.8125 12.4025 9.7125 12.3725 9.6075 12.3125L6.24 10.5425L2.8725 12.3125C2.7625 12.3725 2.6625 12.4025 2.5725 12.4025C2.4675 12.4025 2.38875 12.3663 2.33625 12.2938C2.28375 12.2213 2.2575 12.1325 2.2575 12.0275C2.2575 11.9975 2.2625 11.9475 2.2725 11.8775L2.9175 8.1275L0.1875 5.4725C0.0625 5.3375 0 5.2175 0 5.1125C0 4.9275 0.14 4.8125 0.42 4.7675L4.185 4.22L5.8725 0.8075C5.9675 0.6025 6.09 0.5 6.24 0.5C6.39 0.5 6.5125 0.6025 6.6075 0.8075L8.295 4.22L12.06 4.7675C12.34 4.8125 12.48 4.9275 12.48 5.1125Z"
                                              fill="#FFCC00"
                                          />
                                          </g>
                                          <defs>
                                          <clipPath id="clip0_281_205">
                                              <rect
                                              width="12.48"
                                              height="12"
                                              fill="white"
                                              transform="translate(0 0.5)"
                                              />
                                          </clipPath>
                                          </defs>
                                      </svg>
                                  </span>
                                  <span>
                                      <svg
                                          width="13"
                                          height="13"
                                          viewBox="0 0 13 13"
                                          fill="none"
                                          xmlns="http://www.w3.org/2000/svg"
                                      >
                                          <g clip-path="url(#clip0_281_205)">
                                          <path
                                              d="M12.48 5.1125C12.48 5.2225 12.415 5.3425 12.285 5.4725L9.5625 8.1275L10.2075 11.8775C10.2125 11.9125 10.215 11.9625 10.215 12.0275C10.215 12.1325 10.1888 12.2213 10.1363 12.2938C10.0838 12.3663 10.0075 12.4025 9.9075 12.4025C9.8125 12.4025 9.7125 12.3725 9.6075 12.3125L6.24 10.5425L2.8725 12.3125C2.7625 12.3725 2.6625 12.4025 2.5725 12.4025C2.4675 12.4025 2.38875 12.3663 2.33625 12.2938C2.28375 12.2213 2.2575 12.1325 2.2575 12.0275C2.2575 11.9975 2.2625 11.9475 2.2725 11.8775L2.9175 8.1275L0.1875 5.4725C0.0625 5.3375 0 5.2175 0 5.1125C0 4.9275 0.14 4.8125 0.42 4.7675L4.185 4.22L5.8725 0.8075C5.9675 0.6025 6.09 0.5 6.24 0.5C6.39 0.5 6.5125 0.6025 6.6075 0.8075L8.295 4.22L12.06 4.7675C12.34 4.8125 12.48 4.9275 12.48 5.1125Z"
                                              fill="#FFCC00"
                                          />
                                          </g>
                                          <defs>
                                          <clipPath id="clip0_281_205">
                                              <rect
                                              width="12.48"
                                              height="12"
                                              fill="white"
                                              transform="translate(0 0.5)"
                                              />
                                          </clipPath>
                                          </defs>
                                      </svg>
                                  </span>
                                  <span>
                                      <svg
                                          width="13"
                                          height="13"
                                          viewBox="0 0 13 13"
                                          fill="none"
                                          xmlns="http://www.w3.org/2000/svg"
                                      >
                                          <g clip-path="url(#clip0_281_205)">
                                          <path
                                              d="M12.48 5.1125C12.48 5.2225 12.415 5.3425 12.285 5.4725L9.5625 8.1275L10.2075 11.8775C10.2125 11.9125 10.215 11.9625 10.215 12.0275C10.215 12.1325 10.1888 12.2213 10.1363 12.2938C10.0838 12.3663 10.0075 12.4025 9.9075 12.4025C9.8125 12.4025 9.7125 12.3725 9.6075 12.3125L6.24 10.5425L2.8725 12.3125C2.7625 12.3725 2.6625 12.4025 2.5725 12.4025C2.4675 12.4025 2.38875 12.3663 2.33625 12.2938C2.28375 12.2213 2.2575 12.1325 2.2575 12.0275C2.2575 11.9975 2.2625 11.9475 2.2725 11.8775L2.9175 8.1275L0.1875 5.4725C0.0625 5.3375 0 5.2175 0 5.1125C0 4.9275 0.14 4.8125 0.42 4.7675L4.185 4.22L5.8725 0.8075C5.9675 0.6025 6.09 0.5 6.24 0.5C6.39 0.5 6.5125 0.6025 6.6075 0.8075L8.295 4.22L12.06 4.7675C12.34 4.8125 12.48 4.9275 12.48 5.1125Z"
                                              fill="#FFCC00"
                                          />
                                          </g>
                                          <defs>
                                          <clipPath id="clip0_281_205">
                                              <rect
                                              width="12.48"
                                              height="12"
                                              fill="white"
                                              transform="translate(0 0.5)"
                                              />
                                          </clipPath>
                                          </defs>
                                      </svg>
                                  </span>
                                  <span>
                                      <svg
                                          width="13"
                                          height="13"
                                          viewBox="0 0 13 13"
                                          fill="none"
                                          xmlns="http://www.w3.org/2000/svg"
                                      >
                                          <g clip-path="url(#clip0_281_211)">
                                          <path
                                              d="M9.335 7.4375L11.2625 5.5625L8.5925 5.1725L8.0975 5.0975L7.8725 4.6475L6.68 2.2325V9.455L7.1225 9.6875L9.5075 10.9475L9.0575 8.285L8.9675 7.79L9.335 7.4375ZM12.725 5.4725L10.0025 8.1275L10.6475 11.8775C10.6725 12.0425 10.6575 12.1713 10.6025 12.2638C10.5475 12.3563 10.4625 12.4025 10.3475 12.4025C10.2625 12.4025 10.1625 12.3725 10.0475 12.3125L6.68 10.5425L3.3125 12.3125C3.1975 12.3725 3.0975 12.4025 3.0125 12.4025C2.8975 12.4025 2.8125 12.3563 2.7575 12.2638C2.7025 12.1713 2.6875 12.0425 2.7125 11.8775L3.3575 8.1275L0.627503 5.4725C0.467503 5.3125 0.410003 5.16375 0.455003 5.02625C0.500003 4.88875 0.635003 4.8025 0.860003 4.7675L4.625 4.22L6.3125 0.8075C6.4125 0.6025 6.535 0.5 6.68 0.5C6.82 0.5 6.9425 0.6025 7.0475 0.8075L8.735 4.22L12.5 4.7675C12.725 4.8025 12.86 4.88875 12.905 5.02625C12.95 5.16375 12.89 5.3125 12.725 5.4725Z"
                                              fill="#FFCC00"
                                          />
                                          </g>
                                          <defs>
                                          <clipPath id="clip0_281_211">
                                              <rect
                                              width="12.48"
                                              height="12"
                                              fill="white"
                                              transform="translate(0.439941 0.5)"
                                              />
                                          </clipPath>
                                          </defs>
                                      </svg>
                                  </span>
                                  <span>
                                      <svg
                                          width="14"
                                          height="13"
                                          viewBox="0 0 14 13"
                                          fill="none"
                                          xmlns="http://www.w3.org/2000/svg"
                                      >
                                          <g clip-path="url(#clip0_281_213)">
                                          <path
                                              d="M9.44742 7.79L11.7424 5.5625L8.57742 5.0975L7.15992 2.2325L5.74242 5.0975L2.57742 5.5625L4.87242 7.79L4.32492 10.9475L7.15992 9.455L9.98742 10.9475L9.44742 7.79ZM13.3999 5.1125C13.3999 5.2225 13.3349 5.3425 13.2049 5.4725L10.4824 8.1275L11.1274 11.8775C11.1324 11.9125 11.1349 11.9625 11.1349 12.0275C11.1349 12.2775 11.0324 12.4025 10.8274 12.4025C10.7324 12.4025 10.6324 12.3725 10.5274 12.3125L7.15992 10.5425L3.79242 12.3125C3.68242 12.3725 3.58242 12.4025 3.49242 12.4025C3.38742 12.4025 3.30867 12.3663 3.25617 12.2938C3.20367 12.2213 3.17742 12.1325 3.17742 12.0275C3.17742 11.9975 3.18242 11.9475 3.19242 11.8775L3.83742 8.1275L1.10742 5.4725C0.982422 5.3375 0.919922 5.2175 0.919922 5.1125C0.919922 4.9275 1.05992 4.8125 1.33992 4.7675L5.10492 4.22L6.79242 0.8075C6.88742 0.6025 7.00992 0.5 7.15992 0.5C7.30992 0.5 7.43242 0.6025 7.52742 0.8075L9.21492 4.22L12.9799 4.7675C13.2599 4.8125 13.3999 4.9275 13.3999 5.1125Z"
                                              fill="#FFCC00"
                                          />
                                          </g>
                                          <defs>
                                          <clipPath id="clip0_281_213">
                                              <rect
                                              width="12.48"
                                              height="12"
                                              fill="white"
                                              transform="translate(0.919922 0.5)"
                                              />
                                          </clipPath>
                                          </defs>
                                      </svg>
                                  </span>
                              </div>
                              <div class="fs-12 black-color">9.4k sold</div>
                          </div>
                      </div>
                  </a>
                  <a class="cart" href="#"> Add to cart </a>
              </div>
          </div>
          <div class="col-xl-2 col-6 col-lg-3 mb-4 mx-auto">
              <div class="cart-item">
                  <a href="/product" class="text-decoration-none">
                      <div class="image mb-3">
                          <img
                          width="233"
                          height="192"
                          loading="lazy"
                          class="img-fluid"
                          src="/assets/imgs/home/productt-1.webp"
                          alt="Hashems Turkish Coffee 50 Light/50 Dark 16 Oz"
                          />
                      </div>
                      <div class="px-1">
                          <div class="fs-14 black-color mb-3">
                              Turkish Coffee 50 Light/50 Dark 16 Oz
                          </div>
                          <div class="fs-14 black-color fw-bold mb-3">
                              $13.99 - $19.99
                          </div>
                          <div class="d-flex w-100 justify-content-between align-items-center mb-3">
                              <div>
                                  <span>
                                      <svg
                                          width="13"
                                          height="13"
                                          viewBox="0 0 13 13"
                                          fill="none"
                                          xmlns="http://www.w3.org/2000/svg"
                                      >
                                          <g clip-path="url(#clip0_281_205)">
                                          <path
                                              d="M12.48 5.1125C12.48 5.2225 12.415 5.3425 12.285 5.4725L9.5625 8.1275L10.2075 11.8775C10.2125 11.9125 10.215 11.9625 10.215 12.0275C10.215 12.1325 10.1888 12.2213 10.1363 12.2938C10.0838 12.3663 10.0075 12.4025 9.9075 12.4025C9.8125 12.4025 9.7125 12.3725 9.6075 12.3125L6.24 10.5425L2.8725 12.3125C2.7625 12.3725 2.6625 12.4025 2.5725 12.4025C2.4675 12.4025 2.38875 12.3663 2.33625 12.2938C2.28375 12.2213 2.2575 12.1325 2.2575 12.0275C2.2575 11.9975 2.2625 11.9475 2.2725 11.8775L2.9175 8.1275L0.1875 5.4725C0.0625 5.3375 0 5.2175 0 5.1125C0 4.9275 0.14 4.8125 0.42 4.7675L4.185 4.22L5.8725 0.8075C5.9675 0.6025 6.09 0.5 6.24 0.5C6.39 0.5 6.5125 0.6025 6.6075 0.8075L8.295 4.22L12.06 4.7675C12.34 4.8125 12.48 4.9275 12.48 5.1125Z"
                                              fill="#FFCC00"
                                          />
                                          </g>
                                          <defs>
                                          <clipPath id="clip0_281_205">
                                              <rect
                                              width="12.48"
                                              height="12"
                                              fill="white"
                                              transform="translate(0 0.5)"
                                              />
                                          </clipPath>
                                          </defs>
                                      </svg>
                                  </span>
                                  <span>
                                      <svg
                                          width="13"
                                          height="13"
                                          viewBox="0 0 13 13"
                                          fill="none"
                                          xmlns="http://www.w3.org/2000/svg"
                                      >
                                          <g clip-path="url(#clip0_281_205)">
                                          <path
                                              d="M12.48 5.1125C12.48 5.2225 12.415 5.3425 12.285 5.4725L9.5625 8.1275L10.2075 11.8775C10.2125 11.9125 10.215 11.9625 10.215 12.0275C10.215 12.1325 10.1888 12.2213 10.1363 12.2938C10.0838 12.3663 10.0075 12.4025 9.9075 12.4025C9.8125 12.4025 9.7125 12.3725 9.6075 12.3125L6.24 10.5425L2.8725 12.3125C2.7625 12.3725 2.6625 12.4025 2.5725 12.4025C2.4675 12.4025 2.38875 12.3663 2.33625 12.2938C2.28375 12.2213 2.2575 12.1325 2.2575 12.0275C2.2575 11.9975 2.2625 11.9475 2.2725 11.8775L2.9175 8.1275L0.1875 5.4725C0.0625 5.3375 0 5.2175 0 5.1125C0 4.9275 0.14 4.8125 0.42 4.7675L4.185 4.22L5.8725 0.8075C5.9675 0.6025 6.09 0.5 6.24 0.5C6.39 0.5 6.5125 0.6025 6.6075 0.8075L8.295 4.22L12.06 4.7675C12.34 4.8125 12.48 4.9275 12.48 5.1125Z"
                                              fill="#FFCC00"
                                          />
                                          </g>
                                          <defs>
                                          <clipPath id="clip0_281_205">
                                              <rect
                                              width="12.48"
                                              height="12"
                                              fill="white"
                                              transform="translate(0 0.5)"
                                              />
                                          </clipPath>
                                          </defs>
                                      </svg>
                                  </span>
                                  <span>
                                      <svg
                                          width="13"
                                          height="13"
                                          viewBox="0 0 13 13"
                                          fill="none"
                                          xmlns="http://www.w3.org/2000/svg"
                                      >
                                          <g clip-path="url(#clip0_281_205)">
                                          <path
                                              d="M12.48 5.1125C12.48 5.2225 12.415 5.3425 12.285 5.4725L9.5625 8.1275L10.2075 11.8775C10.2125 11.9125 10.215 11.9625 10.215 12.0275C10.215 12.1325 10.1888 12.2213 10.1363 12.2938C10.0838 12.3663 10.0075 12.4025 9.9075 12.4025C9.8125 12.4025 9.7125 12.3725 9.6075 12.3125L6.24 10.5425L2.8725 12.3125C2.7625 12.3725 2.6625 12.4025 2.5725 12.4025C2.4675 12.4025 2.38875 12.3663 2.33625 12.2938C2.28375 12.2213 2.2575 12.1325 2.2575 12.0275C2.2575 11.9975 2.2625 11.9475 2.2725 11.8775L2.9175 8.1275L0.1875 5.4725C0.0625 5.3375 0 5.2175 0 5.1125C0 4.9275 0.14 4.8125 0.42 4.7675L4.185 4.22L5.8725 0.8075C5.9675 0.6025 6.09 0.5 6.24 0.5C6.39 0.5 6.5125 0.6025 6.6075 0.8075L8.295 4.22L12.06 4.7675C12.34 4.8125 12.48 4.9275 12.48 5.1125Z"
                                              fill="#FFCC00"
                                          />
                                          </g>
                                          <defs>
                                          <clipPath id="clip0_281_205">
                                              <rect
                                              width="12.48"
                                              height="12"
                                              fill="white"
                                              transform="translate(0 0.5)"
                                              />
                                          </clipPath>
                                          </defs>
                                      </svg>
                                  </span>
                                  <span>
                                      <svg
                                          width="13"
                                          height="13"
                                          viewBox="0 0 13 13"
                                          fill="none"
                                          xmlns="http://www.w3.org/2000/svg"
                                      >
                                          <g clip-path="url(#clip0_281_211)">
                                          <path
                                              d="M9.335 7.4375L11.2625 5.5625L8.5925 5.1725L8.0975 5.0975L7.8725 4.6475L6.68 2.2325V9.455L7.1225 9.6875L9.5075 10.9475L9.0575 8.285L8.9675 7.79L9.335 7.4375ZM12.725 5.4725L10.0025 8.1275L10.6475 11.8775C10.6725 12.0425 10.6575 12.1713 10.6025 12.2638C10.5475 12.3563 10.4625 12.4025 10.3475 12.4025C10.2625 12.4025 10.1625 12.3725 10.0475 12.3125L6.68 10.5425L3.3125 12.3125C3.1975 12.3725 3.0975 12.4025 3.0125 12.4025C2.8975 12.4025 2.8125 12.3563 2.7575 12.2638C2.7025 12.1713 2.6875 12.0425 2.7125 11.8775L3.3575 8.1275L0.627503 5.4725C0.467503 5.3125 0.410003 5.16375 0.455003 5.02625C0.500003 4.88875 0.635003 4.8025 0.860003 4.7675L4.625 4.22L6.3125 0.8075C6.4125 0.6025 6.535 0.5 6.68 0.5C6.82 0.5 6.9425 0.6025 7.0475 0.8075L8.735 4.22L12.5 4.7675C12.725 4.8025 12.86 4.88875 12.905 5.02625C12.95 5.16375 12.89 5.3125 12.725 5.4725Z"
                                              fill="#FFCC00"
                                          />
                                          </g>
                                          <defs>
                                          <clipPath id="clip0_281_211">
                                              <rect
                                              width="12.48"
                                              height="12"
                                              fill="white"
                                              transform="translate(0.439941 0.5)"
                                              />
                                          </clipPath>
                                          </defs>
                                      </svg>
                                  </span>
                                  <span>
                                      <svg
                                          width="14"
                                          height="13"
                                          viewBox="0 0 14 13"
                                          fill="none"
                                          xmlns="http://www.w3.org/2000/svg"
                                      >
                                          <g clip-path="url(#clip0_281_213)">
                                          <path
                                              d="M9.44742 7.79L11.7424 5.5625L8.57742 5.0975L7.15992 2.2325L5.74242 5.0975L2.57742 5.5625L4.87242 7.79L4.32492 10.9475L7.15992 9.455L9.98742 10.9475L9.44742 7.79ZM13.3999 5.1125C13.3999 5.2225 13.3349 5.3425 13.2049 5.4725L10.4824 8.1275L11.1274 11.8775C11.1324 11.9125 11.1349 11.9625 11.1349 12.0275C11.1349 12.2775 11.0324 12.4025 10.8274 12.4025C10.7324 12.4025 10.6324 12.3725 10.5274 12.3125L7.15992 10.5425L3.79242 12.3125C3.68242 12.3725 3.58242 12.4025 3.49242 12.4025C3.38742 12.4025 3.30867 12.3663 3.25617 12.2938C3.20367 12.2213 3.17742 12.1325 3.17742 12.0275C3.17742 11.9975 3.18242 11.9475 3.19242 11.8775L3.83742 8.1275L1.10742 5.4725C0.982422 5.3375 0.919922 5.2175 0.919922 5.1125C0.919922 4.9275 1.05992 4.8125 1.33992 4.7675L5.10492 4.22L6.79242 0.8075C6.88742 0.6025 7.00992 0.5 7.15992 0.5C7.30992 0.5 7.43242 0.6025 7.52742 0.8075L9.21492 4.22L12.9799 4.7675C13.2599 4.8125 13.3999 4.9275 13.3999 5.1125Z"
                                              fill="#FFCC00"
                                          />
                                          </g>
                                          <defs>
                                          <clipPath id="clip0_281_213">
                                              <rect
                                              width="12.48"
                                              height="12"
                                              fill="white"
                                              transform="translate(0.919922 0.5)"
                                              />
                                          </clipPath>
                                          </defs>
                                      </svg>
                                  </span>
                              </div>
                              <div class="fs-12 black-color">9.4k sold</div>
                          </div>
                      </div>
                  </a>
                  <a class="cart" href="#"> Add to cart </a>
              </div>
          </div>
          <div class="col-xl-2 col-6 col-lg-3 mb-4 mx-auto">
              <div class="cart-item">
                  <a href="/product" class="text-decoration-none">
                      <div class="image mb-3">
                          <img
                          width="233"
                          height="192"
                          loading="lazy"
                          class="img-fluid"
                          src="/assets/imgs/home/productt-1.webp"
                          alt="Hashems Turkish Coffee 50 Light/50 Dark 16 Oz"
                          />
                      </div>
                      <div class="px-1">
                          <div class="fs-14 black-color mb-3">
                              Turkish Coffee 50 Light/50 Dark 16 Oz
                          </div>
                          <div class="fs-14 black-color fw-bold mb-3">
                              $13.99 - $19.99
                          </div>
                          <div class="d-flex w-100 justify-content-between align-items-center mb-3">
                              <div>
                                  <span>
                                      <svg
                                          width="13"
                                          height="13"
                                          viewBox="0 0 13 13"
                                          fill="none"
                                          xmlns="http://www.w3.org/2000/svg"
                                      >
                                          <g clip-path="url(#clip0_281_205)">
                                          <path
                                              d="M12.48 5.1125C12.48 5.2225 12.415 5.3425 12.285 5.4725L9.5625 8.1275L10.2075 11.8775C10.2125 11.9125 10.215 11.9625 10.215 12.0275C10.215 12.1325 10.1888 12.2213 10.1363 12.2938C10.0838 12.3663 10.0075 12.4025 9.9075 12.4025C9.8125 12.4025 9.7125 12.3725 9.6075 12.3125L6.24 10.5425L2.8725 12.3125C2.7625 12.3725 2.6625 12.4025 2.5725 12.4025C2.4675 12.4025 2.38875 12.3663 2.33625 12.2938C2.28375 12.2213 2.2575 12.1325 2.2575 12.0275C2.2575 11.9975 2.2625 11.9475 2.2725 11.8775L2.9175 8.1275L0.1875 5.4725C0.0625 5.3375 0 5.2175 0 5.1125C0 4.9275 0.14 4.8125 0.42 4.7675L4.185 4.22L5.8725 0.8075C5.9675 0.6025 6.09 0.5 6.24 0.5C6.39 0.5 6.5125 0.6025 6.6075 0.8075L8.295 4.22L12.06 4.7675C12.34 4.8125 12.48 4.9275 12.48 5.1125Z"
                                              fill="#FFCC00"
                                          />
                                          </g>
                                          <defs>
                                          <clipPath id="clip0_281_205">
                                              <rect
                                              width="12.48"
                                              height="12"
                                              fill="white"
                                              transform="translate(0 0.5)"
                                              />
                                          </clipPath>
                                          </defs>
                                      </svg>
                                  </span>
                                  <span>
                                      <svg
                                          width="13"
                                          height="13"
                                          viewBox="0 0 13 13"
                                          fill="none"
                                          xmlns="http://www.w3.org/2000/svg"
                                      >
                                          <g clip-path="url(#clip0_281_205)">
                                          <path
                                              d="M12.48 5.1125C12.48 5.2225 12.415 5.3425 12.285 5.4725L9.5625 8.1275L10.2075 11.8775C10.2125 11.9125 10.215 11.9625 10.215 12.0275C10.215 12.1325 10.1888 12.2213 10.1363 12.2938C10.0838 12.3663 10.0075 12.4025 9.9075 12.4025C9.8125 12.4025 9.7125 12.3725 9.6075 12.3125L6.24 10.5425L2.8725 12.3125C2.7625 12.3725 2.6625 12.4025 2.5725 12.4025C2.4675 12.4025 2.38875 12.3663 2.33625 12.2938C2.28375 12.2213 2.2575 12.1325 2.2575 12.0275C2.2575 11.9975 2.2625 11.9475 2.2725 11.8775L2.9175 8.1275L0.1875 5.4725C0.0625 5.3375 0 5.2175 0 5.1125C0 4.9275 0.14 4.8125 0.42 4.7675L4.185 4.22L5.8725 0.8075C5.9675 0.6025 6.09 0.5 6.24 0.5C6.39 0.5 6.5125 0.6025 6.6075 0.8075L8.295 4.22L12.06 4.7675C12.34 4.8125 12.48 4.9275 12.48 5.1125Z"
                                              fill="#FFCC00"
                                          />
                                          </g>
                                          <defs>
                                          <clipPath id="clip0_281_205">
                                              <rect
                                              width="12.48"
                                              height="12"
                                              fill="white"
                                              transform="translate(0 0.5)"
                                              />
                                          </clipPath>
                                          </defs>
                                      </svg>
                                  </span>
                                  <span>
                                      <svg
                                          width="13"
                                          height="13"
                                          viewBox="0 0 13 13"
                                          fill="none"
                                          xmlns="http://www.w3.org/2000/svg"
                                      >
                                          <g clip-path="url(#clip0_281_205)">
                                          <path
                                              d="M12.48 5.1125C12.48 5.2225 12.415 5.3425 12.285 5.4725L9.5625 8.1275L10.2075 11.8775C10.2125 11.9125 10.215 11.9625 10.215 12.0275C10.215 12.1325 10.1888 12.2213 10.1363 12.2938C10.0838 12.3663 10.0075 12.4025 9.9075 12.4025C9.8125 12.4025 9.7125 12.3725 9.6075 12.3125L6.24 10.5425L2.8725 12.3125C2.7625 12.3725 2.6625 12.4025 2.5725 12.4025C2.4675 12.4025 2.38875 12.3663 2.33625 12.2938C2.28375 12.2213 2.2575 12.1325 2.2575 12.0275C2.2575 11.9975 2.2625 11.9475 2.2725 11.8775L2.9175 8.1275L0.1875 5.4725C0.0625 5.3375 0 5.2175 0 5.1125C0 4.9275 0.14 4.8125 0.42 4.7675L4.185 4.22L5.8725 0.8075C5.9675 0.6025 6.09 0.5 6.24 0.5C6.39 0.5 6.5125 0.6025 6.6075 0.8075L8.295 4.22L12.06 4.7675C12.34 4.8125 12.48 4.9275 12.48 5.1125Z"
                                              fill="#FFCC00"
                                          />
                                          </g>
                                          <defs>
                                          <clipPath id="clip0_281_205">
                                              <rect
                                              width="12.48"
                                              height="12"
                                              fill="white"
                                              transform="translate(0 0.5)"
                                              />
                                          </clipPath>
                                          </defs>
                                      </svg>
                                  </span>
                                  <span>
                                      <svg
                                          width="13"
                                          height="13"
                                          viewBox="0 0 13 13"
                                          fill="none"
                                          xmlns="http://www.w3.org/2000/svg"
                                      >
                                          <g clip-path="url(#clip0_281_211)">
                                          <path
                                              d="M9.335 7.4375L11.2625 5.5625L8.5925 5.1725L8.0975 5.0975L7.8725 4.6475L6.68 2.2325V9.455L7.1225 9.6875L9.5075 10.9475L9.0575 8.285L8.9675 7.79L9.335 7.4375ZM12.725 5.4725L10.0025 8.1275L10.6475 11.8775C10.6725 12.0425 10.6575 12.1713 10.6025 12.2638C10.5475 12.3563 10.4625 12.4025 10.3475 12.4025C10.2625 12.4025 10.1625 12.3725 10.0475 12.3125L6.68 10.5425L3.3125 12.3125C3.1975 12.3725 3.0975 12.4025 3.0125 12.4025C2.8975 12.4025 2.8125 12.3563 2.7575 12.2638C2.7025 12.1713 2.6875 12.0425 2.7125 11.8775L3.3575 8.1275L0.627503 5.4725C0.467503 5.3125 0.410003 5.16375 0.455003 5.02625C0.500003 4.88875 0.635003 4.8025 0.860003 4.7675L4.625 4.22L6.3125 0.8075C6.4125 0.6025 6.535 0.5 6.68 0.5C6.82 0.5 6.9425 0.6025 7.0475 0.8075L8.735 4.22L12.5 4.7675C12.725 4.8025 12.86 4.88875 12.905 5.02625C12.95 5.16375 12.89 5.3125 12.725 5.4725Z"
                                              fill="#FFCC00"
                                          />
                                          </g>
                                          <defs>
                                          <clipPath id="clip0_281_211">
                                              <rect
                                              width="12.48"
                                              height="12"
                                              fill="white"
                                              transform="translate(0.439941 0.5)"
                                              />
                                          </clipPath>
                                          </defs>
                                      </svg>
                                  </span>
                                  <span>
                                      <svg
                                          width="14"
                                          height="13"
                                          viewBox="0 0 14 13"
                                          fill="none"
                                          xmlns="http://www.w3.org/2000/svg"
                                      >
                                          <g clip-path="url(#clip0_281_213)">
                                          <path
                                              d="M9.44742 7.79L11.7424 5.5625L8.57742 5.0975L7.15992 2.2325L5.74242 5.0975L2.57742 5.5625L4.87242 7.79L4.32492 10.9475L7.15992 9.455L9.98742 10.9475L9.44742 7.79ZM13.3999 5.1125C13.3999 5.2225 13.3349 5.3425 13.2049 5.4725L10.4824 8.1275L11.1274 11.8775C11.1324 11.9125 11.1349 11.9625 11.1349 12.0275C11.1349 12.2775 11.0324 12.4025 10.8274 12.4025C10.7324 12.4025 10.6324 12.3725 10.5274 12.3125L7.15992 10.5425L3.79242 12.3125C3.68242 12.3725 3.58242 12.4025 3.49242 12.4025C3.38742 12.4025 3.30867 12.3663 3.25617 12.2938C3.20367 12.2213 3.17742 12.1325 3.17742 12.0275C3.17742 11.9975 3.18242 11.9475 3.19242 11.8775L3.83742 8.1275L1.10742 5.4725C0.982422 5.3375 0.919922 5.2175 0.919922 5.1125C0.919922 4.9275 1.05992 4.8125 1.33992 4.7675L5.10492 4.22L6.79242 0.8075C6.88742 0.6025 7.00992 0.5 7.15992 0.5C7.30992 0.5 7.43242 0.6025 7.52742 0.8075L9.21492 4.22L12.9799 4.7675C13.2599 4.8125 13.3999 4.9275 13.3999 5.1125Z"
                                              fill="#FFCC00"
                                          />
                                          </g>
                                          <defs>
                                          <clipPath id="clip0_281_213">
                                              <rect
                                              width="12.48"
                                              height="12"
                                              fill="white"
                                              transform="translate(0.919922 0.5)"
                                              />
                                          </clipPath>
                                          </defs>
                                      </svg>
                                  </span>
                              </div>
                              <div class="fs-12 black-color">9.4k sold</div>
                          </div>
                      </div>
                  </a>
                  <a class="cart" href="#"> Add to cart </a>
              </div>
          </div>
        </div>
      </div>
    </section>

    <section class="py-5">
      <div class="container">
        <div>
          <h5 class="fs-24 black-color fw-600 d-flex align-items-center">
            <span>Our best sellers</span>
            <a class="fs-14 green-color ms-5 text-decoration-none" href="#"
              >Explore now >></a
            >
          </h5>
        </div>
        <div class="row mt-4">
          <div class="col-xl-2 col-6 col-lg-3 mb-4 mx-auto">
              <div class="cart-item">
                  <a href="/product" class="text-decoration-none">
                      <div class="image mb-3">
                          <img
                          width="233"
                          height="192"
                          loading="lazy"
                          class="img-fluid"
                          src="/assets/imgs/home/productt-1.webp"
                          alt="Hashems Turkish Coffee 50 Light/50 Dark 16 Oz"
                          />
                      </div>
                      <div class="px-1">
                          <div class="fs-14 black-color mb-3">
                              Turkish Coffee 50 Light/50 Dark 16 Oz
                          </div>
                          <div class="fs-14 black-color fw-bold mb-3">
                              $13.99 - $19.99
                          </div>
                          <div class="d-flex w-100 justify-content-between align-items-center mb-3">
                              <div>
                                  <span>
                                      <svg
                                          width="13"
                                          height="13"
                                          viewBox="0 0 13 13"
                                          fill="none"
                                          xmlns="http://www.w3.org/2000/svg"
                                      >
                                          <g clip-path="url(#clip0_281_205)">
                                          <path
                                              d="M12.48 5.1125C12.48 5.2225 12.415 5.3425 12.285 5.4725L9.5625 8.1275L10.2075 11.8775C10.2125 11.9125 10.215 11.9625 10.215 12.0275C10.215 12.1325 10.1888 12.2213 10.1363 12.2938C10.0838 12.3663 10.0075 12.4025 9.9075 12.4025C9.8125 12.4025 9.7125 12.3725 9.6075 12.3125L6.24 10.5425L2.8725 12.3125C2.7625 12.3725 2.6625 12.4025 2.5725 12.4025C2.4675 12.4025 2.38875 12.3663 2.33625 12.2938C2.28375 12.2213 2.2575 12.1325 2.2575 12.0275C2.2575 11.9975 2.2625 11.9475 2.2725 11.8775L2.9175 8.1275L0.1875 5.4725C0.0625 5.3375 0 5.2175 0 5.1125C0 4.9275 0.14 4.8125 0.42 4.7675L4.185 4.22L5.8725 0.8075C5.9675 0.6025 6.09 0.5 6.24 0.5C6.39 0.5 6.5125 0.6025 6.6075 0.8075L8.295 4.22L12.06 4.7675C12.34 4.8125 12.48 4.9275 12.48 5.1125Z"
                                              fill="#FFCC00"
                                          />
                                          </g>
                                          <defs>
                                          <clipPath id="clip0_281_205">
                                              <rect
                                              width="12.48"
                                              height="12"
                                              fill="white"
                                              transform="translate(0 0.5)"
                                              />
                                          </clipPath>
                                          </defs>
                                      </svg>
                                  </span>
                                  <span>
                                      <svg
                                          width="13"
                                          height="13"
                                          viewBox="0 0 13 13"
                                          fill="none"
                                          xmlns="http://www.w3.org/2000/svg"
                                      >
                                          <g clip-path="url(#clip0_281_205)">
                                          <path
                                              d="M12.48 5.1125C12.48 5.2225 12.415 5.3425 12.285 5.4725L9.5625 8.1275L10.2075 11.8775C10.2125 11.9125 10.215 11.9625 10.215 12.0275C10.215 12.1325 10.1888 12.2213 10.1363 12.2938C10.0838 12.3663 10.0075 12.4025 9.9075 12.4025C9.8125 12.4025 9.7125 12.3725 9.6075 12.3125L6.24 10.5425L2.8725 12.3125C2.7625 12.3725 2.6625 12.4025 2.5725 12.4025C2.4675 12.4025 2.38875 12.3663 2.33625 12.2938C2.28375 12.2213 2.2575 12.1325 2.2575 12.0275C2.2575 11.9975 2.2625 11.9475 2.2725 11.8775L2.9175 8.1275L0.1875 5.4725C0.0625 5.3375 0 5.2175 0 5.1125C0 4.9275 0.14 4.8125 0.42 4.7675L4.185 4.22L5.8725 0.8075C5.9675 0.6025 6.09 0.5 6.24 0.5C6.39 0.5 6.5125 0.6025 6.6075 0.8075L8.295 4.22L12.06 4.7675C12.34 4.8125 12.48 4.9275 12.48 5.1125Z"
                                              fill="#FFCC00"
                                          />
                                          </g>
                                          <defs>
                                          <clipPath id="clip0_281_205">
                                              <rect
                                              width="12.48"
                                              height="12"
                                              fill="white"
                                              transform="translate(0 0.5)"
                                              />
                                          </clipPath>
                                          </defs>
                                      </svg>
                                  </span>
                                  <span>
                                      <svg
                                          width="13"
                                          height="13"
                                          viewBox="0 0 13 13"
                                          fill="none"
                                          xmlns="http://www.w3.org/2000/svg"
                                      >
                                          <g clip-path="url(#clip0_281_205)">
                                          <path
                                              d="M12.48 5.1125C12.48 5.2225 12.415 5.3425 12.285 5.4725L9.5625 8.1275L10.2075 11.8775C10.2125 11.9125 10.215 11.9625 10.215 12.0275C10.215 12.1325 10.1888 12.2213 10.1363 12.2938C10.0838 12.3663 10.0075 12.4025 9.9075 12.4025C9.8125 12.4025 9.7125 12.3725 9.6075 12.3125L6.24 10.5425L2.8725 12.3125C2.7625 12.3725 2.6625 12.4025 2.5725 12.4025C2.4675 12.4025 2.38875 12.3663 2.33625 12.2938C2.28375 12.2213 2.2575 12.1325 2.2575 12.0275C2.2575 11.9975 2.2625 11.9475 2.2725 11.8775L2.9175 8.1275L0.1875 5.4725C0.0625 5.3375 0 5.2175 0 5.1125C0 4.9275 0.14 4.8125 0.42 4.7675L4.185 4.22L5.8725 0.8075C5.9675 0.6025 6.09 0.5 6.24 0.5C6.39 0.5 6.5125 0.6025 6.6075 0.8075L8.295 4.22L12.06 4.7675C12.34 4.8125 12.48 4.9275 12.48 5.1125Z"
                                              fill="#FFCC00"
                                          />
                                          </g>
                                          <defs>
                                          <clipPath id="clip0_281_205">
                                              <rect
                                              width="12.48"
                                              height="12"
                                              fill="white"
                                              transform="translate(0 0.5)"
                                              />
                                          </clipPath>
                                          </defs>
                                      </svg>
                                  </span>
                                  <span>
                                      <svg
                                          width="13"
                                          height="13"
                                          viewBox="0 0 13 13"
                                          fill="none"
                                          xmlns="http://www.w3.org/2000/svg"
                                      >
                                          <g clip-path="url(#clip0_281_211)">
                                          <path
                                              d="M9.335 7.4375L11.2625 5.5625L8.5925 5.1725L8.0975 5.0975L7.8725 4.6475L6.68 2.2325V9.455L7.1225 9.6875L9.5075 10.9475L9.0575 8.285L8.9675 7.79L9.335 7.4375ZM12.725 5.4725L10.0025 8.1275L10.6475 11.8775C10.6725 12.0425 10.6575 12.1713 10.6025 12.2638C10.5475 12.3563 10.4625 12.4025 10.3475 12.4025C10.2625 12.4025 10.1625 12.3725 10.0475 12.3125L6.68 10.5425L3.3125 12.3125C3.1975 12.3725 3.0975 12.4025 3.0125 12.4025C2.8975 12.4025 2.8125 12.3563 2.7575 12.2638C2.7025 12.1713 2.6875 12.0425 2.7125 11.8775L3.3575 8.1275L0.627503 5.4725C0.467503 5.3125 0.410003 5.16375 0.455003 5.02625C0.500003 4.88875 0.635003 4.8025 0.860003 4.7675L4.625 4.22L6.3125 0.8075C6.4125 0.6025 6.535 0.5 6.68 0.5C6.82 0.5 6.9425 0.6025 7.0475 0.8075L8.735 4.22L12.5 4.7675C12.725 4.8025 12.86 4.88875 12.905 5.02625C12.95 5.16375 12.89 5.3125 12.725 5.4725Z"
                                              fill="#FFCC00"
                                          />
                                          </g>
                                          <defs>
                                          <clipPath id="clip0_281_211">
                                              <rect
                                              width="12.48"
                                              height="12"
                                              fill="white"
                                              transform="translate(0.439941 0.5)"
                                              />
                                          </clipPath>
                                          </defs>
                                      </svg>
                                  </span>
                                  <span>
                                      <svg
                                          width="14"
                                          height="13"
                                          viewBox="0 0 14 13"
                                          fill="none"
                                          xmlns="http://www.w3.org/2000/svg"
                                      >
                                          <g clip-path="url(#clip0_281_213)">
                                          <path
                                              d="M9.44742 7.79L11.7424 5.5625L8.57742 5.0975L7.15992 2.2325L5.74242 5.0975L2.57742 5.5625L4.87242 7.79L4.32492 10.9475L7.15992 9.455L9.98742 10.9475L9.44742 7.79ZM13.3999 5.1125C13.3999 5.2225 13.3349 5.3425 13.2049 5.4725L10.4824 8.1275L11.1274 11.8775C11.1324 11.9125 11.1349 11.9625 11.1349 12.0275C11.1349 12.2775 11.0324 12.4025 10.8274 12.4025C10.7324 12.4025 10.6324 12.3725 10.5274 12.3125L7.15992 10.5425L3.79242 12.3125C3.68242 12.3725 3.58242 12.4025 3.49242 12.4025C3.38742 12.4025 3.30867 12.3663 3.25617 12.2938C3.20367 12.2213 3.17742 12.1325 3.17742 12.0275C3.17742 11.9975 3.18242 11.9475 3.19242 11.8775L3.83742 8.1275L1.10742 5.4725C0.982422 5.3375 0.919922 5.2175 0.919922 5.1125C0.919922 4.9275 1.05992 4.8125 1.33992 4.7675L5.10492 4.22L6.79242 0.8075C6.88742 0.6025 7.00992 0.5 7.15992 0.5C7.30992 0.5 7.43242 0.6025 7.52742 0.8075L9.21492 4.22L12.9799 4.7675C13.2599 4.8125 13.3999 4.9275 13.3999 5.1125Z"
                                              fill="#FFCC00"
                                          />
                                          </g>
                                          <defs>
                                          <clipPath id="clip0_281_213">
                                              <rect
                                              width="12.48"
                                              height="12"
                                              fill="white"
                                              transform="translate(0.919922 0.5)"
                                              />
                                          </clipPath>
                                          </defs>
                                      </svg>
                                  </span>
                              </div>
                              <div class="fs-12 black-color">9.4k sold</div>
                          </div>
                      </div>
                  </a>
                  <a class="cart" href="#"> Add to cart </a>
              </div>
          </div>
          <div class="col-xl-2 col-6 col-lg-3 mb-4 mx-auto">
              <div class="cart-item">
                  <a href="/product" class="text-decoration-none">
                      <div class="image mb-3">
                          <img
                          width="233"
                          height="192"
                          loading="lazy"
                          class="img-fluid"
                          src="/assets/imgs/home/productt-1.webp"
                          alt="Hashems Turkish Coffee 50 Light/50 Dark 16 Oz"
                          />
                      </div>
                      <div class="px-1">
                          <div class="fs-14 black-color mb-3">
                              Turkish Coffee 50 Light/50 Dark 16 Oz
                          </div>
                          <div class="fs-14 black-color fw-bold mb-3">
                              $13.99 - $19.99
                          </div>
                          <div class="d-flex w-100 justify-content-between align-items-center mb-3">
                              <div>
                                  <span>
                                      <svg
                                          width="13"
                                          height="13"
                                          viewBox="0 0 13 13"
                                          fill="none"
                                          xmlns="http://www.w3.org/2000/svg"
                                      >
                                          <g clip-path="url(#clip0_281_205)">
                                          <path
                                              d="M12.48 5.1125C12.48 5.2225 12.415 5.3425 12.285 5.4725L9.5625 8.1275L10.2075 11.8775C10.2125 11.9125 10.215 11.9625 10.215 12.0275C10.215 12.1325 10.1888 12.2213 10.1363 12.2938C10.0838 12.3663 10.0075 12.4025 9.9075 12.4025C9.8125 12.4025 9.7125 12.3725 9.6075 12.3125L6.24 10.5425L2.8725 12.3125C2.7625 12.3725 2.6625 12.4025 2.5725 12.4025C2.4675 12.4025 2.38875 12.3663 2.33625 12.2938C2.28375 12.2213 2.2575 12.1325 2.2575 12.0275C2.2575 11.9975 2.2625 11.9475 2.2725 11.8775L2.9175 8.1275L0.1875 5.4725C0.0625 5.3375 0 5.2175 0 5.1125C0 4.9275 0.14 4.8125 0.42 4.7675L4.185 4.22L5.8725 0.8075C5.9675 0.6025 6.09 0.5 6.24 0.5C6.39 0.5 6.5125 0.6025 6.6075 0.8075L8.295 4.22L12.06 4.7675C12.34 4.8125 12.48 4.9275 12.48 5.1125Z"
                                              fill="#FFCC00"
                                          />
                                          </g>
                                          <defs>
                                          <clipPath id="clip0_281_205">
                                              <rect
                                              width="12.48"
                                              height="12"
                                              fill="white"
                                              transform="translate(0 0.5)"
                                              />
                                          </clipPath>
                                          </defs>
                                      </svg>
                                  </span>
                                  <span>
                                      <svg
                                          width="13"
                                          height="13"
                                          viewBox="0 0 13 13"
                                          fill="none"
                                          xmlns="http://www.w3.org/2000/svg"
                                      >
                                          <g clip-path="url(#clip0_281_205)">
                                          <path
                                              d="M12.48 5.1125C12.48 5.2225 12.415 5.3425 12.285 5.4725L9.5625 8.1275L10.2075 11.8775C10.2125 11.9125 10.215 11.9625 10.215 12.0275C10.215 12.1325 10.1888 12.2213 10.1363 12.2938C10.0838 12.3663 10.0075 12.4025 9.9075 12.4025C9.8125 12.4025 9.7125 12.3725 9.6075 12.3125L6.24 10.5425L2.8725 12.3125C2.7625 12.3725 2.6625 12.4025 2.5725 12.4025C2.4675 12.4025 2.38875 12.3663 2.33625 12.2938C2.28375 12.2213 2.2575 12.1325 2.2575 12.0275C2.2575 11.9975 2.2625 11.9475 2.2725 11.8775L2.9175 8.1275L0.1875 5.4725C0.0625 5.3375 0 5.2175 0 5.1125C0 4.9275 0.14 4.8125 0.42 4.7675L4.185 4.22L5.8725 0.8075C5.9675 0.6025 6.09 0.5 6.24 0.5C6.39 0.5 6.5125 0.6025 6.6075 0.8075L8.295 4.22L12.06 4.7675C12.34 4.8125 12.48 4.9275 12.48 5.1125Z"
                                              fill="#FFCC00"
                                          />
                                          </g>
                                          <defs>
                                          <clipPath id="clip0_281_205">
                                              <rect
                                              width="12.48"
                                              height="12"
                                              fill="white"
                                              transform="translate(0 0.5)"
                                              />
                                          </clipPath>
                                          </defs>
                                      </svg>
                                  </span>
                                  <span>
                                      <svg
                                          width="13"
                                          height="13"
                                          viewBox="0 0 13 13"
                                          fill="none"
                                          xmlns="http://www.w3.org/2000/svg"
                                      >
                                          <g clip-path="url(#clip0_281_205)">
                                          <path
                                              d="M12.48 5.1125C12.48 5.2225 12.415 5.3425 12.285 5.4725L9.5625 8.1275L10.2075 11.8775C10.2125 11.9125 10.215 11.9625 10.215 12.0275C10.215 12.1325 10.1888 12.2213 10.1363 12.2938C10.0838 12.3663 10.0075 12.4025 9.9075 12.4025C9.8125 12.4025 9.7125 12.3725 9.6075 12.3125L6.24 10.5425L2.8725 12.3125C2.7625 12.3725 2.6625 12.4025 2.5725 12.4025C2.4675 12.4025 2.38875 12.3663 2.33625 12.2938C2.28375 12.2213 2.2575 12.1325 2.2575 12.0275C2.2575 11.9975 2.2625 11.9475 2.2725 11.8775L2.9175 8.1275L0.1875 5.4725C0.0625 5.3375 0 5.2175 0 5.1125C0 4.9275 0.14 4.8125 0.42 4.7675L4.185 4.22L5.8725 0.8075C5.9675 0.6025 6.09 0.5 6.24 0.5C6.39 0.5 6.5125 0.6025 6.6075 0.8075L8.295 4.22L12.06 4.7675C12.34 4.8125 12.48 4.9275 12.48 5.1125Z"
                                              fill="#FFCC00"
                                          />
                                          </g>
                                          <defs>
                                          <clipPath id="clip0_281_205">
                                              <rect
                                              width="12.48"
                                              height="12"
                                              fill="white"
                                              transform="translate(0 0.5)"
                                              />
                                          </clipPath>
                                          </defs>
                                      </svg>
                                  </span>
                                  <span>
                                      <svg
                                          width="13"
                                          height="13"
                                          viewBox="0 0 13 13"
                                          fill="none"
                                          xmlns="http://www.w3.org/2000/svg"
                                      >
                                          <g clip-path="url(#clip0_281_211)">
                                          <path
                                              d="M9.335 7.4375L11.2625 5.5625L8.5925 5.1725L8.0975 5.0975L7.8725 4.6475L6.68 2.2325V9.455L7.1225 9.6875L9.5075 10.9475L9.0575 8.285L8.9675 7.79L9.335 7.4375ZM12.725 5.4725L10.0025 8.1275L10.6475 11.8775C10.6725 12.0425 10.6575 12.1713 10.6025 12.2638C10.5475 12.3563 10.4625 12.4025 10.3475 12.4025C10.2625 12.4025 10.1625 12.3725 10.0475 12.3125L6.68 10.5425L3.3125 12.3125C3.1975 12.3725 3.0975 12.4025 3.0125 12.4025C2.8975 12.4025 2.8125 12.3563 2.7575 12.2638C2.7025 12.1713 2.6875 12.0425 2.7125 11.8775L3.3575 8.1275L0.627503 5.4725C0.467503 5.3125 0.410003 5.16375 0.455003 5.02625C0.500003 4.88875 0.635003 4.8025 0.860003 4.7675L4.625 4.22L6.3125 0.8075C6.4125 0.6025 6.535 0.5 6.68 0.5C6.82 0.5 6.9425 0.6025 7.0475 0.8075L8.735 4.22L12.5 4.7675C12.725 4.8025 12.86 4.88875 12.905 5.02625C12.95 5.16375 12.89 5.3125 12.725 5.4725Z"
                                              fill="#FFCC00"
                                          />
                                          </g>
                                          <defs>
                                          <clipPath id="clip0_281_211">
                                              <rect
                                              width="12.48"
                                              height="12"
                                              fill="white"
                                              transform="translate(0.439941 0.5)"
                                              />
                                          </clipPath>
                                          </defs>
                                      </svg>
                                  </span>
                                  <span>
                                      <svg
                                          width="14"
                                          height="13"
                                          viewBox="0 0 14 13"
                                          fill="none"
                                          xmlns="http://www.w3.org/2000/svg"
                                      >
                                          <g clip-path="url(#clip0_281_213)">
                                          <path
                                              d="M9.44742 7.79L11.7424 5.5625L8.57742 5.0975L7.15992 2.2325L5.74242 5.0975L2.57742 5.5625L4.87242 7.79L4.32492 10.9475L7.15992 9.455L9.98742 10.9475L9.44742 7.79ZM13.3999 5.1125C13.3999 5.2225 13.3349 5.3425 13.2049 5.4725L10.4824 8.1275L11.1274 11.8775C11.1324 11.9125 11.1349 11.9625 11.1349 12.0275C11.1349 12.2775 11.0324 12.4025 10.8274 12.4025C10.7324 12.4025 10.6324 12.3725 10.5274 12.3125L7.15992 10.5425L3.79242 12.3125C3.68242 12.3725 3.58242 12.4025 3.49242 12.4025C3.38742 12.4025 3.30867 12.3663 3.25617 12.2938C3.20367 12.2213 3.17742 12.1325 3.17742 12.0275C3.17742 11.9975 3.18242 11.9475 3.19242 11.8775L3.83742 8.1275L1.10742 5.4725C0.982422 5.3375 0.919922 5.2175 0.919922 5.1125C0.919922 4.9275 1.05992 4.8125 1.33992 4.7675L5.10492 4.22L6.79242 0.8075C6.88742 0.6025 7.00992 0.5 7.15992 0.5C7.30992 0.5 7.43242 0.6025 7.52742 0.8075L9.21492 4.22L12.9799 4.7675C13.2599 4.8125 13.3999 4.9275 13.3999 5.1125Z"
                                              fill="#FFCC00"
                                          />
                                          </g>
                                          <defs>
                                          <clipPath id="clip0_281_213">
                                              <rect
                                              width="12.48"
                                              height="12"
                                              fill="white"
                                              transform="translate(0.919922 0.5)"
                                              />
                                          </clipPath>
                                          </defs>
                                      </svg>
                                  </span>
                              </div>
                              <div class="fs-12 black-color">9.4k sold</div>
                          </div>
                      </div>
                  </a>
                  <a class="cart" href="#"> Add to cart </a>
              </div>
          </div>
          <div class="col-xl-2 col-6 col-lg-3 mb-4 mx-auto">
              <div class="cart-item">
                  <a href="/product" class="text-decoration-none">
                      <div class="image mb-3">
                          <img
                          width="233"
                          height="192"
                          loading="lazy"
                          class="img-fluid"
                          src="/assets/imgs/home/productt-1.webp"
                          alt="Hashems Turkish Coffee 50 Light/50 Dark 16 Oz"
                          />
                      </div>
                      <div class="px-1">
                          <div class="fs-14 black-color mb-3">
                              Turkish Coffee 50 Light/50 Dark 16 Oz
                          </div>
                          <div class="fs-14 black-color fw-bold mb-3">
                              $13.99 - $19.99
                          </div>
                          <div class="d-flex w-100 justify-content-between align-items-center mb-3">
                              <div>
                                  <span>
                                      <svg
                                          width="13"
                                          height="13"
                                          viewBox="0 0 13 13"
                                          fill="none"
                                          xmlns="http://www.w3.org/2000/svg"
                                      >
                                          <g clip-path="url(#clip0_281_205)">
                                          <path
                                              d="M12.48 5.1125C12.48 5.2225 12.415 5.3425 12.285 5.4725L9.5625 8.1275L10.2075 11.8775C10.2125 11.9125 10.215 11.9625 10.215 12.0275C10.215 12.1325 10.1888 12.2213 10.1363 12.2938C10.0838 12.3663 10.0075 12.4025 9.9075 12.4025C9.8125 12.4025 9.7125 12.3725 9.6075 12.3125L6.24 10.5425L2.8725 12.3125C2.7625 12.3725 2.6625 12.4025 2.5725 12.4025C2.4675 12.4025 2.38875 12.3663 2.33625 12.2938C2.28375 12.2213 2.2575 12.1325 2.2575 12.0275C2.2575 11.9975 2.2625 11.9475 2.2725 11.8775L2.9175 8.1275L0.1875 5.4725C0.0625 5.3375 0 5.2175 0 5.1125C0 4.9275 0.14 4.8125 0.42 4.7675L4.185 4.22L5.8725 0.8075C5.9675 0.6025 6.09 0.5 6.24 0.5C6.39 0.5 6.5125 0.6025 6.6075 0.8075L8.295 4.22L12.06 4.7675C12.34 4.8125 12.48 4.9275 12.48 5.1125Z"
                                              fill="#FFCC00"
                                          />
                                          </g>
                                          <defs>
                                          <clipPath id="clip0_281_205">
                                              <rect
                                              width="12.48"
                                              height="12"
                                              fill="white"
                                              transform="translate(0 0.5)"
                                              />
                                          </clipPath>
                                          </defs>
                                      </svg>
                                  </span>
                                  <span>
                                      <svg
                                          width="13"
                                          height="13"
                                          viewBox="0 0 13 13"
                                          fill="none"
                                          xmlns="http://www.w3.org/2000/svg"
                                      >
                                          <g clip-path="url(#clip0_281_205)">
                                          <path
                                              d="M12.48 5.1125C12.48 5.2225 12.415 5.3425 12.285 5.4725L9.5625 8.1275L10.2075 11.8775C10.2125 11.9125 10.215 11.9625 10.215 12.0275C10.215 12.1325 10.1888 12.2213 10.1363 12.2938C10.0838 12.3663 10.0075 12.4025 9.9075 12.4025C9.8125 12.4025 9.7125 12.3725 9.6075 12.3125L6.24 10.5425L2.8725 12.3125C2.7625 12.3725 2.6625 12.4025 2.5725 12.4025C2.4675 12.4025 2.38875 12.3663 2.33625 12.2938C2.28375 12.2213 2.2575 12.1325 2.2575 12.0275C2.2575 11.9975 2.2625 11.9475 2.2725 11.8775L2.9175 8.1275L0.1875 5.4725C0.0625 5.3375 0 5.2175 0 5.1125C0 4.9275 0.14 4.8125 0.42 4.7675L4.185 4.22L5.8725 0.8075C5.9675 0.6025 6.09 0.5 6.24 0.5C6.39 0.5 6.5125 0.6025 6.6075 0.8075L8.295 4.22L12.06 4.7675C12.34 4.8125 12.48 4.9275 12.48 5.1125Z"
                                              fill="#FFCC00"
                                          />
                                          </g>
                                          <defs>
                                          <clipPath id="clip0_281_205">
                                              <rect
                                              width="12.48"
                                              height="12"
                                              fill="white"
                                              transform="translate(0 0.5)"
                                              />
                                          </clipPath>
                                          </defs>
                                      </svg>
                                  </span>
                                  <span>
                                      <svg
                                          width="13"
                                          height="13"
                                          viewBox="0 0 13 13"
                                          fill="none"
                                          xmlns="http://www.w3.org/2000/svg"
                                      >
                                          <g clip-path="url(#clip0_281_205)">
                                          <path
                                              d="M12.48 5.1125C12.48 5.2225 12.415 5.3425 12.285 5.4725L9.5625 8.1275L10.2075 11.8775C10.2125 11.9125 10.215 11.9625 10.215 12.0275C10.215 12.1325 10.1888 12.2213 10.1363 12.2938C10.0838 12.3663 10.0075 12.4025 9.9075 12.4025C9.8125 12.4025 9.7125 12.3725 9.6075 12.3125L6.24 10.5425L2.8725 12.3125C2.7625 12.3725 2.6625 12.4025 2.5725 12.4025C2.4675 12.4025 2.38875 12.3663 2.33625 12.2938C2.28375 12.2213 2.2575 12.1325 2.2575 12.0275C2.2575 11.9975 2.2625 11.9475 2.2725 11.8775L2.9175 8.1275L0.1875 5.4725C0.0625 5.3375 0 5.2175 0 5.1125C0 4.9275 0.14 4.8125 0.42 4.7675L4.185 4.22L5.8725 0.8075C5.9675 0.6025 6.09 0.5 6.24 0.5C6.39 0.5 6.5125 0.6025 6.6075 0.8075L8.295 4.22L12.06 4.7675C12.34 4.8125 12.48 4.9275 12.48 5.1125Z"
                                              fill="#FFCC00"
                                          />
                                          </g>
                                          <defs>
                                          <clipPath id="clip0_281_205">
                                              <rect
                                              width="12.48"
                                              height="12"
                                              fill="white"
                                              transform="translate(0 0.5)"
                                              />
                                          </clipPath>
                                          </defs>
                                      </svg>
                                  </span>
                                  <span>
                                      <svg
                                          width="13"
                                          height="13"
                                          viewBox="0 0 13 13"
                                          fill="none"
                                          xmlns="http://www.w3.org/2000/svg"
                                      >
                                          <g clip-path="url(#clip0_281_211)">
                                          <path
                                              d="M9.335 7.4375L11.2625 5.5625L8.5925 5.1725L8.0975 5.0975L7.8725 4.6475L6.68 2.2325V9.455L7.1225 9.6875L9.5075 10.9475L9.0575 8.285L8.9675 7.79L9.335 7.4375ZM12.725 5.4725L10.0025 8.1275L10.6475 11.8775C10.6725 12.0425 10.6575 12.1713 10.6025 12.2638C10.5475 12.3563 10.4625 12.4025 10.3475 12.4025C10.2625 12.4025 10.1625 12.3725 10.0475 12.3125L6.68 10.5425L3.3125 12.3125C3.1975 12.3725 3.0975 12.4025 3.0125 12.4025C2.8975 12.4025 2.8125 12.3563 2.7575 12.2638C2.7025 12.1713 2.6875 12.0425 2.7125 11.8775L3.3575 8.1275L0.627503 5.4725C0.467503 5.3125 0.410003 5.16375 0.455003 5.02625C0.500003 4.88875 0.635003 4.8025 0.860003 4.7675L4.625 4.22L6.3125 0.8075C6.4125 0.6025 6.535 0.5 6.68 0.5C6.82 0.5 6.9425 0.6025 7.0475 0.8075L8.735 4.22L12.5 4.7675C12.725 4.8025 12.86 4.88875 12.905 5.02625C12.95 5.16375 12.89 5.3125 12.725 5.4725Z"
                                              fill="#FFCC00"
                                          />
                                          </g>
                                          <defs>
                                          <clipPath id="clip0_281_211">
                                              <rect
                                              width="12.48"
                                              height="12"
                                              fill="white"
                                              transform="translate(0.439941 0.5)"
                                              />
                                          </clipPath>
                                          </defs>
                                      </svg>
                                  </span>
                                  <span>
                                      <svg
                                          width="14"
                                          height="13"
                                          viewBox="0 0 14 13"
                                          fill="none"
                                          xmlns="http://www.w3.org/2000/svg"
                                      >
                                          <g clip-path="url(#clip0_281_213)">
                                          <path
                                              d="M9.44742 7.79L11.7424 5.5625L8.57742 5.0975L7.15992 2.2325L5.74242 5.0975L2.57742 5.5625L4.87242 7.79L4.32492 10.9475L7.15992 9.455L9.98742 10.9475L9.44742 7.79ZM13.3999 5.1125C13.3999 5.2225 13.3349 5.3425 13.2049 5.4725L10.4824 8.1275L11.1274 11.8775C11.1324 11.9125 11.1349 11.9625 11.1349 12.0275C11.1349 12.2775 11.0324 12.4025 10.8274 12.4025C10.7324 12.4025 10.6324 12.3725 10.5274 12.3125L7.15992 10.5425L3.79242 12.3125C3.68242 12.3725 3.58242 12.4025 3.49242 12.4025C3.38742 12.4025 3.30867 12.3663 3.25617 12.2938C3.20367 12.2213 3.17742 12.1325 3.17742 12.0275C3.17742 11.9975 3.18242 11.9475 3.19242 11.8775L3.83742 8.1275L1.10742 5.4725C0.982422 5.3375 0.919922 5.2175 0.919922 5.1125C0.919922 4.9275 1.05992 4.8125 1.33992 4.7675L5.10492 4.22L6.79242 0.8075C6.88742 0.6025 7.00992 0.5 7.15992 0.5C7.30992 0.5 7.43242 0.6025 7.52742 0.8075L9.21492 4.22L12.9799 4.7675C13.2599 4.8125 13.3999 4.9275 13.3999 5.1125Z"
                                              fill="#FFCC00"
                                          />
                                          </g>
                                          <defs>
                                          <clipPath id="clip0_281_213">
                                              <rect
                                              width="12.48"
                                              height="12"
                                              fill="white"
                                              transform="translate(0.919922 0.5)"
                                              />
                                          </clipPath>
                                          </defs>
                                      </svg>
                                  </span>
                              </div>
                              <div class="fs-12 black-color">9.4k sold</div>
                          </div>
                      </div>
                  </a>
                  <a class="cart" href="#"> Add to cart </a>
              </div>
          </div>
          <div class="col-xl-2 col-6 col-lg-3 mb-4 mx-auto">
              <div class="cart-item">
                  <a href="/product" class="text-decoration-none">
                      <div class="image mb-3">
                          <img
                          width="233"
                          height="192"
                          loading="lazy"
                          class="img-fluid"
                          src="/assets/imgs/home/productt-1.webp"
                          alt="Hashems Turkish Coffee 50 Light/50 Dark 16 Oz"
                          />
                      </div>
                      <div class="px-1">
                          <div class="fs-14 black-color mb-3">
                              Turkish Coffee 50 Light/50 Dark 16 Oz
                          </div>
                          <div class="fs-14 black-color fw-bold mb-3">
                              $13.99 - $19.99
                          </div>
                          <div class="d-flex w-100 justify-content-between align-items-center mb-3">
                              <div>
                                  <span>
                                      <svg
                                          width="13"
                                          height="13"
                                          viewBox="0 0 13 13"
                                          fill="none"
                                          xmlns="http://www.w3.org/2000/svg"
                                      >
                                          <g clip-path="url(#clip0_281_205)">
                                          <path
                                              d="M12.48 5.1125C12.48 5.2225 12.415 5.3425 12.285 5.4725L9.5625 8.1275L10.2075 11.8775C10.2125 11.9125 10.215 11.9625 10.215 12.0275C10.215 12.1325 10.1888 12.2213 10.1363 12.2938C10.0838 12.3663 10.0075 12.4025 9.9075 12.4025C9.8125 12.4025 9.7125 12.3725 9.6075 12.3125L6.24 10.5425L2.8725 12.3125C2.7625 12.3725 2.6625 12.4025 2.5725 12.4025C2.4675 12.4025 2.38875 12.3663 2.33625 12.2938C2.28375 12.2213 2.2575 12.1325 2.2575 12.0275C2.2575 11.9975 2.2625 11.9475 2.2725 11.8775L2.9175 8.1275L0.1875 5.4725C0.0625 5.3375 0 5.2175 0 5.1125C0 4.9275 0.14 4.8125 0.42 4.7675L4.185 4.22L5.8725 0.8075C5.9675 0.6025 6.09 0.5 6.24 0.5C6.39 0.5 6.5125 0.6025 6.6075 0.8075L8.295 4.22L12.06 4.7675C12.34 4.8125 12.48 4.9275 12.48 5.1125Z"
                                              fill="#FFCC00"
                                          />
                                          </g>
                                          <defs>
                                          <clipPath id="clip0_281_205">
                                              <rect
                                              width="12.48"
                                              height="12"
                                              fill="white"
                                              transform="translate(0 0.5)"
                                              />
                                          </clipPath>
                                          </defs>
                                      </svg>
                                  </span>
                                  <span>
                                      <svg
                                          width="13"
                                          height="13"
                                          viewBox="0 0 13 13"
                                          fill="none"
                                          xmlns="http://www.w3.org/2000/svg"
                                      >
                                          <g clip-path="url(#clip0_281_205)">
                                          <path
                                              d="M12.48 5.1125C12.48 5.2225 12.415 5.3425 12.285 5.4725L9.5625 8.1275L10.2075 11.8775C10.2125 11.9125 10.215 11.9625 10.215 12.0275C10.215 12.1325 10.1888 12.2213 10.1363 12.2938C10.0838 12.3663 10.0075 12.4025 9.9075 12.4025C9.8125 12.4025 9.7125 12.3725 9.6075 12.3125L6.24 10.5425L2.8725 12.3125C2.7625 12.3725 2.6625 12.4025 2.5725 12.4025C2.4675 12.4025 2.38875 12.3663 2.33625 12.2938C2.28375 12.2213 2.2575 12.1325 2.2575 12.0275C2.2575 11.9975 2.2625 11.9475 2.2725 11.8775L2.9175 8.1275L0.1875 5.4725C0.0625 5.3375 0 5.2175 0 5.1125C0 4.9275 0.14 4.8125 0.42 4.7675L4.185 4.22L5.8725 0.8075C5.9675 0.6025 6.09 0.5 6.24 0.5C6.39 0.5 6.5125 0.6025 6.6075 0.8075L8.295 4.22L12.06 4.7675C12.34 4.8125 12.48 4.9275 12.48 5.1125Z"
                                              fill="#FFCC00"
                                          />
                                          </g>
                                          <defs>
                                          <clipPath id="clip0_281_205">
                                              <rect
                                              width="12.48"
                                              height="12"
                                              fill="white"
                                              transform="translate(0 0.5)"
                                              />
                                          </clipPath>
                                          </defs>
                                      </svg>
                                  </span>
                                  <span>
                                      <svg
                                          width="13"
                                          height="13"
                                          viewBox="0 0 13 13"
                                          fill="none"
                                          xmlns="http://www.w3.org/2000/svg"
                                      >
                                          <g clip-path="url(#clip0_281_205)">
                                          <path
                                              d="M12.48 5.1125C12.48 5.2225 12.415 5.3425 12.285 5.4725L9.5625 8.1275L10.2075 11.8775C10.2125 11.9125 10.215 11.9625 10.215 12.0275C10.215 12.1325 10.1888 12.2213 10.1363 12.2938C10.0838 12.3663 10.0075 12.4025 9.9075 12.4025C9.8125 12.4025 9.7125 12.3725 9.6075 12.3125L6.24 10.5425L2.8725 12.3125C2.7625 12.3725 2.6625 12.4025 2.5725 12.4025C2.4675 12.4025 2.38875 12.3663 2.33625 12.2938C2.28375 12.2213 2.2575 12.1325 2.2575 12.0275C2.2575 11.9975 2.2625 11.9475 2.2725 11.8775L2.9175 8.1275L0.1875 5.4725C0.0625 5.3375 0 5.2175 0 5.1125C0 4.9275 0.14 4.8125 0.42 4.7675L4.185 4.22L5.8725 0.8075C5.9675 0.6025 6.09 0.5 6.24 0.5C6.39 0.5 6.5125 0.6025 6.6075 0.8075L8.295 4.22L12.06 4.7675C12.34 4.8125 12.48 4.9275 12.48 5.1125Z"
                                              fill="#FFCC00"
                                          />
                                          </g>
                                          <defs>
                                          <clipPath id="clip0_281_205">
                                              <rect
                                              width="12.48"
                                              height="12"
                                              fill="white"
                                              transform="translate(0 0.5)"
                                              />
                                          </clipPath>
                                          </defs>
                                      </svg>
                                  </span>
                                  <span>
                                      <svg
                                          width="13"
                                          height="13"
                                          viewBox="0 0 13 13"
                                          fill="none"
                                          xmlns="http://www.w3.org/2000/svg"
                                      >
                                          <g clip-path="url(#clip0_281_211)">
                                          <path
                                              d="M9.335 7.4375L11.2625 5.5625L8.5925 5.1725L8.0975 5.0975L7.8725 4.6475L6.68 2.2325V9.455L7.1225 9.6875L9.5075 10.9475L9.0575 8.285L8.9675 7.79L9.335 7.4375ZM12.725 5.4725L10.0025 8.1275L10.6475 11.8775C10.6725 12.0425 10.6575 12.1713 10.6025 12.2638C10.5475 12.3563 10.4625 12.4025 10.3475 12.4025C10.2625 12.4025 10.1625 12.3725 10.0475 12.3125L6.68 10.5425L3.3125 12.3125C3.1975 12.3725 3.0975 12.4025 3.0125 12.4025C2.8975 12.4025 2.8125 12.3563 2.7575 12.2638C2.7025 12.1713 2.6875 12.0425 2.7125 11.8775L3.3575 8.1275L0.627503 5.4725C0.467503 5.3125 0.410003 5.16375 0.455003 5.02625C0.500003 4.88875 0.635003 4.8025 0.860003 4.7675L4.625 4.22L6.3125 0.8075C6.4125 0.6025 6.535 0.5 6.68 0.5C6.82 0.5 6.9425 0.6025 7.0475 0.8075L8.735 4.22L12.5 4.7675C12.725 4.8025 12.86 4.88875 12.905 5.02625C12.95 5.16375 12.89 5.3125 12.725 5.4725Z"
                                              fill="#FFCC00"
                                          />
                                          </g>
                                          <defs>
                                          <clipPath id="clip0_281_211">
                                              <rect
                                              width="12.48"
                                              height="12"
                                              fill="white"
                                              transform="translate(0.439941 0.5)"
                                              />
                                          </clipPath>
                                          </defs>
                                      </svg>
                                  </span>
                                  <span>
                                      <svg
                                          width="14"
                                          height="13"
                                          viewBox="0 0 14 13"
                                          fill="none"
                                          xmlns="http://www.w3.org/2000/svg"
                                      >
                                          <g clip-path="url(#clip0_281_213)">
                                          <path
                                              d="M9.44742 7.79L11.7424 5.5625L8.57742 5.0975L7.15992 2.2325L5.74242 5.0975L2.57742 5.5625L4.87242 7.79L4.32492 10.9475L7.15992 9.455L9.98742 10.9475L9.44742 7.79ZM13.3999 5.1125C13.3999 5.2225 13.3349 5.3425 13.2049 5.4725L10.4824 8.1275L11.1274 11.8775C11.1324 11.9125 11.1349 11.9625 11.1349 12.0275C11.1349 12.2775 11.0324 12.4025 10.8274 12.4025C10.7324 12.4025 10.6324 12.3725 10.5274 12.3125L7.15992 10.5425L3.79242 12.3125C3.68242 12.3725 3.58242 12.4025 3.49242 12.4025C3.38742 12.4025 3.30867 12.3663 3.25617 12.2938C3.20367 12.2213 3.17742 12.1325 3.17742 12.0275C3.17742 11.9975 3.18242 11.9475 3.19242 11.8775L3.83742 8.1275L1.10742 5.4725C0.982422 5.3375 0.919922 5.2175 0.919922 5.1125C0.919922 4.9275 1.05992 4.8125 1.33992 4.7675L5.10492 4.22L6.79242 0.8075C6.88742 0.6025 7.00992 0.5 7.15992 0.5C7.30992 0.5 7.43242 0.6025 7.52742 0.8075L9.21492 4.22L12.9799 4.7675C13.2599 4.8125 13.3999 4.9275 13.3999 5.1125Z"
                                              fill="#FFCC00"
                                          />
                                          </g>
                                          <defs>
                                          <clipPath id="clip0_281_213">
                                              <rect
                                              width="12.48"
                                              height="12"
                                              fill="white"
                                              transform="translate(0.919922 0.5)"
                                              />
                                          </clipPath>
                                          </defs>
                                      </svg>
                                  </span>
                              </div>
                              <div class="fs-12 black-color">9.4k sold</div>
                          </div>
                      </div>
                  </a>
                  <a class="cart" href="#"> Add to cart </a>
              </div>
          </div>
          <div class="col-xl-2 col-6 col-lg-3 mb-4 mx-auto">
              <div class="cart-item">
                  <a href="/product" class="text-decoration-none">
                      <div class="image mb-3">
                          <img
                          width="233"
                          height="192"
                          loading="lazy"
                          class="img-fluid"
                          src="/assets/imgs/home/productt-1.webp"
                          alt="Hashems Turkish Coffee 50 Light/50 Dark 16 Oz"
                          />
                      </div>
                      <div class="px-1">
                          <div class="fs-14 black-color mb-3">
                              Turkish Coffee 50 Light/50 Dark 16 Oz
                          </div>
                          <div class="fs-14 black-color fw-bold mb-3">
                              $13.99 - $19.99
                          </div>
                          <div class="d-flex w-100 justify-content-between align-items-center mb-3">
                              <div>
                                  <span>
                                      <svg
                                          width="13"
                                          height="13"
                                          viewBox="0 0 13 13"
                                          fill="none"
                                          xmlns="http://www.w3.org/2000/svg"
                                      >
                                          <g clip-path="url(#clip0_281_205)">
                                          <path
                                              d="M12.48 5.1125C12.48 5.2225 12.415 5.3425 12.285 5.4725L9.5625 8.1275L10.2075 11.8775C10.2125 11.9125 10.215 11.9625 10.215 12.0275C10.215 12.1325 10.1888 12.2213 10.1363 12.2938C10.0838 12.3663 10.0075 12.4025 9.9075 12.4025C9.8125 12.4025 9.7125 12.3725 9.6075 12.3125L6.24 10.5425L2.8725 12.3125C2.7625 12.3725 2.6625 12.4025 2.5725 12.4025C2.4675 12.4025 2.38875 12.3663 2.33625 12.2938C2.28375 12.2213 2.2575 12.1325 2.2575 12.0275C2.2575 11.9975 2.2625 11.9475 2.2725 11.8775L2.9175 8.1275L0.1875 5.4725C0.0625 5.3375 0 5.2175 0 5.1125C0 4.9275 0.14 4.8125 0.42 4.7675L4.185 4.22L5.8725 0.8075C5.9675 0.6025 6.09 0.5 6.24 0.5C6.39 0.5 6.5125 0.6025 6.6075 0.8075L8.295 4.22L12.06 4.7675C12.34 4.8125 12.48 4.9275 12.48 5.1125Z"
                                              fill="#FFCC00"
                                          />
                                          </g>
                                          <defs>
                                          <clipPath id="clip0_281_205">
                                              <rect
                                              width="12.48"
                                              height="12"
                                              fill="white"
                                              transform="translate(0 0.5)"
                                              />
                                          </clipPath>
                                          </defs>
                                      </svg>
                                  </span>
                                  <span>
                                      <svg
                                          width="13"
                                          height="13"
                                          viewBox="0 0 13 13"
                                          fill="none"
                                          xmlns="http://www.w3.org/2000/svg"
                                      >
                                          <g clip-path="url(#clip0_281_205)">
                                          <path
                                              d="M12.48 5.1125C12.48 5.2225 12.415 5.3425 12.285 5.4725L9.5625 8.1275L10.2075 11.8775C10.2125 11.9125 10.215 11.9625 10.215 12.0275C10.215 12.1325 10.1888 12.2213 10.1363 12.2938C10.0838 12.3663 10.0075 12.4025 9.9075 12.4025C9.8125 12.4025 9.7125 12.3725 9.6075 12.3125L6.24 10.5425L2.8725 12.3125C2.7625 12.3725 2.6625 12.4025 2.5725 12.4025C2.4675 12.4025 2.38875 12.3663 2.33625 12.2938C2.28375 12.2213 2.2575 12.1325 2.2575 12.0275C2.2575 11.9975 2.2625 11.9475 2.2725 11.8775L2.9175 8.1275L0.1875 5.4725C0.0625 5.3375 0 5.2175 0 5.1125C0 4.9275 0.14 4.8125 0.42 4.7675L4.185 4.22L5.8725 0.8075C5.9675 0.6025 6.09 0.5 6.24 0.5C6.39 0.5 6.5125 0.6025 6.6075 0.8075L8.295 4.22L12.06 4.7675C12.34 4.8125 12.48 4.9275 12.48 5.1125Z"
                                              fill="#FFCC00"
                                          />
                                          </g>
                                          <defs>
                                          <clipPath id="clip0_281_205">
                                              <rect
                                              width="12.48"
                                              height="12"
                                              fill="white"
                                              transform="translate(0 0.5)"
                                              />
                                          </clipPath>
                                          </defs>
                                      </svg>
                                  </span>
                                  <span>
                                      <svg
                                          width="13"
                                          height="13"
                                          viewBox="0 0 13 13"
                                          fill="none"
                                          xmlns="http://www.w3.org/2000/svg"
                                      >
                                          <g clip-path="url(#clip0_281_205)">
                                          <path
                                              d="M12.48 5.1125C12.48 5.2225 12.415 5.3425 12.285 5.4725L9.5625 8.1275L10.2075 11.8775C10.2125 11.9125 10.215 11.9625 10.215 12.0275C10.215 12.1325 10.1888 12.2213 10.1363 12.2938C10.0838 12.3663 10.0075 12.4025 9.9075 12.4025C9.8125 12.4025 9.7125 12.3725 9.6075 12.3125L6.24 10.5425L2.8725 12.3125C2.7625 12.3725 2.6625 12.4025 2.5725 12.4025C2.4675 12.4025 2.38875 12.3663 2.33625 12.2938C2.28375 12.2213 2.2575 12.1325 2.2575 12.0275C2.2575 11.9975 2.2625 11.9475 2.2725 11.8775L2.9175 8.1275L0.1875 5.4725C0.0625 5.3375 0 5.2175 0 5.1125C0 4.9275 0.14 4.8125 0.42 4.7675L4.185 4.22L5.8725 0.8075C5.9675 0.6025 6.09 0.5 6.24 0.5C6.39 0.5 6.5125 0.6025 6.6075 0.8075L8.295 4.22L12.06 4.7675C12.34 4.8125 12.48 4.9275 12.48 5.1125Z"
                                              fill="#FFCC00"
                                          />
                                          </g>
                                          <defs>
                                          <clipPath id="clip0_281_205">
                                              <rect
                                              width="12.48"
                                              height="12"
                                              fill="white"
                                              transform="translate(0 0.5)"
                                              />
                                          </clipPath>
                                          </defs>
                                      </svg>
                                  </span>
                                  <span>
                                      <svg
                                          width="13"
                                          height="13"
                                          viewBox="0 0 13 13"
                                          fill="none"
                                          xmlns="http://www.w3.org/2000/svg"
                                      >
                                          <g clip-path="url(#clip0_281_211)">
                                          <path
                                              d="M9.335 7.4375L11.2625 5.5625L8.5925 5.1725L8.0975 5.0975L7.8725 4.6475L6.68 2.2325V9.455L7.1225 9.6875L9.5075 10.9475L9.0575 8.285L8.9675 7.79L9.335 7.4375ZM12.725 5.4725L10.0025 8.1275L10.6475 11.8775C10.6725 12.0425 10.6575 12.1713 10.6025 12.2638C10.5475 12.3563 10.4625 12.4025 10.3475 12.4025C10.2625 12.4025 10.1625 12.3725 10.0475 12.3125L6.68 10.5425L3.3125 12.3125C3.1975 12.3725 3.0975 12.4025 3.0125 12.4025C2.8975 12.4025 2.8125 12.3563 2.7575 12.2638C2.7025 12.1713 2.6875 12.0425 2.7125 11.8775L3.3575 8.1275L0.627503 5.4725C0.467503 5.3125 0.410003 5.16375 0.455003 5.02625C0.500003 4.88875 0.635003 4.8025 0.860003 4.7675L4.625 4.22L6.3125 0.8075C6.4125 0.6025 6.535 0.5 6.68 0.5C6.82 0.5 6.9425 0.6025 7.0475 0.8075L8.735 4.22L12.5 4.7675C12.725 4.8025 12.86 4.88875 12.905 5.02625C12.95 5.16375 12.89 5.3125 12.725 5.4725Z"
                                              fill="#FFCC00"
                                          />
                                          </g>
                                          <defs>
                                          <clipPath id="clip0_281_211">
                                              <rect
                                              width="12.48"
                                              height="12"
                                              fill="white"
                                              transform="translate(0.439941 0.5)"
                                              />
                                          </clipPath>
                                          </defs>
                                      </svg>
                                  </span>
                                  <span>
                                      <svg
                                          width="14"
                                          height="13"
                                          viewBox="0 0 14 13"
                                          fill="none"
                                          xmlns="http://www.w3.org/2000/svg"
                                      >
                                          <g clip-path="url(#clip0_281_213)">
                                          <path
                                              d="M9.44742 7.79L11.7424 5.5625L8.57742 5.0975L7.15992 2.2325L5.74242 5.0975L2.57742 5.5625L4.87242 7.79L4.32492 10.9475L7.15992 9.455L9.98742 10.9475L9.44742 7.79ZM13.3999 5.1125C13.3999 5.2225 13.3349 5.3425 13.2049 5.4725L10.4824 8.1275L11.1274 11.8775C11.1324 11.9125 11.1349 11.9625 11.1349 12.0275C11.1349 12.2775 11.0324 12.4025 10.8274 12.4025C10.7324 12.4025 10.6324 12.3725 10.5274 12.3125L7.15992 10.5425L3.79242 12.3125C3.68242 12.3725 3.58242 12.4025 3.49242 12.4025C3.38742 12.4025 3.30867 12.3663 3.25617 12.2938C3.20367 12.2213 3.17742 12.1325 3.17742 12.0275C3.17742 11.9975 3.18242 11.9475 3.19242 11.8775L3.83742 8.1275L1.10742 5.4725C0.982422 5.3375 0.919922 5.2175 0.919922 5.1125C0.919922 4.9275 1.05992 4.8125 1.33992 4.7675L5.10492 4.22L6.79242 0.8075C6.88742 0.6025 7.00992 0.5 7.15992 0.5C7.30992 0.5 7.43242 0.6025 7.52742 0.8075L9.21492 4.22L12.9799 4.7675C13.2599 4.8125 13.3999 4.9275 13.3999 5.1125Z"
                                              fill="#FFCC00"
                                          />
                                          </g>
                                          <defs>
                                          <clipPath id="clip0_281_213">
                                              <rect
                                              width="12.48"
                                              height="12"
                                              fill="white"
                                              transform="translate(0.919922 0.5)"
                                              />
                                          </clipPath>
                                          </defs>
                                      </svg>
                                  </span>
                              </div>
                              <div class="fs-12 black-color">9.4k sold</div>
                          </div>
                      </div>
                  </a>
                  <a class="cart" href="#"> Add to cart </a>
              </div>
          </div>
          <div class="col-xl-2 col-6 col-lg-3 mb-4 mx-auto">
              <div class="cart-item">
                  <a href="/product" class="text-decoration-none">
                      <div class="image mb-3">
                          <img
                          width="233"
                          height="192"
                          loading="lazy"
                          class="img-fluid"
                          src="/assets/imgs/home/productt-1.webp"
                          alt="Hashems Turkish Coffee 50 Light/50 Dark 16 Oz"
                          />
                      </div>
                      <div class="px-1">
                          <div class="fs-14 black-color mb-3">
                              Turkish Coffee 50 Light/50 Dark 16 Oz
                          </div>
                          <div class="fs-14 black-color fw-bold mb-3">
                              $13.99 - $19.99
                          </div>
                          <div class="d-flex w-100 justify-content-between align-items-center mb-3">
                              <div>
                                  <span>
                                      <svg
                                          width="13"
                                          height="13"
                                          viewBox="0 0 13 13"
                                          fill="none"
                                          xmlns="http://www.w3.org/2000/svg"
                                      >
                                          <g clip-path="url(#clip0_281_205)">
                                          <path
                                              d="M12.48 5.1125C12.48 5.2225 12.415 5.3425 12.285 5.4725L9.5625 8.1275L10.2075 11.8775C10.2125 11.9125 10.215 11.9625 10.215 12.0275C10.215 12.1325 10.1888 12.2213 10.1363 12.2938C10.0838 12.3663 10.0075 12.4025 9.9075 12.4025C9.8125 12.4025 9.7125 12.3725 9.6075 12.3125L6.24 10.5425L2.8725 12.3125C2.7625 12.3725 2.6625 12.4025 2.5725 12.4025C2.4675 12.4025 2.38875 12.3663 2.33625 12.2938C2.28375 12.2213 2.2575 12.1325 2.2575 12.0275C2.2575 11.9975 2.2625 11.9475 2.2725 11.8775L2.9175 8.1275L0.1875 5.4725C0.0625 5.3375 0 5.2175 0 5.1125C0 4.9275 0.14 4.8125 0.42 4.7675L4.185 4.22L5.8725 0.8075C5.9675 0.6025 6.09 0.5 6.24 0.5C6.39 0.5 6.5125 0.6025 6.6075 0.8075L8.295 4.22L12.06 4.7675C12.34 4.8125 12.48 4.9275 12.48 5.1125Z"
                                              fill="#FFCC00"
                                          />
                                          </g>
                                          <defs>
                                          <clipPath id="clip0_281_205">
                                              <rect
                                              width="12.48"
                                              height="12"
                                              fill="white"
                                              transform="translate(0 0.5)"
                                              />
                                          </clipPath>
                                          </defs>
                                      </svg>
                                  </span>
                                  <span>
                                      <svg
                                          width="13"
                                          height="13"
                                          viewBox="0 0 13 13"
                                          fill="none"
                                          xmlns="http://www.w3.org/2000/svg"
                                      >
                                          <g clip-path="url(#clip0_281_205)">
                                          <path
                                              d="M12.48 5.1125C12.48 5.2225 12.415 5.3425 12.285 5.4725L9.5625 8.1275L10.2075 11.8775C10.2125 11.9125 10.215 11.9625 10.215 12.0275C10.215 12.1325 10.1888 12.2213 10.1363 12.2938C10.0838 12.3663 10.0075 12.4025 9.9075 12.4025C9.8125 12.4025 9.7125 12.3725 9.6075 12.3125L6.24 10.5425L2.8725 12.3125C2.7625 12.3725 2.6625 12.4025 2.5725 12.4025C2.4675 12.4025 2.38875 12.3663 2.33625 12.2938C2.28375 12.2213 2.2575 12.1325 2.2575 12.0275C2.2575 11.9975 2.2625 11.9475 2.2725 11.8775L2.9175 8.1275L0.1875 5.4725C0.0625 5.3375 0 5.2175 0 5.1125C0 4.9275 0.14 4.8125 0.42 4.7675L4.185 4.22L5.8725 0.8075C5.9675 0.6025 6.09 0.5 6.24 0.5C6.39 0.5 6.5125 0.6025 6.6075 0.8075L8.295 4.22L12.06 4.7675C12.34 4.8125 12.48 4.9275 12.48 5.1125Z"
                                              fill="#FFCC00"
                                          />
                                          </g>
                                          <defs>
                                          <clipPath id="clip0_281_205">
                                              <rect
                                              width="12.48"
                                              height="12"
                                              fill="white"
                                              transform="translate(0 0.5)"
                                              />
                                          </clipPath>
                                          </defs>
                                      </svg>
                                  </span>
                                  <span>
                                      <svg
                                          width="13"
                                          height="13"
                                          viewBox="0 0 13 13"
                                          fill="none"
                                          xmlns="http://www.w3.org/2000/svg"
                                      >
                                          <g clip-path="url(#clip0_281_205)">
                                          <path
                                              d="M12.48 5.1125C12.48 5.2225 12.415 5.3425 12.285 5.4725L9.5625 8.1275L10.2075 11.8775C10.2125 11.9125 10.215 11.9625 10.215 12.0275C10.215 12.1325 10.1888 12.2213 10.1363 12.2938C10.0838 12.3663 10.0075 12.4025 9.9075 12.4025C9.8125 12.4025 9.7125 12.3725 9.6075 12.3125L6.24 10.5425L2.8725 12.3125C2.7625 12.3725 2.6625 12.4025 2.5725 12.4025C2.4675 12.4025 2.38875 12.3663 2.33625 12.2938C2.28375 12.2213 2.2575 12.1325 2.2575 12.0275C2.2575 11.9975 2.2625 11.9475 2.2725 11.8775L2.9175 8.1275L0.1875 5.4725C0.0625 5.3375 0 5.2175 0 5.1125C0 4.9275 0.14 4.8125 0.42 4.7675L4.185 4.22L5.8725 0.8075C5.9675 0.6025 6.09 0.5 6.24 0.5C6.39 0.5 6.5125 0.6025 6.6075 0.8075L8.295 4.22L12.06 4.7675C12.34 4.8125 12.48 4.9275 12.48 5.1125Z"
                                              fill="#FFCC00"
                                          />
                                          </g>
                                          <defs>
                                          <clipPath id="clip0_281_205">
                                              <rect
                                              width="12.48"
                                              height="12"
                                              fill="white"
                                              transform="translate(0 0.5)"
                                              />
                                          </clipPath>
                                          </defs>
                                      </svg>
                                  </span>
                                  <span>
                                      <svg
                                          width="13"
                                          height="13"
                                          viewBox="0 0 13 13"
                                          fill="none"
                                          xmlns="http://www.w3.org/2000/svg"
                                      >
                                          <g clip-path="url(#clip0_281_211)">
                                          <path
                                              d="M9.335 7.4375L11.2625 5.5625L8.5925 5.1725L8.0975 5.0975L7.8725 4.6475L6.68 2.2325V9.455L7.1225 9.6875L9.5075 10.9475L9.0575 8.285L8.9675 7.79L9.335 7.4375ZM12.725 5.4725L10.0025 8.1275L10.6475 11.8775C10.6725 12.0425 10.6575 12.1713 10.6025 12.2638C10.5475 12.3563 10.4625 12.4025 10.3475 12.4025C10.2625 12.4025 10.1625 12.3725 10.0475 12.3125L6.68 10.5425L3.3125 12.3125C3.1975 12.3725 3.0975 12.4025 3.0125 12.4025C2.8975 12.4025 2.8125 12.3563 2.7575 12.2638C2.7025 12.1713 2.6875 12.0425 2.7125 11.8775L3.3575 8.1275L0.627503 5.4725C0.467503 5.3125 0.410003 5.16375 0.455003 5.02625C0.500003 4.88875 0.635003 4.8025 0.860003 4.7675L4.625 4.22L6.3125 0.8075C6.4125 0.6025 6.535 0.5 6.68 0.5C6.82 0.5 6.9425 0.6025 7.0475 0.8075L8.735 4.22L12.5 4.7675C12.725 4.8025 12.86 4.88875 12.905 5.02625C12.95 5.16375 12.89 5.3125 12.725 5.4725Z"
                                              fill="#FFCC00"
                                          />
                                          </g>
                                          <defs>
                                          <clipPath id="clip0_281_211">
                                              <rect
                                              width="12.48"
                                              height="12"
                                              fill="white"
                                              transform="translate(0.439941 0.5)"
                                              />
                                          </clipPath>
                                          </defs>
                                      </svg>
                                  </span>
                                  <span>
                                      <svg
                                          width="14"
                                          height="13"
                                          viewBox="0 0 14 13"
                                          fill="none"
                                          xmlns="http://www.w3.org/2000/svg"
                                      >
                                          <g clip-path="url(#clip0_281_213)">
                                          <path
                                              d="M9.44742 7.79L11.7424 5.5625L8.57742 5.0975L7.15992 2.2325L5.74242 5.0975L2.57742 5.5625L4.87242 7.79L4.32492 10.9475L7.15992 9.455L9.98742 10.9475L9.44742 7.79ZM13.3999 5.1125C13.3999 5.2225 13.3349 5.3425 13.2049 5.4725L10.4824 8.1275L11.1274 11.8775C11.1324 11.9125 11.1349 11.9625 11.1349 12.0275C11.1349 12.2775 11.0324 12.4025 10.8274 12.4025C10.7324 12.4025 10.6324 12.3725 10.5274 12.3125L7.15992 10.5425L3.79242 12.3125C3.68242 12.3725 3.58242 12.4025 3.49242 12.4025C3.38742 12.4025 3.30867 12.3663 3.25617 12.2938C3.20367 12.2213 3.17742 12.1325 3.17742 12.0275C3.17742 11.9975 3.18242 11.9475 3.19242 11.8775L3.83742 8.1275L1.10742 5.4725C0.982422 5.3375 0.919922 5.2175 0.919922 5.1125C0.919922 4.9275 1.05992 4.8125 1.33992 4.7675L5.10492 4.22L6.79242 0.8075C6.88742 0.6025 7.00992 0.5 7.15992 0.5C7.30992 0.5 7.43242 0.6025 7.52742 0.8075L9.21492 4.22L12.9799 4.7675C13.2599 4.8125 13.3999 4.9275 13.3999 5.1125Z"
                                              fill="#FFCC00"
                                          />
                                          </g>
                                          <defs>
                                          <clipPath id="clip0_281_213">
                                              <rect
                                              width="12.48"
                                              height="12"
                                              fill="white"
                                              transform="translate(0.919922 0.5)"
                                              />
                                          </clipPath>
                                          </defs>
                                      </svg>
                                  </span>
                              </div>
                              <div class="fs-12 black-color">9.4k sold</div>
                          </div>
                      </div>
                  </a>
                  <a class="cart" href="#"> Add to cart </a>
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