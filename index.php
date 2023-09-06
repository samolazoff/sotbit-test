<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./dist/output.css" rel="stylesheet">
    <title>Test</title>
</head>
<body>
    <div class="conatiner app">
        <header class="app-header text-right mx-auto xl:w-3/4 bg-blue-500 px-5 text-white text-3xl mb-10">
            <h1 class="logo py-2">Test</h1>
        </header>
        <main class="app-main flex mx-auto xl:w-3/4">
            <section class="app-filters xl:w-1/4">
                <h2 class="title_section text-3xl text-center">Filters</h2>
                <form method="post" class="form-filter">
                    <div class="input-wrap flex flex-col mb-2">
                        <label for="fullArcticle" class="mb-2">Arcticle</label>
                        <input type="text" name="fullArcticle" id="fullArcticle" class="border w-3/4">
                    </div>
                    <div class="input-wrap flex flex-col mb-2">
                        <label for="firstArcticle" class="mb-2">The first simbols of article</label>
                        <input type="text" name="firstArcticle" id="firstArcticle" class="border w-3/4">
                    </div>
                    <div class="input-wrap flex flex-col mb-2">
                        <label for="lastArcticle" class="mb-2">The last simbols of article</label>
                        <input type="text" name="lastArcticle" id="lastArcticle" class="border w-3/4">
                    </div>
                    <div class="input-wrap flex flex-col mb-2">
                        <label for="moreArcticle" class="mb-2">More article</label>
                        <input type="text" name="moreArcticle" id="moretArcticle" class="border w-3/4">
                    </div>
                    <div class="input-wrap flex flex-col mb-2">
                        <label for="lessArcticle" class="mb-2">Less article</label>
                        <input type="text" name="lessArcticle" id="lesstArcticle" class="border w-3/4">
                    </div>
                    <div class="input-wrap flex flex-col mb-2">
                        <label for="nameProduct" class="mb-2">Name Product</label>
                        <input type="text" name="nameProduct" id="nameProduct" class="border w-3/4">
                    </div>
                    <div class="input-wrap flex flex-col mb-2">
                        <label for="priceProduct" class="mb-2">Price</label>
                        <input type="number" name="priceProduct" id="priceProduct" class="border w-3/4">
                    </div>
                    <div class="input-wrap flex flex-col mb-2">
                        <label for="minPriceProduct" class="mb-2">Min Price</label>
                        <input type="number" name="minPriceeProduct" id="minPriceProduct" class="border w-3/4">
                    </div>
                    <div class="input-wrap flex flex-col mb-2">
                        <label for="maxPriceProduct" class="mb-2">Max Price</label>
                        <input type="number" name="maxPriceeProduct" id="maxPriceProduct" class="border w-3/4">
                    </div>
                    <div class="input-wrap flex flex-col mb-2">
                        <label for="minBalanceProduct" class="mb-2">Min Balance</label>
                        <input type="number" name="minBalanceProduct" id="minBalanceProduct" class="border w-3/4">
                    </div>
                    <div class="input-wrap flex flex-col mb-2">
                        <label for="maxBalanceProduct" class="mb-2">Max Balance</label>
                        <input type="number" name="maxBalanceProduct" id="maxBalanceProduct" class="border w-3/4">
                    </div>
                    <button type="submit">Parsing</button>
                </form>
            </section>
            <section class="app-visible-db xl:w-3/4 ">
                <h2 class="title_section text-3xl text-center">Data Base</h2>
                <table class="w-full mt-5">
                    <thead>
                        <tr>
                            <th class="border bg-blue-200">Article</th>
                            <th class="border bg-blue-200">Name</th>
                            <th class="border bg-blue-200">Price</th>
                            <th class="border bg-blue-200">Balance</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border text-center">586786748</td>
                            <td class="border text-center">CORDIANT_SNOW_CROSS, PW-2 75Q б/к ОШ</td>
                            <td class="border text-center">2153</td>
                            <td class="border text-center">8</td>
                        </tr>
                    </tbody>
                </table>
            </section>
        </main>
    </div>
</body>
</html>