@extends('ngo.app')
@section('content')
<table class="table table-hover product_item_list c_table theme-color mb-0">
                                <thead>
                                    <tr>
                                        <th>Id</th>

                                        <th data-breakpoints="sm xs">First Name</th>
                                        <th data-breakpoints="xs">Last Name</th>
                                        <th data-breakpoints="xs md">email</th>
                                        <th data-breakpoints="sm xs md">Amount</th>
                                        <th data-breakpoints="sm xs md">Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                  @forelse($lists as $list)


                                    <tr>
                                        <td>
                                          <span class="list-name">{{ $list->id }}</span>

                                        </td>
                                        <td><span class="badge badge-warning">{{ $list->first_name }}</span>
                                            <!-- <span class="text-muted">Florida, United States</span> -->
                                        </td>

                                        <td>
                                            <span class="badge badge-success">{{ $list->last_name }}</span>
                                        </td>

                                        <td>
                                            <span class="badge badge-success">{{ $list->email }}</span>
                                        </td>

                                        <td>
                                            <span class="badge badge-info">{{ $list->amount }}</span>
                                        </td>








                                        <!-- <td>
                                            <span class="badge badge-success">{{ $list->created_at }}</span>
                                        </td> -->

                                        <td>
                                          <a href="{{ url('stripe-payment') }}/{{ $list->id }}/{{ $list->slug }}" class=" btn-sm btn-primary">Click for Pay here</a>

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
