@extends('shop::customers.account.index')
{{-- Custom code --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<style>
  body {
    padding: 2em;
    background: #f2f2f2;
  }

  a {
    color: steelblue;
  }

  ul.list-tree {
    max-width: 400px;
    padding: 0.3em;
  }

  ul.list-tree li {
    cursor: pointer;
    display: block;
    position: relative;
    vertical-align: top;
    font-size: 14px;
    line-height: 2em;
    padding: 0 1.3em;
    border-left: 1px solid steelblue;
    background: transparent;
    list-style-type: square;
    list-style-position: inside;
    overflow: visible;
    box-sizing: border-box;
    transition: all 0.2s;
  }

  ul.list-tree li.tree-directory:after {
    content: "";
    position: absolute;
    top: 0.6em;
    left: 0;
    height: 0.7em;
    width: 0.6em;
    border-right: 1px solid steelblue;
    opacity: 1;
    transition: all 0.2s;
  }

  ul.list-tree li.tree-directory.open:after {
    transform: rotate(270deg) translateX(-0.25em);
    opacity: 0;
  }

  ul.list-tree li.tree-directory:not(.open):hover {
    background: #e2e2e2;
  }

  ul.list-tree li:before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    height: 1em;
    width: 1em;
    border-bottom: 1px solid steelblue;
    transition: all 0.2s;
  }

  ul.list-tree li:last-child {
    border-left: 0;
  }

  ul.list-tree li:last-child:before {
    border-left: 1px solid steelblue;
    background: transparent;
  }

  ul.list-tree li:hover>ul>li {
    color: #333;
  }

  ul.list-tree li:hover {
    color: steelblue !important;
  }

  ul.list-tree li.new-directory {
    color: #999;
    font-style: italic;
  }

</style>

{{-- END Custom code --}}

@section('page_title')
{{ __('shop::app.customer.account.MLM.index.page-title') }}
@endsection

@section('page-detail-wrapper')
<div class="account-head mb-10">
  <span class="back-icon">
    <a href="{{ route('customer.MLM.index') }}">
      <i class="icon icon-menu-back"></i>
    </a>
  </span>

  <span class="account-heading">
    {{ __('shop::app.customer.account.MLM.index.title') }}
  </span>
</div>

{!! view_render_event('bagisto.shop.customers.account.MLM.list.before') !!}

<div class="account-items-list">
  <div class="account-table-content">

    {{-- Custom Code --}}

    <div class="row">
      <div class="columns large-6 small-12 gap-right">
        <h3>
          Members
        </h3>
        <ul class="list-tree">
          @foreach($Customer[0] as $key => $value)
          <li>
            <a>{{ $value}}</a>
          </li>
          @endforeach
          {{-- <li>
            <a>Lorem ipsum...</a>
          </li>
          <li>
            <a>Lorem ipsum...</a>
          </li>
          <li class="js-dir tree-directory">
            Lorem ipsum...
            <ul>
              <li>
                Lorem ipsum...
              </li>
              <li>
                Lorem ipsum...
              </li>
            </ul>
          </li>
          <li class="js-dir tree-directory">
            Lorem ipsum...
            <ul>
              <li>
                Lorem ipsum...
              </li>
              <li>
                Lorem ipsum...
              </li>
              <li class="js-dir tree-directory">
                Lorem ipsum...
                <ul>
                  <li>
                    Lorem ipsum...
                  </li>
                  <li>
                    Lorem ipsum...
                  </li>
                </ul>
              </li>
            </ul>
          </li> --}}
        </ul>
      </div>
    </div>

    {{-- END Custom Code --}}




    {{-- {!! app('Webkul\Shop\DataGrids\OrderDataGrid')->render() !!} --}}

  </div>
</div>

{{-- {!! view_render_event('bagisto.shop.customers.account.MLM.list.after') !!} --}}


{{-- Custom Code --}}
<!-- partial -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script>
  (function() {
    var createTree;

    createTree = function() {
      var branch, tree;
      tree = $('.list-tree');
      branch = $(tree).find('.js-dir');
      $(branch).find('ul').hide();
      return $(branch).click(function(event) {
        event.stopPropagation();
        if ($(event.target).hasClass('js-dir')) {
          return $(this).toggleClass('open').children('ul').slideToggle(100);
        }
      });
    };

    $(function() {
      return createTree();
    });

  }).call(this);

  //# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiIiwic291cmNlUm9vdCI6IiIsInNvdXJjZXMiOlsiPGFub255bW91cz4iXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IkFBQ0E7QUFBQSxNQUFBOztFQUFBLFVBQUEsR0FBYSxRQUFBLENBQUEsQ0FBQTtBQUNiLFFBQUEsTUFBQSxFQUFBO0lBQUUsSUFBQSxHQUFPLENBQUEsQ0FBRSxZQUFGO0lBQ1AsTUFBQSxHQUFVLENBQUEsQ0FBRSxJQUFGLENBQU8sQ0FBQyxJQUFSLENBQWEsU0FBYjtJQUVWLENBQUEsQ0FBRSxNQUFGLENBQVMsQ0FBQyxJQUFWLENBQWUsSUFBZixDQUFvQixDQUFDLElBQXJCLENBQUE7V0FFQSxDQUFBLENBQUUsTUFBRixDQUFTLENBQUMsS0FBVixDQUFnQixRQUFBLENBQUMsS0FBRCxDQUFBO01BQ2QsS0FBSyxDQUFDLGVBQU4sQ0FBQTtNQUVBLElBQUcsQ0FBQSxDQUFFLEtBQUssQ0FBQyxNQUFSLENBQWUsQ0FBQyxRQUFoQixDQUF5QixRQUF6QixDQUFIO2VBQ0UsQ0FBQSxDQUFFLElBQUYsQ0FDRSxDQUFDLFdBREgsQ0FDZSxNQURmLENBRUUsQ0FBQyxRQUZILENBRVksSUFGWixDQUdFLENBQUMsV0FISCxDQUdlLEdBSGYsRUFERjs7SUFIYyxDQUFoQjtFQU5XOztFQWViLENBQUEsQ0FBRSxRQUFBLENBQUEsQ0FBQTtXQUNBLFVBQUEsQ0FBQTtFQURBLENBQUY7QUFmQSIsInNvdXJjZXNDb250ZW50IjpbIlxuY3JlYXRlVHJlZSA9ICgpIC0+XG4gIHRyZWUgPSAkKCcubGlzdC10cmVlJylcbiAgYnJhbmNoID0gICQodHJlZSkuZmluZCgnLmpzLWRpcicpXG5cbiAgJChicmFuY2gpLmZpbmQoJ3VsJykuaGlkZSgpXG5cbiAgJChicmFuY2gpLmNsaWNrIChldmVudCkgLT5cbiAgICBldmVudC5zdG9wUHJvcGFnYXRpb24oKVxuXG4gICAgaWYgJChldmVudC50YXJnZXQpLmhhc0NsYXNzKCdqcy1kaXInKVxuICAgICAgJCh0aGlzKVxuICAgICAgICAudG9nZ2xlQ2xhc3MoJ29wZW4nKVxuICAgICAgICAuY2hpbGRyZW4oJ3VsJylcbiAgICAgICAgLnNsaWRlVG9nZ2xlKDEwMClcblxuJCAtPlxuICBjcmVhdGVUcmVlKClcbiJdfQ==
  //# sourceURL=coffeescript

</script>
{{-- END Custom Code --}}



@endsection