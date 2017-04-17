                    <form action="index.php" method="post">
                      <div><h4><br/>Select</h4></div>   
                      
                      <div><h5>Liquor: </h5></div>
                      <div><h5><select  name= "liquor">
                          <option <?php if( strcmp($liquor , "default") == 0 ) {echo "selected";} ?>  value = "default">Select...</option>
                          <option <?php if( strcmp($liquor , "wine") == 0 ) {echo "selected";} ?> value = "wine">wine</option>
                          <option <?php if( strcmp($liquor , "whisky") == 0 ) {echo "selected";} ?> value = "whisky">whisky</option>
                          <option <?php if( strcmp($liquor , "vodka") == 0 ) {echo "selected";} ?> value = "vodka">vodka</option>
                      </select></h5></div>
                  

                      <div><h5>Price: </h5></div>
                      <div><h5><select name = "price">
                          <option <?php if( strcmp($price , "default") == 0 ) {echo "selected";} ?> value = "default">Select...</option>
                          <option <?php if( strcmp($price , "range10") == 0 ) {echo "selected";} ?> value = "range10">under $10</option>
                          <option <?php if( strcmp($price , "range25") == 0 ) {echo "selected";} ?> value = "range25">$10-$25</option>
                          <option <?php if( strcmp($price , "range50") == 0 ) {echo "selected";} ?> value = "range50">$25-$50</option>
                          <option <?php if( strcmp($price , "range75") == 0 ) {echo "selected";} ?> value = "range75">$50-$75</option>
                          <option <?php if( strcmp($price , "range100") == 0 ) {echo "selected";} ?> value = "range100">$75-$100</option>
                          <option <?php if( strcmp($price , "range101") == 0 ) {echo "selected";} ?> value = "range101">over $100</option>
                       </select></h5></div>
                  
                      <div><h5>Country: </h5></div>
                      <div><h5><select name= "country" >
                          <option <?php if( strcmp($country , "default") == 0 ) {echo "selected";} ?> value = "default">Select...</option>
                          <option <?php if( strcmp($country , "Italy") == 0 ) {echo "selected";} ?> value = "Italy">Italy</option>
                          <option <?php if( strcmp($country , "Poland") == 0 ) {echo "selected";} ?> value = "Poland">Poland</option>
                          <option <?php if( strcmp($country , "Sweden") == 0 ) {echo "selected";} ?> value = "Sweden">Sweden</option>
                          <option <?php if( strcmp($country , "USA") == 0 ) {echo "selected";} ?> value = "USA">USA</option>
                      </select></h5></div>
                      
                      <div>
                          <button type="submit" class="btn btn-default"   name="submit" value="Get Selected Values">Search!</button>
                          <button type="submit" class="btn btn-default"   name="clear" value="clear">Clear</button>
                      </div>
                 </form>