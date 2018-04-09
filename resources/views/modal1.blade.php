<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
    <form  action="" method="put">
          {{csrf_field()}}
            <input type="text" id="formname" name="name"  /><br/>
            <input type="email" id="formemail" name="email"  />
            <input type="text" id="ids" name="email"  />
           <p id="ids"></p>
        <button type="button" class="update" value="submit">update</button>
        </form>
    </div>

  </div>
</div>