<form class="d-flex mt-3" role="search" action="{{route('products.search')}}">
    <input class="form-control me-2" type="text" name="q" placeholder="Search Product" aria-label="Search" value="{{$q}}">
    <button class="btn btn-success" type="submit" style="width: 40%; height: fit-content;">Search</button>
</form>
