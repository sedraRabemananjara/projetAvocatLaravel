<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <table>
      <tr>
        <form action="{{ route('products') }}" method="post" enctype="multipart/form-data"  class="container">
      <td>
         <label for="name">Product Name</label>
         <input type="text" name="name" class="form-control" id="name" required>
        </td>
        <td>
           <label for="type">Product Type</label>
           <select class="form-control" name="type" id="type">
              <option value="type1">type 1</option>
            <option value="type2">type 2</option>
           </select>
        </td>
        <td>
          <label for="file">Select Product image :</label>
          <input type="file" name="file" id="file">
        </td>
        <td>
          <input type="submit" value="inserer" name="submit" id="sub1">
          <input type="hidden" value="{{ csrf_token() }}" name="_token">
        </td>
    </form>
      </tr>
    </table>
  </body>
</html>