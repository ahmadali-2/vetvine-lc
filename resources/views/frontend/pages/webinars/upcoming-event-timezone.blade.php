@extends('frontend.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav aria-label="breadcrumb" class="breadcrumbs large-font">
                    <ol class="breadcrumb">

                        <li class="breadcrumb-item"><a onclick="history.back()"
                                href="javascript::void();">Upcoming
                                Webinars</a></li>
                        <li class="breadcrumb-item" aria-current="page">
                            <a onclick="history.back()"
                                href="javascript::void();">Molestiae Repellendu</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Timezone
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card shodow-sm">
                    <div class="card-body" style="background: #fff">
                        <table class="table table-striped paginated" >
                            <thead>
                                <tr>
                                    <th scope="col">Timezones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($timeZoneArray as $timezone)
                                    <tr>
                                        <td>{{ $timezone }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
<script>
    $('td', 'table').each(function(i) {
        $(this).text(i+1);
    });



    $('table.paginated').each(function() {
        var currentPage = 0;
        var numPerPage = 10;
        var $table = $(this);
        $table.bind('repaginate', function() {
            $table.find('tbody tr').hide().slice(currentPage * numPerPage, (currentPage + 1) * numPerPage).show();
        });
        $table.trigger('repaginate');
        var numRows = $table.find('tbody tr').length;
        var numPages = Math.ceil(numRows / numPerPage);
        var $pager = $('<div class="pager"></div>');
        for (var page = 0; page < numPages; page++) {
            $('<span class="page-number"></span>').text(page + 1).bind('click', {
                newPage: page
            }, function(event) {
                currentPage = event.data['newPage'];
                $table.trigger('repaginate');
                $(this).addClass('active').siblings().removeClass('active');
            }).appendTo($pager).addClass('clickable');
        }
        $pager.insertBefore($table).find('span.page-number:first').addClass('active');
    });
    </script>
@endsection
