    <?php $this->load->view('header', array('num' => 1)); ?>
    <section id="title" class="section-title">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <span class="page-title">Add Item</span><br/>
                    <span>Local Barangay Inventory System</span>
                </div>
                <div class="col-sm-6">
                    <ul class="breadcrumb pull-right">
                        <li><a href="<?php echo base_url();?>inventory/inventory_borrowed_item">Borrow</a></li>
						<li><a href="<?php echo base_url();?>inventory/update_item">Update</a></li>
         
                    </ul>
                </div>
            </div>
        </div>
    </section><!--/#title-->    
    <section id="contact-page" class="container">
        <div class="row">  
            <div class="col-sm-10">
                <h1>Items</h1>
				<ul class="breadcrumb pull-right">
					<input type="text" id="searchItem" placeholder="Search by Item Name" />
					<button id='search'  class='btn btn-sm btn-info'><span class="glyphicon glyphicon-search"></span></button>
				</ul>
				</br>
                <table class="table table-hover">                                  
                    <tr class="tbtr" style="background-color: rgb(240, 125, 0); color: black; font-weight: bold">
                        <td>Item</td>
                        <td>Quantity</td>
                        <td>Available Quantity</td>
                        <td>More Details</td>
                    </tr>
                    <tbody id = "tbl">
                        <?php foreach($items as $row):  ?>

                            <tr class="tbtr" style="background-color: white">
                                <td><?php echo $row->name ?></td>
                                <td><?php echo $row->quantity ?></td>
                                <td><?php echo $row->available_quantity ?></td>
                                <td><button data-toggle='modal' data-target='#myModal'  rowid=<?php echo $row->ID; ?> class='more btn btn-sm outline-outward btn btn-info'><span class="glyphicon glyphicon-th-list"></span></button></td>
                            </tr>

                        <?php  endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
             