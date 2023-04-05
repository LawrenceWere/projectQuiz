<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Online Quiz For Your Aircraft License</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
    </head>
    <body>
        <div class="main">
            <div class="row">
                <div class="container">
                    <h2>{{$heading}}</h2>

                    @unless(count($listings) == 0)
                        @foreach($listings as $listing)
                        <h4>
                            <a href = "/listings/{{$listing['id']}}" >{{$listing['title']}}</a>
                        </h4>
                        <p>
                            {{$listing['description']}}
                        </p>
                        @endforeach 
                    @else
                        <p>No Listings Founds</p>
                    @endunless  
        
                </div>
            </div>
        </div>
    </body>
</html>
