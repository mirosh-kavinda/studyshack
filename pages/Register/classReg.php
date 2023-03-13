
        <div class="col-xl-6">
            <div class="card-body p-md-5 text-black">
                <h3 class="mb-5 text-uppercase">Register a Class</h3>

                <form action="../../utils/registration.php" method="post">

                    <div class="col-md-12 mb-2">

                        <div class="col-md-6 mb-4">
                            <h6 class="mb-0 me-4">Grade :
                                <select class="select" name="grade">
                                    <option value="1">Grade 1</option>
                                    <option value="2">Grade 2</option>
                                    <option value="3">Grade 3</option>
                                    <option value="4">Grade 4</option>
                                    <option value="2">Grade 5</option>
                                    <option value="3">Grade 6</option>
                                    <option value="4">Grade 7</option>
                                    <option value="2">Grade 8</option>
                                    <option value="3">Grade 9</option>
                                    <option value="4">Grade 10</option>
                                    <option value="2">Grade 11</option>
                                    <option value="3">Grade 12</option>
                                    <option value="4">Grade 13</option>
                                </select>
                            </h6>
                        </div>

                        <div class="col-md-12 mb-2">
                            <div class="form-outline">
                                <input type="text" id="form3Example1m" name="subName" class="form-control form-control-lg" />
                                <label class="form-label" for="form3Example1m">Subject Name</label>
                            </div>
                        </div>
                        <div class="col-md-12 mb-2">
                            <div class="form-outline">
                                <input type="text" id="form3Example1m" name="subDesc" class="form-control form-control-lg" />
                                <label class="form-label" for="form3Example1m">Subject Descrition</label>
                            </div>
                        </div>

                        <div class="d-flex justify-content-end pt-3">
                            <button type="reset" class="btn btn-light btn-lg">Reset all</button>
                            <input type="submit" name="subregister" class="btn btn-info btn-lg ms-2" value="Submit Form" />
                        </div>
                </form>

            </div>
        </div>
    </div>
