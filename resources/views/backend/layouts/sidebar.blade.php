<div class=" sidebar col-md-2 d-flex flex-column">
    <div class="side-menu">
        <div class="side-menu-button d-block" data-bs-toggle="collapse" href="#category" >
            Category
        </div>
        <div class="drop collapse" id="category">
            <div class="drop-content">
                <ul class="">
                    <a href="{{ route('category.create') }}">Add</a>
                    <a href="{{ route('category.index') }}">View</a>
                </ul>
            </div>
        </div>
    </div>

    <div class="side-menu">
        <div class="side-menu-button d-block" data-bs-toggle="collapse" href="#subcategory" >
            Sub Category
        </div>
        <div class="drop collapse" id="subcategory">
            <div class="drop-content">
                <ul class="">
                    <a href="{{ route('product.create') }}">Add</a>
                    <a href="{{ route('product.index') }}">View</a>
                </ul>
            </div>
        </div>
    </div>

    <div class="side-menu">
        <div class="side-menu-button d-block" data-bs-toggle="collapse" href="#product" >
            product
        </div>
        <div class="drop collapse" id="product">
            <div class="drop-content">
                <ul class="">
                    <a href="">Add</a>
                    <a href="">View</a>
                </ul>
            </div>
        </div>
    </div>
</div>
