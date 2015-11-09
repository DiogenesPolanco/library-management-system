@extends('layout.index')

@section('custom_top_script')
@stop

@section('content')
<div class="content">
    <div class="module">
        <div class="module-head">
            <h3>Issue Logs</h3>
        </div>
        <div class="module-body">
            <form class="form-horizontal row-fluid">
                <div class="control-group">
                    <label class="control-label">Student ID</label>
                    <div class="controls">
                        <input type="number" data-form-field="student-issue-id" placeholder="Enter the student code here" class="span8">
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label">Book ID</label>
                    <div class="controls">
                        <input type="number" data-form-field="book-issue-id" placeholder="Enter the book code here" class="span8">
                    </div>
                </div>

                <div class="control-group">
                    <div class="controls">
                        <button type="button" class="btn btn-inverse" id="issuebook">Issue Book</button>
                    </div>
                </div>
            </form>
            <hr>
            <div class="row-fluid">
                <table class="table table-striped table-bordered table-condensed">
                    <thead>
                        <tr>
                            <th>Log ID</th>
                            <th>Book Issue ID</th>
                            <th>Book Name</th>
                            <th>Student ID</th>
                            <th>Student Name</th>
                            <th>Issued By</th>
                            <th>Issued On</th>
                            <th>Return Date</th>                        
                        </tr>
                    </thead>
                    <tbody id="issue-logs-table">
                        <tr class="text-center">
                            <td colspan="99">Loading...</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop

@section('custom_bottom_script')
<script type="text/javascript" src="{{ Config::get('view.custom.js') }}/script.logs.js"></script>
<script type="text/template" id="all_logs_display">
    @include('underscore.all_logs_display')
</script>
@stop