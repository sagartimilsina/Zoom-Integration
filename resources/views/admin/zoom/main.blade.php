@extends('admin.layouts.main')
@section('title', 'main-section')
@section('main-section')
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <div class="layout-page">
                <div class="container-xxl flex-grow-1 container-p-y">
                    <div class="row">
                        <div class="col-lg-12 mb-4 order-0">
                            <div class="col-sm-12">
                                <div class="row align-items-center">
                                    <div class="col-sm-6">
                                        <h4 class="page-title text-left">About Management</h4>
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="">Home</a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="javascript:void(0);">About</a>
                                            </li>
                                            <li class="breadcrumb-item active text-primary"><a
                                                    href="javascript:void(0);">About
                                                    List</a></li>

                                        </ol>
                                    </div>

                                    <div class="col-sm-6 text-end">
                                        <div class="float-right d-none d-md-block">
                                            <div class="">
                                                <a href="" data-toggle="modal"
                                                    class="btn btn-primary btn-sm btn-flat">
                                                    <i class="fa-solid fa-plus px-1"></i>Add</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">

                                <div class="d-flex align-items-end row">
                                    <div class="col-12">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div
                                                                class="table-responsive"
                                                            >
                                                                <table
                                                                    class="table table-primary"
                                                                >
                                                                    <thead>
                                                                        <tr>
                                                                            <th scope="col">Column 1</th>
                                                                            <th scope="col">Column 2</th>
                                                                            <th scope="col">Column 3</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr class="">
                                                                            <td scope="row">R1C1</td>
                                                                            <td>R1C2</td>
                                                                            <td>R1C3</td>
                                                                        </tr>
                                                                        <tr class="">
                                                                            <td scope="row">Item</td>
                                                                            <td>Item</td>
                                                                            <td>Item</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
