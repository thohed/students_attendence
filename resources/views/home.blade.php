@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="container mt-5">
                        <h4 class="text-center">Add Attendance ( 2023-March )</h4>
                        <form method="get" action="#">
                            @csrf
                               <div class="row">
                                <div class="col-3">
                                    <select class="form-control" name="year" id="" >
                                        <option selected disabled>Select Year</option>
                                        <option value="">2022</option>
                                        <option value="">2023</option>
                                    </select>
                                </div>
                                <div class="col-3">
                                    <select class="form-control" name="month" id="" >
                                        <option selected disabled>Select month</option>
                                        <option value="1">January</option>
                                        <option value="2">February</option>
                                        <option value="3">March</option>
                                        <option value="4">April</option>
                                        <option value="5">May</option>
                                        <option value="6">June</option>
                                        <option value="7">July</option>
                                        <option value="8">August</option>
                                        <option value="9">September</option>
                                        <option value="10">October</option>
                                        <option value="11">November</option>
                                        <option value="12">December</option>
                                    </select>
                                </div>

                                <div class="col-3">
                                    <button type="submit" class="btn btn-info">Search</button>
                                    <a href="#" class="btn btn-success">Reload</a>
                                </div>
                               </div>
                        </form>

                        <div class="table-responsive">
                            <button type="submit" class="btn btn-success" style="display:flex; margin:10px;">
                                Submit
                            </button>

                            <table class="table">
                                <thead>
                                    <th style="border-right:1px solid #000000">Name</th>
                                    <th style="font-size:10px; border-right:1px solid #000000">2023-03-01</th>
                                    <th style="font-size:10px; border-right:1px solid #000000">2023-03-02</th>
                                    <th style="font-size:10px; border-right:1px solid #000000">2023-03-03</th>
                                    <th style="font-size:10px; border-right:1px solid #000000">2023-03-04</th>
                                    <th style="font-size:10px; border-right:1px solid #000000">2023-03-05</th>
                                    <th style="font-size:10px; border-right:1px solid #000000">2023-03-06</th>
                                    <th style="font-size:10px; border-right:1px solid #000000">2023-03-07</th>
                                    <th style="font-size:10px; border-right:1px solid #000000">2023-03-08</th>
                                    <th style="font-size:10px; border-right:1px solid #000000">2023-03-09</th>
                                    <th style="font-size:10px; border-right:1px solid #000000">2023-03-10</th>
                                    <th style="font-size:10px; border-right:1px solid #000000">2023-03-11</th>
                                    <th style="font-size:10px; border-right:1px solid #000000">2023-03-12</th>
                                    <th style="font-size:10px; border-right:1px solid #000000">2023-03-13</th>
                                    <th style="font-size:10px; border-right:1px solid #000000">2023-03-14</th>
                                    <th style="font-size:10px; border-right:1px solid #000000">2023-03-15</th>
                                    <th style="font-size:10px; border-right:1px solid #000000">2023-03-16</th>
                                    <th style="font-size:10px; border-right:1px solid #000000">2023-03-17</th>
                                    <th style="font-size:10px; border-right:1px solid #000000">2023-03-18</th>
                                    <th style="font-size:10px; border-right:1px solid #000000">2023-03-19</th>
                                    <th style="font-size:10px; border-right:1px solid #000000">2023-03-20</th>
                                    <th style="font-size:10px; border-right:1px solid #000000">2023-03-21</th>
                                    <th style="font-size:10px; border-right:1px solid #000000">2023-03-22</th>
                                    <th style="font-size:10px; border-right:1px solid #000000">2023-03-23</th>
                                    <th style="font-size:10px; border-right:1px solid #000000">2023-03-24</th>
                                    <th style="font-size:10px; border-right:1px solid #000000">2023-03-25</th>
                                    <th style="font-size:10px; border-right:1px solid #000000">2023-03-26</th>
                                    <th style="font-size:10px; border-right:1px solid #000000">2023-03-27</th>
                                    <th style="font-size:10px; border-right:1px solid #000000">2023-03-28</th>
                                    <th style="font-size:10px; border-right:1px solid #000000">2023-03-29</th>
                                    <th style="font-size:10px; border-right:1px solid #000000">2023-03-30</th>
                                    <th style="font-size:10px; border-right:1px solid #000000">2023-03-31</th>
                                </thead>

                                <tbody>
                                    <form action="#" method="#"></form>
                                    <tr>

                                        <td style="border-right:1px solid #000000">{{ Auth::user()->name }}</td>

                                        <td style="border-right:1px solid #000000">
                                            <input type="checkbox" name="status" style="width:50px">
                                        </td>
                                         <td style="border-right:1px solid #000000">
                                            <input type="checkbox" name="status" style="width:50px">
                                        </td>
                                        <td style="border-right:1px solid #000000">
                                            <input type="checkbox" name="status" style="width:50px">
                                        </td>
                                         <td style="border-right:1px solid #000000">
                                            <input type="checkbox" name="status" style="width:50px">
                                        </td>
                                        <td style="border-right:1px solid #000000">
                                            <input type="checkbox" name="status" style="width:50px">
                                        </td>
                                         <td style="border-right:1px solid #000000">
                                            <input type="checkbox" name="status" style="width:50px">
                                        </td>
                                        <td style="border-right:1px solid #000000">
                                            <input type="checkbox" name="status" style="width:50px">
                                        </td>
                                         <td style="border-right:1px solid #000000">
                                            <input type="checkbox" name="status" style="width:50px">
                                        </td>
                                        <td style="border-right:1px solid #000000">
                                            <input type="checkbox" name="status" style="width:50px">
                                        </td>
                                         <td style="border-right:1px solid #000000">
                                            <input type="checkbox" name="status" style="width:50px">
                                        </td>
                                        <td style="border-right:1px solid #000000">
                                            <input type="checkbox" name="status" style="width:50px">
                                        </td>
                                         <td style="border-right:1px solid #000000">
                                            <input type="checkbox" name="status" style="width:50px">
                                        </td>
                                        <td style="border-right:1px solid #000000">
                                            <input type="checkbox" name="status" style="width:50px">
                                        </td>
                                         <td style="border-right:1px solid #000000">
                                            <input type="checkbox" name="status" style="width:50px">
                                        </td>
                                        <td style="border-right:1px solid #000000">
                                            <input type="checkbox" name="status" style="width:50px">
                                        </td>
                                         <td style="border-right:1px solid #000000">
                                            <input type="checkbox" name="status" style="width:50px">
                                        </td>
                                        <td style="border-right:1px solid #000000">
                                            <input type="checkbox" name="status" style="width:50px">
                                        </td>
                                         <td style="border-right:1px solid #000000">
                                            <input type="checkbox" name="status" style="width:50px">
                                        </td>
                                        <td style="border-right:1px solid #000000">
                                            <input type="checkbox" name="status" style="width:50px">
                                        </td>
                                         <td style="border-right:1px solid #000000">
                                            <input type="checkbox" name="status" style="width:50px">
                                        </td>
                                        <td style="border-right:1px solid #000000">
                                            <input type="checkbox" name="status" style="width:50px">
                                        </td>
                                         <td style="border-right:1px solid #000000">
                                            <input type="checkbox" name="status" style="width:50px">
                                        </td>
                                        <td style="border-right:1px solid #000000">
                                            <input type="checkbox" name="status" style="width:50px">
                                        </td>
                                         <td style="border-right:1px solid #000000">
                                            <input type="checkbox" name="status" style="width:50px">
                                        </td>
                                        <td style="border-right:1px solid #000000">
                                            <input type="checkbox" name="status" style="width:50px">
                                        </td>
                                         <td style="border-right:1px solid #000000">
                                            <input type="checkbox" name="status" style="width:50px">
                                        </td>
                                        <td style="border-right:1px solid #000000">
                                            <input type="checkbox" name="status" style="width:50px">
                                        </td>
                                         <td style="border-right:1px solid #000000">
                                            <input type="checkbox" name="status" style="width:50px">
                                        </td>
                                        <td style="border-right:1px solid #000000">
                                            <input type="checkbox" name="status" style="width:50px">
                                        </td>
                                         <td style="border-right:1px solid #000000">
                                            <input type="checkbox" name="status" style="width:50px">
                                        </td>
                                        <td style="border-right:1px solid #000000">
                                            <input type="checkbox" name="status" style="width:50px">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
