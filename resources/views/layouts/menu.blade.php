<li class="{{ Request::is('products*') ? 'active' : '' }}">
    <a href="{!! route('products.index') !!}"><i class="fa fa-edit"></i><span>Products</span></a>
</li>

<li class="{{ Request::is('subscriptions*') ? 'active' : '' }}">
    <a href="{!! route('subscriptions.index') !!}"><i class="fa fa-edit"></i><span>Subscriptions</span></a>
</li>

