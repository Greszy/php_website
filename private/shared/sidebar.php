<form action="<?php echo DOMAIN . '/public/catalog/'; ?>" method="post">
    <h3>Selection</h3>
    <h5>By Liquor</h5>
    <div class="btn-group">
      <button type="submit" class="btn btn-default"  style="width:105px;" name="liquor" value="wine">Wine</button>
      <button type="submit" class="btn btn-default"  style="width:105px;" name="liquor" value="whisky">Whisky</button>
      <button type="submit" class="btn btn-default"  style="width:105px;" name="liquor" value="vodka">Vodka</button>
    </div>
    <h5>By Price</h5>
    <div class="btn-group">
        <button type="submit" class="btn btn-default"  style="width:105px;" name="price" value="range10">under $10</button>
        <button type="submit" class="btn btn-default"  style="width:105px;" name="price" value="range25">$10 - $25</button>
        <button type="submit" class="btn btn-default"  style="width:105px;" name="price" value="range50">$25 - $50</button>
        <button type="submit" class="btn btn-default"  style="width:105px;" name="price" value="range75">$50 - $75</button>
        <button type="submit" class="btn btn-default"  style="width:105px;" name="price" value="range100">$75 - $100</button>
        <button type="submit" class="btn btn-default"  style="width:105px;" name="price" value="range101">over $100</button>
    </div>
    <h5>By Country</h5>
    <div class="btn-group">
        <button type="submit" class="btn btn-default" style="width:105px;" name="country" value="Italy">Italy</button>
        <button type="submit" class="btn btn-default" style="width:105px;" name="country" value="Poland">Poland</button>
        <button type="submit" class="btn btn-default" style="width:105px;" name="country" value="Sweden">Sweden</button>
        <button type="submit" class="btn btn-default" style="width:105px;" name="country" value="USA">USA</button>
    </div>
</form>