<!-- 如果当前类目有 children 字段并且 children 字段不为空 -->
@if(isset($category['children']) && count($category['children']) > 0)
  <li class="dropdown">
    <a href="#" class="dropdown-toggle dropdown-item " data-toggle="dropdown">{{ $category['name'] }}</a>
    <ul class="dropdown-menu">
      <!-- 遍历当前类目的子类目，递归调用自己这个模板 -->
      @each('layouts._category_item', $category['children'], 'category')
    </ul>
  </li>
@else
  <li><a href="{{ route('categories.show', $category['id']) }}">{{ $category['name'] }}</a></li>
@endif
