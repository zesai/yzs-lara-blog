{{--@if(isset($category['children']) && count($category['children']) > 0)--}}
{{--    <li class="nav-item dropdown">--}}
{{--        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--          {{ $category['name'] }}--}}
{{--        </a>--}}
{{--        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
{{--            <!-- 遍历当前类目的子类目，递归调用自己这个模板 -->--}}
{{--            @each('layouts._category_item', $category['children'], 'category')--}}
{{--        </ul>--}}
{{--    </li>--}}
{{--@else--}}
{{--    <li class="nav-item {{ category_nav_active($category['id']) }}">--}}
{{--        <a class="nav-link dropdown-item" href="{{ route('categories.show', $category['id']) }}">{{ $category['name'] }}</a>--}}
{{--    </li>--}}

{{--@endif--}}

<!-- 如果当前类目有 children 字段并且 children 字段不为空 -->
@if(isset($category['children']) && count($category['children']) > 0)
  <li class="dropdown-submenu">
    <a href="#" class="dropdown-item dropdown-toggle" data-toggle="dropdown">{{ $category['name'] }}</a>
    <ul class="dropdown-menu">
      <!-- 遍历当前类目的子类目，递归调用自己这个模板 -->
      @each('layouts._category_item', $category['children'], 'category')
    </ul>
  </li>
@else
  <li><a class="dropdown-item" href="{{ route('categories.show', $category['id']) }}">{{ $category['name'] }}</a></li>
@endif
