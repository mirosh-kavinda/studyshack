<div class="card-body  text-black">
  <h3 class="text-uppercase">Add Materials </h3>

  <form action="addingmat.php" method="post" enctype="multipart/form-data">


    <div class="col-md-12 mb-2">
      <div class="col-md-12 mb-2">
        <div class="form-outline">
          <input required type="text" id="class_name" name="m_name" class="form-control form-control-lg" />
          <label class="form-label" for="class_name">Material Topic</label>
        </div>
      </div>

      <div class="col-md-12 mb-2">
        <div class="form-outline">
          <input required type="text" id="clas_description" name="m_category" class="form-control form-control-lg" />
          <label class="form-label" for="clas_description">Material Category</label>
        </div>
      </div>

    </div>
    <div class="col-md-6 mb-4">
      <h6 class="mb-0 me-2">Grade :
        <select class="select" name="grade">
          <option value="Grade 1">Grade 1</option>
          <option value="Grade 2">Grade 2</option>
          <option value="Grade 3">Grade 3</option>
          <option value="Grade 4">Grade 4</option>
          <option value="Grade 5">Grade 5</option>
          <option value="Grade 6">Grade 6</option>
          <option value="Grade 7">Grade 7</option>
          <option value="Grade 8">Grade 8</option>
          <option value="Grade 9">Grade 9</option>
          <option value="Grade 10">Grade 10</option>
          <option value="Grade 11">Grade 11</option>
          <option value="Grade 12">Grade 12</option>
          <option value="Grade 13">Grade 13</option>
          <option value="After A/L">After A/L</option>
        </select>
      </h6>
    </div>
    <div>

      <div class="form-group">
        <label for="pdfFile">Select PDF File with minimum 4mb:</label>
        <input type="file" name="pdfFile" class="form-control-file" id="pdfFile">
      </div>



    </div>
    <div class="d-flex justify-content-end pt-3">
      <button type="reset" class="btn btn-light btn-lg">Reset all</button>
      <input required type="submit" name="submit" class="btn btn-info btn-lg ms-2" value="Add Material" />
    </div>
  </form>

</div>

