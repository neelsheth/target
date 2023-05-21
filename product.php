<!-- 141 line -->   
<div class="row col mt-3 deliverable_type <?= (isset($product_details[0]['type']) && $product_details[0]['type'] == 'digital_product') ? 'd-none' : '' ?>">
                                                <div class="col-md-6">
                                                    <label for="zipcode" class="col-form-label">Deliverable Type</label>
                                                    <select class='form-control' name='deliverable_type' id="deliverable_type">
                                                        <option value=<?= NONE ?> <?= (isset($product_details[0]['deliverable_type']) &&  $product_details[0]['deliverable_type'] == NONE) ? 'selected' : ''; ?>>None</option>
                                                        <?php if (!isset($product_details)) { ?>
                                                            <option value=<?= ALL ?> selected>All</option>
                                                        <?php } else { ?>
                                                            <option value=<?= ALL ?> <?= (isset($product_details[0]['deliverable_type']) &&  $product_details[0]['deliverable_type'] == ALL) ? 'selected' : ''; ?>>All</option>
                                                        <?php } ?>
                                                        <option value=<?= INCLUDED ?> <?= (isset($product_details[0]['deliverable_type']) &&  $product_details[0]['deliverable_type'] == INCLUDED) ? 'selected' : ''; ?>>Included</option>
                                                        <option value=<?= EXCLUDED ?> <?= (isset($product_details[0]['deliverable_type']) &&  $product_details[0]['deliverable_type'] == EXCLUDED) ? 'selected' : ''; ?>>Excluded</option>
                                                    </select>
                                                </div>
                                                <?php
                                                $zipcodes = (isset($product_details[0]['deliverable_zipcodes']) &&  $product_details[0]['deliverable_zipcodes'] != NULL) ? explode(",", $product_details[0]['deliverable_zipcodes']) : "";
                                                ?>
                                              
                                                <div class="col-md-6">
                                                    <label for="zipcodes" class="col-form-label">Deliverable Cities</label>
                                                    <select name="deliverable_zipcodes[]" class="search_cities form-control w-100" multiple onload="multiselect()" id="deliverable_zipcodes" <?= (isset($product_details[0]['deliverable_type']) &&  ($product_details[0]['deliverable_type'] == INCLUDED || $product_details[0]['deliverable_type'] == EXCLUDED))  ? "" : "disabled" ?>>
                                                        // <?php if (isset($product_details[0]['deliverable_type']) &&  ($product_details[0]['deliverable_type'] == INCLUDED || $product_details[0]['deliverable_type'] == EXCLUDED)) {
                                                        //     $zipcodes_name =  fetch_details('cities', "",  'name,id', "", "", "", "", "id", $zipcodes);
                                                        //     // print_r($zipcodes_name);
                                                        //     // die();
                                                        //     foreach ($zipcodes_name as $row) {
                                                        // ?>
                                                        //         <option value=<?= $row['id'] ?> <?= (in_array($row['id'], $zipcodes)) ? 'selected' : ''; ?>> <?= $row['zipcode'] ?></option>
                                                        // <?php }
                                                        // } ?>
                                                        
                                                    </select>
                                                </div>
                                                
                                                
                                       
                                                
<!--                                                 141 line -->

                                            </div>
