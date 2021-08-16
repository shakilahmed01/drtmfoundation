@extends('ngo.app')
@section('content')
<table class="table table-hover product_item_list c_table theme-color mb-0">
                                <thead>
                                    <tr>
                                        <th>Id</th>

                                        <th data-breakpoints="sm xs"> Name</th>
                                        <th data-breakpoints="xs">Email</th>
                                        <th data-breakpoints="xs md">Mobile Number</th>
                                        <th data-breakpoints="sm xs md">Message</th>
                                        <th data-breakpoints="sm xs md">Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                  @forelse($lists as $list)


                                    <tr>
                                        <td>
                                          <span class="list-name">{{ $list->id }}</span>

                                        </td>
                                        <td><span class="badge badge-warning">{{ $list->name }}</span>
                                            <!-- <span class="text-muted">Florida, United States</span> -->
                                        </td>

                                        <td>
                                            <span class="badge badge-success">{{ $list->email }}</span>
                                        </td>

                                        <td>
                                            <span class="badge badge-success">{{ $list->mobile }}</span>
                                        </td>

                                        <td>
                                            <span class="badge badge-info">{{ $list->message }}</span>
                                        </td>








                                        <!-- <td>
                                            <span class="badge badge-success">{{ $list->created_at }}</span>
                                        </td> -->

                                        <td>
                                          <a href="tel:" class=" btn-sm btn-primary">Make a call {{$list->mobile}}</a>

                                        </td>
                                      </tr>

                                  @endforeach



                                </tbody>
                            </table>

                            <div class="card">
                        <div class="body">
                             {{ $lists->links() }}
                        </div>
                    </div>
@endsection
