<?php
$base_url = $this->config->item('base_url'); 
$assets = $this->config->item('assets');
?>

<!-- Table -->
<br>

<div class="row">
	<div class="large-4 columns">
		<ul class="breadcrumbs">
		  <li><a href="#">Book</a></li>
		  <li><a href="#">Magazine</a></li>
		  <li><a href="#">Audio CD</a></li>
		  <li><a href="#">DVD</a></li>
		</ul>
	</div>
</div>

	<!-- Table Rows -->
<div class="row">
  <div class="large-12 columns">

     <table>
              <thead>
                <tr>
                  <th width="100">User ID</th>         
                  <th width="200">Name</th>
                  <th>Item Purchased</th>
                  <th width="75">Date</th>
                  <th width="125">Time</th>
                </tr>
              </thead>
              <tbody>
				<?php foreach ($transactions as $trans_item): ?>
                <tr>
                  <td><?php echo $trans_item['customerID'] ?></td>
                  <td><?php echo $trans_item['title'] ?></td>
                  <td><?php echo $trans_item['type'] ?></td>
                  <td><?php echo $trans_item['dateTime'] ?></td>
                  <td><?php echo $trans_item['dateTime'] ?></td>
                </tr>
				<?php endforeach ?>
              </tbody>
            </table>
	</div>
</div>

<!-- Edit Profile -->
<div id="editProfile" class="reveal-modal" data-reveal>
  <form>
    <div class="row">
      <div class="large-6 columns">
        <fieldset>
          <legend>User Credentials</legend>
          <div class="row">
            <div class="large-6 columns">
              <label>Username <input type="text" name="username" id="username" placeholder="Username">
              </label>
            </div>
            <div class="large-6 columns">
              <label>Password <input type="password" name="password" id="password" placeholder="Password">
              </label>
            </div>
          </div>
          <div class="row">
            <div class="large-12 columns">
              <label>E-mail Address <input type="text" name="emailAdd" id="emailAdd" placeholder="E-mail Address">
              </label>
            </div>
          </div>
        </fieldset>
      </div>
      <div class="large-6 columns">
        <fieldset>
          <legend>Personal Information</legend>
          <div class="row">
            <div class="large-4 columns">
              <label>First Name <input type="text" name="firstName" id="firstName" placeholder="First Name">
              </label>
            </div>
            <div class="large-4 columns">
              <label>Middle Initial <input type="text" name="middleInitial" id="middleInitial" placeholder="Middle Initial">
              </label>
            </div>
            <div class="large-4 columns">
              <label>Last Name <input type="text" name="lastName" id="lastName" placeholder="Last Name">
              </label>
            </div>
          </div>
          <div class="row">
            <div class="large-12 columns">
              <label>Birthday <input type="text" name="birthday" id="birthday" placeholder="Birthday (Temporary)">
              </label>
            </div>
          </div>
        </fieldset>
      </div>
    </div>
    <div class="row">
      <div class="large-12 columns">
        <fieldset>
          <legend>Billing & Delivery Address</legend>
          <div class="row">
            <div class="large-4 columns">
              <label>House/Apartment No. <input type="text" name="houseAptNo" id="houseAptNo" placeholder="House/Apartment No.">
              </label>
            </div>
            <div class="large-4 columns">
              <label>Street <input type="password" name="street" id="street" placeholder="Street">
              </label>
            </div>
            <div class="large-4 columns">
              <label>Subdivision <input type="text" name="subdivision" id="subdivision" placeholder="Subdivision">
              </label>
            </div>
          </div>
          <div class="row">
            <div class="large-4 columns">
              <label>City <input type="password" name="city" id="city" placeholder="City">
              </label>
            </div>
            <div class="large-4 columns">
              <label>Postal Code <input type="text" name="postalCode" id="postalCode" placeholder="Postal Code">
              </label>
            </div>
            <div class="large-4 columns">
              <label>Country <input type="password" name="country" id="country" placeholder="Country">
              </label>
            </div>
          </div>
        </fieldset>
      </div>
    </div>
    <div class="row">
      <div class="large-3 large-offset-9 columns">
        <button type="submit" class="button expand success"><i class="fa fa-pencil-square-o"></i> Edit Profile</button>
      </div>
    </div>
  </form>
  <a class="close-reveal-modal">&#215;</a>
