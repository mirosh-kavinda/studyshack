<?php
session_start();


?>

<div class="col ">
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Payment</h5>
                    <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="card" style="border-radius: 15px;">
                        <div class="card-body p-2">
                            <form class="col" action="../utils/adminFeature.php" method="POST">
                                <div class="row">
                                    <label class="form-label" for="typeText">Course Id </label>
                                    <input type="text" disabled name="c_id" class="form-control form-control-lg" siez="17" value="<?php echo  $data['c_id'] ?>" />
                                </div>
                                <div class="row">
                                    <label class="form-label" for="typeText">Email</label>
                                    <input type="text" disabled name="c_email" class="form-control form-control-lg" siez="17" value="<?php echo  $_SESSION['user_email'] ?>" />
                                </div>
                                <div class="row">
                                    <label class="form-label" for="typeText">Total</label>
                                    <input type="text" disabled name="c_fee" class="form-control form-control-lg" siez="17" value="<?php echo  $data['c_fee'] ?>" />
                                </div>
                                <div class="d-flex justify-content-between align-items-center mb-3">

                                    <div class="form-outline">
                                        <input required type="text" id="typeText" class="form-control form-control-lg" siez="17" placeholder="1234 5678 9012 3457" minlength="19" maxlength="19" />
                                        <label class="form-label" for="typeText">Card Number</label>
                                    </div>
                                    <img src="https://img.icons8.com/color/48/000000/visa.png" alt="visa" width="64px" />
                                </div>

                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <div class="form-outline">
                                        <input required type="text" id="typeName" class="form-control form-control-lg" siez="17" placeholder="Cardholder's Name" />
                                        <label class="form-label" for="typeName">Cardholder's Name</label>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-between align-items-center pb-2">
                                    <div class="form-outline">
                                        <input required type="text" id="typeExp" class="form-control form-control-lg" placeholder="MM/YYYY" size="7" id="exp" minlength="7" maxlength="7" />
                                        <label class="form-label" for="typeExp">Expiration</label>
                                    </div>
                                    <div class="form-outline">
                                        <input required type="password" id="typeText2" class="form-control form-control-lg" placeholder="&#9679;&#9679;&#9679;" size="1" minlength="3" maxlength="3" />
                                        <label class="form-label" for="typeText2">Cvv</label>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">Cancel</button>
                                    <input type="submit" class="btn btn-primary" name="makePayment"  />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>