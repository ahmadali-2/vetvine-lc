<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card shodow-sm">
                <div class="card-body" style="background: #fff">
                    <table class="table table-striped paginated">
                        <tbody>
                            @isset($timeZoneArray)
                                @foreach ($timeZoneArray as $timezone)
                                    <tr>
                                        <td>{{ $timezone }}</td>
                                    </tr>
                                @endforeach
                            @endisset
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