</div>

<!-- View Profile -->
<div id="viewProfile" class="reveal-modal" data-reveal>
  <form>
    <div class="row">
      <div class="large-6 columns">
        <fieldset>
          <legend>User Credentials</legend>
          <div class="row">
            <div class="large-6 columns">
              <label>Username <input type="text" name="username" id="username" placeholder="Username">
              </label>
            </div>
            <div class="large-6 columns">
              <label>Password <input type="password" name="password" id="password" placeholder="Password">
              </label>
            </div>
          </div>
          <div class="row">
            <div class="large-12 columns">
              <label>E-mail Address <input type="text" name="emailAdd" id="emailAdd" placeholder="E-mail Address">
              </label>
            </div>
          </div>
        </fieldset>
      </div>
      <div class="large-6 columns">
        <fieldset>
          <legend>Personal Information</legend>
          <div class="row">
            <div class="large-4 columns">
              <label>First Name <input type="text" name="firstName" id="firstName" placeholder="First Name">
              </label>
            </div>
            <div class="large-4 columns">
              <label>Middle Initial <input type="text" name="middleInitial" id="middleInitial" placeholder="Middle Initial">
              </label>
            </div>
            <div class="large-4 columns">
              <label>Last Name <input type="text" name="lastName" id="lastName" placeholder="Last Name">
              </label>
            </div>
          </div>
          <div class="row">
            <div class="large-12 columns">
              <label>Birthday <input type="text" name="birthday" id="birthday" placeholder="Birthday (Temporary)">
              </label>
            </div>
          </div>
        </fieldset>
      </div>
    </div>
    <div class="row">
      <div class="large-12 columns">
        <fieldset>
          <legend>Billing & Delivery Address</legend>
          <div class="row">
            <div class="large-4 columns">
              <label>House/Apartment No. <input type="text" name="houseAptNo" id="houseAptNo" placeholder="House/Apartment No.">
              </label>
            </div>
            <div class="large-4 columns">
              <label>Street <input type="password" name="street" id="street" placeholder="Street">
              </label>
            </div>
            <div class="large-4 columns">
              <label>Subdivision <input type="text" name="subdivision" id="subdivision" placeholder="Subdivision">
              </label>
            </div>
          </div>
          <div class="row">
            <div class="large-4 columns">
              <label>City <input type="password" name="city" id="city" placeholder="City">
              </label>
            </div>
            <div class="large-4 columns">
              <label>Postal Code <input type="text" name="postalCode" id="postalCode" placeholder="Postal Code">
              </label>
            </div>
            <div class="large-4 columns">
              <label>Country <input type="password" name="country" id="country" placeholder="Country">
              </label>
            </div>
          </div>
        </fieldset>
      </div>
    </div>
  </form>
  <a class="close-reveal-modal">&#215;</a>
</div>

<!-- Add Product -->
<div id="addProduct" class="reveal-modal" data-reveal>
  <form>
    <div class="row">
      <div class="large-12 columns">
        <fieldset>
          <legend>Product Information</legend>
          <div class="row">
            <div class="large-4 columns">
              <label>Title <input type="text" name="title" id="title" placeholder="Title">
              </label>
            </div>
            <div class="large-4 columns">
		      <label>Type
		        <select name="productType" id="productType">
		          <option value="Book">Book</option>
		          <option value="Magazine">Magazine</option>
		          <option value="Audio CD">Audio CD</option>
		          <option value="DVD">DVD</option>
		        </select>
		      </label>
    	   	</div>
    	   	<div class="large-4 columns">
              <label>Price <input type="text" name="price" id="price" placeholder="Price">
              </label>
            </div>
          </div>
          <div class="row">
            <div class="large-12 columns">
		      <label>Synopsis/Summary
        		<textarea placeholder="Synopsis/Summary" name="synopsis" id="synopsis"></textarea>
      		  </label>
    	   	</div>
          </div>
        </fieldset>
      </div>
    </div>
    <div class="row">
      <div class="large-3 large-offset-9 columns">
        <button type="submit" class="button expand success"><i class="fa fa-plus"></i> Add Product</button>
      </div>
    </div>
  </form>
  <a class="close-reveal-modal">&#215;</a>
