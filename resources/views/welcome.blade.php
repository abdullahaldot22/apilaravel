<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <style>
            nav div:last-of-type div:last-of-type span:first-of-type{
                display: none;
            }
        </style>

    </head>
    <body>
        <h2>laravel</h2>
        <p>
        {{-- <table>
            <thead>
                <tr>
                    <th>user name</th>
                    <th>skill type</th>
                    <th>skill</th>
                    <th>created at</th>
                </tr>
            </thead>
            <tbody> --}}
                @foreach ($data as $user)
                    {{ $user->name }}<br>
                    @foreach ($user->tags as $tag)
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        {{ $tag->name }}&nbsp;&nbsp;{{ $tag->pivot->post_id }}<br>
                    @endforeach
                @endforeach
            {{-- </tbody>


        </table> --}}
            {{-- {{ $data->name }}
            @foreach($data->tags as $dat)
            <div class="" style="display: block">
                <p style="margin: 0px; display: inline;">{{$dat->name}}</p>
                <p style="margin: 0px; display: inline;">{{$dat->pivot->created_at}}</p>
            </div>
            @endforeach --}}
            {{-- <p>{{$data->links()}}</p> --}}

        </p>
    </body>
</html>
