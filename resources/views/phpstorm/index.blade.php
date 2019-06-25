@extends('phpstorm.layout')

@section('title')
@endsection

@section('subtitle')
    PPCC - PhpStorm Project Color Changer
@endsection

@section('content')
    <div class="wt-row wt-row_size_m">
        @if (isset($message))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
{{--                <strong></strong>--}}
                <span>
                    {{ $message }}
                </span>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <div class="wt-col-8">
            <form action="{{ route('phpstorm.post') }}" method="POST" class="form form-inline" enctype="application/x-www-form-urlencoded">
                @csrf
                <table class="table table-bordered">
                    <tr>
                        <td>Carpeta del proyecto:</td>
                        <td class="text-right">
                            <input type="text" class="form-control" name="project_name" id="project_name" value="{{ $project_name }}" />
                        </td>
                    </tr>
                    <tr>
                        <td>Color</td>
                        <td class="text-right">
                            <input type="text" class="form-control" name="color" id="color" value="{{ $color }}" />
                        </td>
                    </tr>
                        <td colspan="2" class="text-right">
                            <input type="submit" class="btn btn-primary btn-dark" name="submit" id="submit" value="Cambiar color" />
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        alert('Hola')
    </script>
@endsection
