@extends("..layouts.head")

@section("specific_title")
 : Attraction Category
@stop

@section("specific_css")
{!! Html::style("css/attraction-category.css") !!}
{!! Html::style("static-css/jquery.dataTables.min.css") !!}
@stop


@section("specific_js_head")
{!! HTML::script("static-js/jquery.dataTables.min.js") !!}
<script>
$(document).ready(function() {
    var table = $('#search').DataTable();
    table.page.len( -1 ).draw();
} );
</script>
@stop


@section("body")

@include("web.top-menu")

<div class="body-section">
    <div class="banner-page-title">
       <span lang="th">Attraction</span>
       <span lang="en">Attraction</span>
       <span lang="jp">Attraction</span>
       <span lang="ch">Attraction</span>
    </div>
    <div class="row">
        <div class="columns small-12">
            <table id="search" class="display" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Open</th>
                        <th>Category</th>
                        <th>Commute</th>
                        <th>Telephone</th>
                        <th>Link</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Open</th>
                        <th>Category</th>
                        <th>Commute</th>
                        <th>Telephone</th>
                        <th>Link</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach( $allItem as $item)
                    <tr>
                        <td>
                            <span lang="th">{!! $item->title_thai !!}</span>
                            <span lang="en">{!! $item->title_english !!}</span>
                            <span lang="jp">{!! $item->title_japan !!}</span>
                            <span lang="ch">{!! $item->title_china !!}</tspan>
                        </td>
                        <td>{!! $item->opening_hours !!}</td>
                        <td>{!! $item->category !!}</td>
                        <td>{!! $item->commute !!}</td>
                        <td>{!! $item->telephone_number !!}</td>
                        <th><a href="http://www.bangkoktourist.com/attraction/{!! $item->id !!}" style="color:#7fcaa8">link</a></th>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <style>
                .copyright a {
                        display:inline-block;
                }
            </style>
            <div class="copyright">
                <p>
                    DataTables designed and created by <a href="https://sprymedia.co.uk/" target="_blank">SpryMedia Ltd</a> © 2007-2016. <a href="https://datatables.net/license/mit" target="_blank">MIT licensed</a>.
                </p>
            </div>
        </div>
    </div>
</div>
@include("web.footer")
@stop