</div>

<!-- Edit Product -->
<div id="editProduct" class="reveal-modal" data-reveal>
  <form>
    <div class="row">
      <div class="large-12 columns">
        <fieldset>
          <legend>Product Information</legend>
          <div class="row">
  			<div class="large-4 columns">
  				<label>Existing Product
		        	<select name="Title" id="Title">
		          		<option value="Product Name">ID + Product Name</option>
		        	</select>
		      	</label>
  			</div>
  		  </div>
          <div class="row">
            <div class="large-4 columns">
              <label>Title <input type="text" name="title" id="title" placeholder="Title">
              </label>
            </div>
            <div class="large-4 columns">
		      <label>Type
		        <select name="productType" id="productType">
		          <option value="Book">Book</option>
		          <option value="Magazine">Magazine</option>
		          <option value="Audio CD">Audio CD</option>
		          <option value="DVD">DVD</option>
		        </select>
		      </label>
    	   	</div>
    	   	<div class="large-4 columns">
              <label>Price <input type="text" name="price" id="price" placeholder="Price">
              </label>
            </div>
          </div>
          <div class="row">
            <div class="large-12 columns">
		      <label>Synopsis/Summary
        		<textarea placeholder="Synopsis/Summary" name="synopsis" id="synopsis"></textarea>
      		  </label>
    	   	</div>
          </div>
        </fieldset>
      </div>
    </div>
    <div class="row">
      <div class="large-3 large-offset-9 columns">
        <button type="submit" class="button expand"><i class="fa fa-pencil"></i> Edit Product</button>
      </div>
    </div>
  </form>
  <a class="close-reveal-modal">&#215;</a>
</div>

<!-- Delete Product -->
<div id="deleteProduct" class="reveal-modal" data-reveal>
  <form>
    <div class="row">
      <div class="large-12 columns">
        <table>
		      <thead>
		        <tr>
			        <th width="100">Product ID</th>		    	
		          <th width="200">Title</th>
		          <th>Synopsis/Summary</th>
		          <th width="75">Price</th>
		          <th width="125">Type</th>
		          <th width="50">Delete</th>
		        </tr>
		      </thead>
		      <tbody>
		        <tr>
		          <td>999</td>
		          <td>Title</td>
		          <td>This is longer content Donec id elit non mi porta gravida at eget metus.</td>
		          <td>$99.00</td>
		          <td>Book</td>
		          <td><input id="checkbox1" name="checkbox1" type="checkbox"></td>
		        </tr>
		        <tr>
		          <td>999</td>
		          <td>Title</td>
		          <td>This is longer content Donec id elit non mi porta gravida at eget metus.</td>
		          <td>$99.00</td>
		          <td>Book</td>
		          <td><input id="checkbox2" name="checkbox2" type="checkbox"></td>
		        </tr>
		        <tr>
		          <td>999</td>
		          <td>Title</td>
		          <td>This is longer content Donec id elit non mi porta gravida at eget metus.</td>
		          <td>$99.00</td>
		          <td>Book</td>
		          <td><input id="checkbox3" name="checkbox3" type="checkbox"></td>
		        </tr>
		      </tbody>
		    </table>
      </div>
    </div>
    <div class="row">
      <div class="large-3 large-offset-9 columns">
        <button type="submit" class="button expand alert"><i class="fa fa-times"></i> Delete Product</button>
      </div>
    </div>
  </form>
  <a class="close-reveal-modal">&#215;</a>
</div>
