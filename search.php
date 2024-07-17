<?php include './include/header.php'; ?>
<title>Hashems - search keyword</title>
  </head>
  <body>
  <?php include './include/menu.php'; ?>

    <section class="py-5 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3 mb-4 mb-md-0">
                    <div class="pe-0 pe-md-3">
                        <form action="#" method="#">
                            <div class="fs-24 black-color fw-600 mb-3">Search filter</div>
                            <div class="mb-4 search-input-wrapper">
                                <span class="icon">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M17 17L21 21M3 11C3 13.1217 3.84285 15.1566 5.34315 16.6569C6.84344 18.1571 8.87827 19 11 19C13.1217 19 15.1566 18.1571 16.6569 16.6569C18.1571 15.1566 19 13.1217 19 11C19 8.87827 18.1571 6.84344 16.6569 5.34315C15.1566 3.84285 13.1217 3 11 3C8.87827 3 6.84344 3.84285 5.34315 5.34315C3.84285 6.84344 3 8.87827 3 11Z" stroke="#737373" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </span>
                                <input type="text" placeholder="search keyword">
                            </div>
                            <div class="fs-24 black-color fw-600 mb-3">Filter By</div>
                            <hr class="opacity-100">
                            <div class="accordion" id="accordionFilter">
                                <div class="accordion-item mb-0">
                                    <div class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        Diets & ingredients
                                        </button>
                                    </div>
                                    <div id="collapseFive" class="accordion-collapse collapse show">
                                        <div class="accordion-body">
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="Sulfite-free">
                                                <label class="form-check-label" for="Sulfite-free">
                                                Sulfite-free (35)
                                                </label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="Vegan">
                                                <label class="form-check-label" for="Vegan">
                                                Vegan (24)
                                                </label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="Sugar-free">
                                                <label class="form-check-label" for="Sugar-free">
                                                Sugar-free (23)
                                                </label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="Kosher-Dairy">
                                                <label class="form-check-label" for="Kosher-Dairy">
                                                Kosher Dairy (12)
                                                </label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="Gluten-free">
                                                <label class="form-check-label" for="Gluten-free">
                                                Gluten-free (18)
                                                </label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="Kosher-Pareve">
                                                <label class="form-check-label" for="Kosher-Pareve">
                                                Kosher Pareve (16)
                                                </label>
                                            </div>
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" value="" id="Certified-Gluten-free">
                                                <label class="form-check-label" for="Certified-Gluten-free">
                                                Certified Gluten-free (3)
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="opacity-100">
                                <div class="accordion-item mb-0">
                                    <div class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Category
                                        </button>
                                    </div>
                                    <div id="collapseTwo" class="accordion-collapse collapse show">
                                        <div class="accordion-body">
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="Coffee">
                                                <label class="form-check-label" for="Coffee">
                                                Coffee (70)
                                                </label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="Tea">
                                                <label class="form-check-label" for="Tea">
                                                Tea (40)
                                                </label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="Drink-Powders">
                                                <label class="form-check-label" for="Drink-Powders">
                                                Drink Powders (16)
                                                </label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="Chocolate-Covered">
                                                <label class="form-check-label" for="Chocolate-Covered">
                                                Chocolate-Covered Espresso Beans (15)
                                                </label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="Chocolates">
                                                <label class="form-check-label" for="Chocolates">
                                                Chocolates (15)
                                                </label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="Bubble-Tea">
                                                <label class="form-check-label" for="Bubble-Tea">
                                                Bubble Tea (13)
                                                </label>
                                            </div>
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" value="" id="Nuts-Plant">
                                                <label class="form-check-label" for="Nuts-Plant">
                                                Nuts & Plant Based Milk (6)
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="opacity-100">
                                <div class="accordion-item mb-0">
                                    <div class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                        Type
                                        </button>
                                    </div>
                                    <div id="collapseSix" class="accordion-collapse collapse show">
                                        <div class="accordion-body">
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="Caffeinated">
                                                <label class="form-check-label" for="Caffeinated">
                                                Caffeinated (33)
                                                </label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="Whole-Bean">
                                                <label class="form-check-label" for="Whole-Bean">
                                                Whole Bean (65)
                                                </label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="Ground">
                                                <label class="form-check-label" for="Ground">
                                                Ground (64)
                                                </label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="Chocolate-Covered-1">
                                                <label class="form-check-label" for="Chocolate-Covered-1">
                                                Chocolate Covered (25)
                                                </label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="Loose-Tea">
                                                <label class="form-check-label" for="Loose-Tea">
                                                Loose Tea (22)
                                                </label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="Decaf">
                                                <label class="form-check-label" for="Decaf">
                                                Decaf (15)
                                                </label>
                                            </div>
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" value="" id="Candied-Nuts">
                                                <label class="form-check-label" for="Candied-Nuts">
                                                Candied Nuts (5)
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="opacity-100">
                                <div class="accordion-item mb-0">
                                    <div class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                        Size
                                        </button>
                                    </div>
                                    <div id="collapseSeven" class="accordion-collapse collapse">
                                        <div class="accordion-body">
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="Caffeinated">
                                                <label class="form-check-label" for="Caffeinated">
                                                Caffeinated (33)
                                                </label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="Whole-Bean">
                                                <label class="form-check-label" for="Whole-Bean">
                                                Whole Bean (65)
                                                </label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="Ground">
                                                <label class="form-check-label" for="Ground">
                                                Ground (64)
                                                </label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="Chocolate-Covered-1">
                                                <label class="form-check-label" for="Chocolate-Covered-1">
                                                Chocolate Covered (25)
                                                </label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="Loose-Tea">
                                                <label class="form-check-label" for="Loose-Tea">
                                                Loose Tea (22)
                                                </label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="Decaf">
                                                <label class="form-check-label" for="Decaf">
                                                Decaf (15)
                                                </label>
                                            </div>
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" value="" id="Candied-Nuts">
                                                <label class="form-check-label" for="Candied-Nuts">
                                                Candied Nuts (5)
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="opacity-100">
                                <div class="accordion-item mb-0">
                                    <div class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                        Roast
                                        </button>
                                    </div>
                                    <div id="collapseEight" class="accordion-collapse collapse">
                                        <div class="accordion-body">
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="Caffeinated">
                                                <label class="form-check-label" for="Caffeinated">
                                                Caffeinated (33)
                                                </label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="Whole-Bean">
                                                <label class="form-check-label" for="Whole-Bean">
                                                Whole Bean (65)
                                                </label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="Ground">
                                                <label class="form-check-label" for="Ground">
                                                Ground (64)
                                                </label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="Chocolate-Covered-1">
                                                <label class="form-check-label" for="Chocolate-Covered-1">
                                                Chocolate Covered (25)
                                                </label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="Loose-Tea">
                                                <label class="form-check-label" for="Loose-Tea">
                                                Loose Tea (22)
                                                </label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="Decaf">
                                                <label class="form-check-label" for="Decaf">
                                                Decaf (15)
                                                </label>
                                            </div>
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" value="" id="Candied-Nuts">
                                                <label class="form-check-label" for="Candied-Nuts">
                                                Candied Nuts (5)
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="opacity-100">
                                <div class="accordion-item mb-0">
                                    <div class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                        Chocolate Type
                                        </button>
                                    </div>
                                    <div id="collapseNine" class="accordion-collapse collapse">
                                        <div class="accordion-body">
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="Caffeinated">
                                                <label class="form-check-label" for="Caffeinated">
                                                Caffeinated (33)
                                                </label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="Whole-Bean">
                                                <label class="form-check-label" for="Whole-Bean">
                                                Whole Bean (65)
                                                </label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="Ground">
                                                <label class="form-check-label" for="Ground">
                                                Ground (64)
                                                </label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="Chocolate-Covered-1">
                                                <label class="form-check-label" for="Chocolate-Covered-1">
                                                Chocolate Covered (25)
                                                </label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="Loose-Tea">
                                                <label class="form-check-label" for="Loose-Tea">
                                                Loose Tea (22)
                                                </label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="Decaf">
                                                <label class="form-check-label" for="Decaf">
                                                Decaf (15)
                                                </label>
                                            </div>
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" value="" id="Candied-Nuts">
                                                <label class="form-check-label" for="Candied-Nuts">
                                                Candied Nuts (5)
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="opacity-100">
                                <div class="accordion-item mb-0">
                                    <div class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                        Flavor
                                        </button>
                                    </div>
                                    <div id="collapseTen" class="accordion-collapse collapse">
                                        <div class="accordion-body">
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="Caffeinated">
                                                <label class="form-check-label" for="Caffeinated">
                                                Caffeinated (33)
                                                </label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="Whole-Bean">
                                                <label class="form-check-label" for="Whole-Bean">
                                                Whole Bean (65)
                                                </label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="Ground">
                                                <label class="form-check-label" for="Ground">
                                                Ground (64)
                                                </label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="Chocolate-Covered-1">
                                                <label class="form-check-label" for="Chocolate-Covered-1">
                                                Chocolate Covered (25)
                                                </label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="Loose-Tea">
                                                <label class="form-check-label" for="Loose-Tea">
                                                Loose Tea (22)
                                                </label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="Decaf">
                                                <label class="form-check-label" for="Decaf">
                                                Decaf (15)
                                                </label>
                                            </div>
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" value="" id="Candied-Nuts">
                                                <label class="form-check-label" for="Candied-Nuts">
                                                Candied Nuts (5)
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="opacity-100">
                                <div class="accordion-item mb-0">
                                    <div class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                                        Color
                                        </button>
                                    </div>
                                    <div id="collapseEleven" class="accordion-collapse collapse">
                                        <div class="accordion-body">
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="Caffeinated">
                                                <label class="form-check-label" for="Caffeinated">
                                                Caffeinated (33)
                                                </label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="Whole-Bean">
                                                <label class="form-check-label" for="Whole-Bean">
                                                Whole Bean (65)
                                                </label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="Ground">
                                                <label class="form-check-label" for="Ground">
                                                Ground (64)
                                                </label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="Chocolate-Covered-1">
                                                <label class="form-check-label" for="Chocolate-Covered-1">
                                                Chocolate Covered (25)
                                                </label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="Loose-Tea">
                                                <label class="form-check-label" for="Loose-Tea">
                                                Loose Tea (22)
                                                </label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" value="" id="Decaf">
                                                <label class="form-check-label" for="Decaf">
                                                Decaf (15)
                                                </label>
                                            </div>
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" value="" id="Candied-Nuts">
                                                <label class="form-check-label" for="Candied-Nuts">
                                                Candied Nuts (5)
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="opacity-100">
                                <div class="accordion-item">
                                    <div class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Availability
                                        </button>
                                    </div>
                                    <div id="collapseThree" class="accordion-collapse collapse show">
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
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-9">
                    <div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="fs-24 black-color fw-600">Search results for <span class="green-color">"search keyword"</span></div>
                            <div>
                                <a class="text-decoration-none fs-16 green-color" href="#">
                                Explore recipes >>
                                </a>
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
        </div>
    </section>

    <section class="py-5">
        <div class="container mt-4">
            <div>
                <h5 class="fs-24 black-color fw-600 d-flex align-items-center">
                    <span>Top Recipes</span>
                    <a class="fs-14 green-color ms-5 text-decoration-none" href="#"
                    >Explore recipes >>
                    </a>
                </h5>
            </div>
            <div class="row mt-4">
                <div class="col-xl-3 col-lg-6 mb-5">
                    <a href="#" class="text-decoration-none">
                    <div class="top-item">
                        <div class="image mb-3">
                        <img
                            width="362"
                            height="215"
                            loading="lazy"
                            class="img-fluid"
                            src="/assets/imgs/home/bread-1.webp"
                            alt="Hashems Roasted Vegetable Baked Falafel Sandwiches"
                        />
                        </div>
                        <div class="d-flex justify-content-between  px-1 pb-2">
                            <div class="fs-14 gray-color-2 line-h-normal">
                                <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10 18.9375C8.26942 18.9375 6.57769 18.4243 5.13876 17.4629C3.69983 16.5014 2.57832 15.1348 1.91606 13.536C1.25379 11.9371 1.08051 10.1778 1.41813 8.48046C1.75575 6.78313 2.58911 5.22403 3.81282 4.00032C5.03653 2.77661 6.59563 1.94325 8.29296 1.60563C9.9903 1.26801 11.7496 1.44129 13.3485 2.10356C14.9473 2.76582 16.3139 3.88733 17.2754 5.32626C18.2368 6.76519 18.75 8.45692 18.75 10.1875C18.75 12.5081 17.8281 14.7337 16.1872 16.3747C14.5462 18.0156 12.3206 18.9375 10 18.9375ZM10 2.6875C8.51664 2.6875 7.0666 3.12737 5.83323 3.95148C4.59986 4.77559 3.63856 5.94693 3.07091 7.31738C2.50325 8.68782 2.35473 10.1958 2.64411 11.6507C2.9335 13.1055 3.64781 14.4419 4.6967 15.4908C5.7456 16.5397 7.08197 17.254 8.53683 17.5434C9.99168 17.8328 11.4997 17.6843 12.8701 17.1166C14.2406 16.5489 15.4119 15.5876 16.236 14.3543C17.0601 13.1209 17.5 11.6709 17.5 10.1875C17.5 8.19838 16.7098 6.29073 15.3033 4.8842C13.8968 3.47768 11.9891 2.6875 10 2.6875Z" fill="#494949"/>
                                    <path d="M12.8688 13.9375L9.375 10.4437V4.5625H10.625V9.925L13.75 13.0562L12.8688 13.9375Z" fill="#494949"/>
                                </svg>
                                    30 mins 
                            </div>
                            <div class="fs-14 gray-color-2 line-h-normal">
                                <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.5275 8.72949C6.19917 8.72949 6.805 8.35783 7.22 7.82949C7.86688 7.00417 8.67893 6.32298 9.60417 5.82949C10.2067 5.50949 10.7292 5.03283 10.9817 4.40033C11.159 3.9572 11.2501 3.48428 11.25 3.00699V2.47949C11.25 2.31373 11.3159 2.15476 11.4331 2.03755C11.5503 1.92034 11.7092 1.85449 11.875 1.85449C12.3723 1.85449 12.8492 2.05204 13.2008 2.40367C13.5525 2.7553 13.75 3.23221 13.75 3.72949C13.75 4.68949 13.5333 5.59866 13.1475 6.41116C12.9258 6.87616 13.2367 7.47949 13.7517 7.47949M13.7517 7.47949H16.3567C17.2117 7.47949 17.9775 8.05783 18.0683 8.90866C18.1058 9.26033 18.125 9.61699 18.125 9.97949C18.1284 12.2598 17.3492 14.4722 15.9175 16.247C15.5942 16.6487 15.095 16.8545 14.58 16.8545H11.2333C10.8304 16.8543 10.43 16.7896 10.0475 16.6628L7.4525 15.7962C7.07009 15.669 6.66968 15.6043 6.26667 15.6045H4.92C4.98917 15.7753 5.06417 15.942 5.145 16.1062C5.30917 16.4395 5.08 16.8545 4.70917 16.8545H3.9525C3.21167 16.8545 2.525 16.4228 2.30917 15.7145C2.02054 14.7672 1.87422 13.7823 1.875 12.792C1.875 11.4978 2.12084 10.262 2.5675 9.12699C2.8225 8.48199 3.4725 8.10449 4.16667 8.10449H5.04417C5.4375 8.10449 5.665 8.56783 5.46084 8.90449C4.74908 10.0761 4.37369 11.4211 4.37584 12.792C4.37447 13.7559 4.55954 14.7109 4.92084 15.6045M13.7517 7.47949H11.875" stroke="#494949" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                    Beginner
                            </div>
                        </div>
                        <div class="px-1">
                            <div class="fs-16 fw-600 black-color line-h-normal">
                                Roasted Vegetable Baked Falafel Sandwiches
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-xl-3 col-lg-6 mb-5">
                    <a href="#" class="text-decoration-none">
                    <div class="top-item">
                        <div class="image mb-3">
                        <img
                            width="362"
                            height="215"
                            loading="lazy"
                            class="img-fluid"
                            src="/assets/imgs/home/falafel.webp"
                            alt="Hashems Herby Baked Falafel Bites with Spicy Mint Tahini Dip"
                        />
                        </div>
                        <div class="px-1 d-flex justify-content-between pb-2">
                            <div class="fs-14 gray-color-2 line-h-normal">
                                <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10 18.9375C8.26942 18.9375 6.57769 18.4243 5.13876 17.4629C3.69983 16.5014 2.57832 15.1348 1.91606 13.536C1.25379 11.9371 1.08051 10.1778 1.41813 8.48046C1.75575 6.78313 2.58911 5.22403 3.81282 4.00032C5.03653 2.77661 6.59563 1.94325 8.29296 1.60563C9.9903 1.26801 11.7496 1.44129 13.3485 2.10356C14.9473 2.76582 16.3139 3.88733 17.2754 5.32626C18.2368 6.76519 18.75 8.45692 18.75 10.1875C18.75 12.5081 17.8281 14.7337 16.1872 16.3747C14.5462 18.0156 12.3206 18.9375 10 18.9375ZM10 2.6875C8.51664 2.6875 7.0666 3.12737 5.83323 3.95148C4.59986 4.77559 3.63856 5.94693 3.07091 7.31738C2.50325 8.68782 2.35473 10.1958 2.64411 11.6507C2.9335 13.1055 3.64781 14.4419 4.6967 15.4908C5.7456 16.5397 7.08197 17.254 8.53683 17.5434C9.99168 17.8328 11.4997 17.6843 12.8701 17.1166C14.2406 16.5489 15.4119 15.5876 16.236 14.3543C17.0601 13.1209 17.5 11.6709 17.5 10.1875C17.5 8.19838 16.7098 6.29073 15.3033 4.8842C13.8968 3.47768 11.9891 2.6875 10 2.6875Z" fill="#494949"/>
                                    <path d="M12.8688 13.9375L9.375 10.4437V4.5625H10.625V9.925L13.75 13.0562L12.8688 13.9375Z" fill="#494949"/>
                                </svg>
                                    60 mins 
                            </div>
                            <div class="fs-14 gray-color-2 line-h-normal">
                                <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.5275 8.72949C6.19917 8.72949 6.805 8.35783 7.22 7.82949C7.86688 7.00417 8.67893 6.32298 9.60417 5.82949C10.2067 5.50949 10.7292 5.03283 10.9817 4.40033C11.159 3.9572 11.2501 3.48428 11.25 3.00699V2.47949C11.25 2.31373 11.3159 2.15476 11.4331 2.03755C11.5503 1.92034 11.7092 1.85449 11.875 1.85449C12.3723 1.85449 12.8492 2.05204 13.2008 2.40367C13.5525 2.7553 13.75 3.23221 13.75 3.72949C13.75 4.68949 13.5333 5.59866 13.1475 6.41116C12.9258 6.87616 13.2367 7.47949 13.7517 7.47949M13.7517 7.47949H16.3567C17.2117 7.47949 17.9775 8.05783 18.0683 8.90866C18.1058 9.26033 18.125 9.61699 18.125 9.97949C18.1284 12.2598 17.3492 14.4722 15.9175 16.247C15.5942 16.6487 15.095 16.8545 14.58 16.8545H11.2333C10.8304 16.8543 10.43 16.7896 10.0475 16.6628L7.4525 15.7962C7.07009 15.669 6.66968 15.6043 6.26667 15.6045H4.92C4.98917 15.7753 5.06417 15.942 5.145 16.1062C5.30917 16.4395 5.08 16.8545 4.70917 16.8545H3.9525C3.21167 16.8545 2.525 16.4228 2.30917 15.7145C2.02054 14.7672 1.87422 13.7823 1.875 12.792C1.875 11.4978 2.12084 10.262 2.5675 9.12699C2.8225 8.48199 3.4725 8.10449 4.16667 8.10449H5.04417C5.4375 8.10449 5.665 8.56783 5.46084 8.90449C4.74908 10.0761 4.37369 11.4211 4.37584 12.792C4.37447 13.7559 4.55954 14.7109 4.92084 15.6045M13.7517 7.47949H11.875" stroke="#494949" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                    Intermediate
                            </div>
                        </div>
                        <div class="px-1">
                            <div class="fs-16 fw-600 black-color line-h-normal">
                                Herby Baked Falafel Bites with Spicy Mint Tahini Dip
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-xl-3 col-lg-6 mb-5">
                    <a href="#" class="text-decoration-none">
                    <div class="top-item">
                        <div class="image mb-3">
                        <img
                            width="362"
                            height="215"
                            loading="lazy"
                            class="img-fluid"
                            src="/assets/imgs/home/bread-2.webp"
                            alt="Hashems Grilled Eggplant And Zucchini Sabich Pita"
                        />
                        </div>
                        <div class="px-1 d-flex justify-content-between  pb-2">
                            <div class="fs-14 gray-color-2 line-h-normal">
                                <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10 18.9375C8.26942 18.9375 6.57769 18.4243 5.13876 17.4629C3.69983 16.5014 2.57832 15.1348 1.91606 13.536C1.25379 11.9371 1.08051 10.1778 1.41813 8.48046C1.75575 6.78313 2.58911 5.22403 3.81282 4.00032C5.03653 2.77661 6.59563 1.94325 8.29296 1.60563C9.9903 1.26801 11.7496 1.44129 13.3485 2.10356C14.9473 2.76582 16.3139 3.88733 17.2754 5.32626C18.2368 6.76519 18.75 8.45692 18.75 10.1875C18.75 12.5081 17.8281 14.7337 16.1872 16.3747C14.5462 18.0156 12.3206 18.9375 10 18.9375ZM10 2.6875C8.51664 2.6875 7.0666 3.12737 5.83323 3.95148C4.59986 4.77559 3.63856 5.94693 3.07091 7.31738C2.50325 8.68782 2.35473 10.1958 2.64411 11.6507C2.9335 13.1055 3.64781 14.4419 4.6967 15.4908C5.7456 16.5397 7.08197 17.254 8.53683 17.5434C9.99168 17.8328 11.4997 17.6843 12.8701 17.1166C14.2406 16.5489 15.4119 15.5876 16.236 14.3543C17.0601 13.1209 17.5 11.6709 17.5 10.1875C17.5 8.19838 16.7098 6.29073 15.3033 4.8842C13.8968 3.47768 11.9891 2.6875 10 2.6875Z" fill="#494949"/>
                                    <path d="M12.8688 13.9375L9.375 10.4437V4.5625H10.625V9.925L13.75 13.0562L12.8688 13.9375Z" fill="#494949"/>
                                </svg>
                                    30 mins 
                            </div>
                            <div class="fs-14 gray-color-2 line-h-normal">
                                <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.5275 8.72949C6.19917 8.72949 6.805 8.35783 7.22 7.82949C7.86688 7.00417 8.67893 6.32298 9.60417 5.82949C10.2067 5.50949 10.7292 5.03283 10.9817 4.40033C11.159 3.9572 11.2501 3.48428 11.25 3.00699V2.47949C11.25 2.31373 11.3159 2.15476 11.4331 2.03755C11.5503 1.92034 11.7092 1.85449 11.875 1.85449C12.3723 1.85449 12.8492 2.05204 13.2008 2.40367C13.5525 2.7553 13.75 3.23221 13.75 3.72949C13.75 4.68949 13.5333 5.59866 13.1475 6.41116C12.9258 6.87616 13.2367 7.47949 13.7517 7.47949M13.7517 7.47949H16.3567C17.2117 7.47949 17.9775 8.05783 18.0683 8.90866C18.1058 9.26033 18.125 9.61699 18.125 9.97949C18.1284 12.2598 17.3492 14.4722 15.9175 16.247C15.5942 16.6487 15.095 16.8545 14.58 16.8545H11.2333C10.8304 16.8543 10.43 16.7896 10.0475 16.6628L7.4525 15.7962C7.07009 15.669 6.66968 15.6043 6.26667 15.6045H4.92C4.98917 15.7753 5.06417 15.942 5.145 16.1062C5.30917 16.4395 5.08 16.8545 4.70917 16.8545H3.9525C3.21167 16.8545 2.525 16.4228 2.30917 15.7145C2.02054 14.7672 1.87422 13.7823 1.875 12.792C1.875 11.4978 2.12084 10.262 2.5675 9.12699C2.8225 8.48199 3.4725 8.10449 4.16667 8.10449H5.04417C5.4375 8.10449 5.665 8.56783 5.46084 8.90449C4.74908 10.0761 4.37369 11.4211 4.37584 12.792C4.37447 13.7559 4.55954 14.7109 4.92084 15.6045M13.7517 7.47949H11.875" stroke="#494949" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                    Beginner
                            </div>
                        </div>
                        <div class="px-1">
                            <div class="fs-16 fw-600 black-color line-h-normal">
                                Grilled Eggplant And Zucchini Sabich Pita
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-xl-3 col-lg-6 mb-5">
                    <a href="#" class="text-decoration-none">
                    <div class="top-item">
                        <div class="image mb-3">
                        <img
                            width="362"
                            height="215"
                            loading="lazy"
                            class="img-fluid"
                            src="/assets/imgs/home/meat-1.webp"
                            alt="Hashems Grilled Lamb Skewers with Couscous Tabbouleh"
                        />
                        </div>
                        <div class="px-1 d-flex justify-content-between  pb-2">
                            <div class="fs-14 gray-color-2 line-h-normal">
                                <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10 18.9375C8.26942 18.9375 6.57769 18.4243 5.13876 17.4629C3.69983 16.5014 2.57832 15.1348 1.91606 13.536C1.25379 11.9371 1.08051 10.1778 1.41813 8.48046C1.75575 6.78313 2.58911 5.22403 3.81282 4.00032C5.03653 2.77661 6.59563 1.94325 8.29296 1.60563C9.9903 1.26801 11.7496 1.44129 13.3485 2.10356C14.9473 2.76582 16.3139 3.88733 17.2754 5.32626C18.2368 6.76519 18.75 8.45692 18.75 10.1875C18.75 12.5081 17.8281 14.7337 16.1872 16.3747C14.5462 18.0156 12.3206 18.9375 10 18.9375ZM10 2.6875C8.51664 2.6875 7.0666 3.12737 5.83323 3.95148C4.59986 4.77559 3.63856 5.94693 3.07091 7.31738C2.50325 8.68782 2.35473 10.1958 2.64411 11.6507C2.9335 13.1055 3.64781 14.4419 4.6967 15.4908C5.7456 16.5397 7.08197 17.254 8.53683 17.5434C9.99168 17.8328 11.4997 17.6843 12.8701 17.1166C14.2406 16.5489 15.4119 15.5876 16.236 14.3543C17.0601 13.1209 17.5 11.6709 17.5 10.1875C17.5 8.19838 16.7098 6.29073 15.3033 4.8842C13.8968 3.47768 11.9891 2.6875 10 2.6875Z" fill="#494949"/>
                                    <path d="M12.8688 13.9375L9.375 10.4437V4.5625H10.625V9.925L13.75 13.0562L12.8688 13.9375Z" fill="#494949"/>
                                </svg>
                                    1 hr 15 mins 
                            </div>
                            <div class="fs-14 gray-color-2 line-h-normal">
                                <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.5275 8.72949C6.19917 8.72949 6.805 8.35783 7.22 7.82949C7.86688 7.00417 8.67893 6.32298 9.60417 5.82949C10.2067 5.50949 10.7292 5.03283 10.9817 4.40033C11.159 3.9572 11.2501 3.48428 11.25 3.00699V2.47949C11.25 2.31373 11.3159 2.15476 11.4331 2.03755C11.5503 1.92034 11.7092 1.85449 11.875 1.85449C12.3723 1.85449 12.8492 2.05204 13.2008 2.40367C13.5525 2.7553 13.75 3.23221 13.75 3.72949C13.75 4.68949 13.5333 5.59866 13.1475 6.41116C12.9258 6.87616 13.2367 7.47949 13.7517 7.47949M13.7517 7.47949H16.3567C17.2117 7.47949 17.9775 8.05783 18.0683 8.90866C18.1058 9.26033 18.125 9.61699 18.125 9.97949C18.1284 12.2598 17.3492 14.4722 15.9175 16.247C15.5942 16.6487 15.095 16.8545 14.58 16.8545H11.2333C10.8304 16.8543 10.43 16.7896 10.0475 16.6628L7.4525 15.7962C7.07009 15.669 6.66968 15.6043 6.26667 15.6045H4.92C4.98917 15.7753 5.06417 15.942 5.145 16.1062C5.30917 16.4395 5.08 16.8545 4.70917 16.8545H3.9525C3.21167 16.8545 2.525 16.4228 2.30917 15.7145C2.02054 14.7672 1.87422 13.7823 1.875 12.792C1.875 11.4978 2.12084 10.262 2.5675 9.12699C2.8225 8.48199 3.4725 8.10449 4.16667 8.10449H5.04417C5.4375 8.10449 5.665 8.56783 5.46084 8.90449C4.74908 10.0761 4.37369 11.4211 4.37584 12.792C4.37447 13.7559 4.55954 14.7109 4.92084 15.6045M13.7517 7.47949H11.875" stroke="#494949" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                    Intermediate
                            </div>
                        </div>
                        <div class="px-1">
                            <div class="fs-16 fw-600 black-color line-h-normal">
                                Grilled Lamb Skewers with Couscous Tabbouleh
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
  
  <?php include './include/footer.php'; ?>

<script src="/assets/js/bootstrap.bundle.min.js" defer></script>
<script src="/assets/js/script.js" defer></script>
</body>
</html>