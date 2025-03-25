<div class="text-center container-fluid has-bg-overlay text-light has-height-lg middle-items" id="book-table">
  <div class="">
    <h2 class="mb-5 section-title">BOOK A TABLE</h2>

    <form action="{{url('book_table')}}" method="post">
      @csrf
      <div class="mb-5 row">
        <div class="my-2 col-sm-6 col-md-3 col-xs-12">
          <input type="text" id="booktable" class="form-control form-control-lg custom-form-control" name="phone" placeholder="Phone Number">
        </div>
        <div class="my-2 col-sm-6 col-md-3 col-xs-12">
          <input type="number" id="booktable" class="form-control form-control-lg custom-form-control" name="n_guest" placeholder="NUMBER OF GUESTS" max="20" min="0">
        </div>
        <div class="my-2 col-sm-6 col-md-3 col-xs-12">
          <input type="time" id="booktable" class="form-control form-control-lg custom-form-control" name="time" placeholder="Time">
        </div>
        <div class="my-2 col-sm-6 col-md-3 col-xs-12">
          <input type="date" id="booktable" class="form-control form-control-lg custom-form-control" name="date" placeholder="Date">
        </div>
      </div>
      <input type="submit" class="btn btn-lg btn-primary" id="rounded-btn" value="Book Table">
    </form>

  </div>
</div>