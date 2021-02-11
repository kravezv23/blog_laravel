@extends('layouts.admin_layout')

@section('title', 'Все категории')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Все категории</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
        <div class="container-fluid">

            <div class="card">
                <div class="card-body p-0">
                    <table class="table table-striped projects">
                        <thead>
                            <tr>
                                <th style="width: 1%">
                                    ID
                                </th>
                                <th style="width: 70%">
                                    Название категории
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categorys as $category)
                                <tr>
                                    <td>
                                        {{ $category['id'] }}
                                    </td>
                                    <td>
                                        {{ $category['title'] }}
                                    </td>
                                    <td class="project-actions text-right">
                                        <a class="btn btn-info btn-sm" href="{{ route('categorys.edit', $category['id']) }}">
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                            Редактировать
                                        </a>
                                        <a class="btn btn-danger btn-sm" href="#">
                                            <i class="fas fa-trash">
                                            </i>
                                            Удалить
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

@endsection


