<form method="post" class="form-parser w-25 d-flex flex-column justify-content-start align-items-center gap-1 mb-5">
    <div class="input-wrap d-flex flex-column justify-content-start align-items-start gap-1">
        <label for="fullArticle" >Arcticle</label>
        <input type="text" name="fullArticle" id="fullArticle">
    </div>
    <div class="input-wrap d-flex flex-column justify-content-start align-items-start gap-1">
        <label for="firstArcticle" class="mb-2">The first simbols of article</label>
        <input type="text" name="firstArcticle" id="firstArcticle" >
    </div>
    <div class="input-wrap d-flex flex-column justify-content-start align-items-start gap-1">
        <label for="lastArcticle" class="mb-2">The last simbols of article</label>
        <input type="text" name="lastArcticle" id="lastArcticle" >
    </div>
    <div class="input-wrap d-flex flex-column justify-content-start align-items-start gap-1">
        <label for="nameProduct" class="mb-2">Name Product</label>
        <input type="text" name="nameProduct" id="nameProduct">
    </div>
    <div class="input-wrap d-flex flex-column justify-content-start align-items-start gap-1">
        <label for="minPriceProduct" class="mb-2">Min Price</label>
        <input type="number" name="minPriceeProduct" id="minPriceProduct" min="0" max="1000000">
    </div>
    <div class="input-wrap d-flex flex-column justify-content-start align-items-start gap-1">
        <label for="maxPriceProduct" class="mb-2">Max Price</label>
        <input type="number" name="maxPriceeProduct" id="maxPriceProduct" min="0" max="10000000">
    </div>
    <div class="input-wrap d-flex flex-column justify-content-start align-items-start gap-1">
        <label for="minBalanceProduct" class="mb-2">Min Balance</label>
        <input type="number" name="minBalanceProduct" id="minBalanceProduct" min="0" max="1000000">
    </div>
    <div class="input-wrap d-flex flex-column justify-content-start align-items-start gap-1">
        <label for="maxBalanceProduct" class="mb-2">Max Balance</label>
        <input type="number" name="maxBalanceProduct" id="maxBalanceProduct" min="0" max="1000000">
    </div>
    <button type="submit" class="btn btn-primary btn-submit">Parsing</button>
</form>