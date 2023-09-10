@extends('job-record.master')

@section('title')
    Manage Records
@endsection

@section('content')
    <main>
        <section class="my-5">
            <div class="container">
                <div class="row d-flex justify-content-center align-items-center col-lg-12">
                    <div class="card p-3 mx-auto">
                        <div class="col-md-12 mx-auto">
                            <h3 class="text-center"><b>JOB RECORDS</b></h3>
                            <p class=" mt-3 text-center text-success">{{ Session::get('message') }}</p>
                            <div>
                                <table id="example" class="table table-striped" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Sl</th>
                                            <th>Company</th>
                                            <th>Position</th>
                                            <th>Vacancy</th>
                                            <th>Applied date</th>
                                            <th>Deadline</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($records as $record)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $record->company_name }}</td>
                                                <td>{{ $record->position }}</td>
                                                <td>{{ $record->vacency }}</td>
                                                <td>{{ $record->applied_on }}</td>
                                                <td>{{ $record->application_deadline }}</td>
                                                <td>
                                                    <a href=""><button class="btn btn-sm btn-outline-warning"
                                                            type="submit">Edit</button></a>
                                                    <a href=""><button class="btn btn-sm btn-outline-danger"
                                                            type="submit"
                                                            onclick="return confirm('Delete the note?')">Delete</button></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
