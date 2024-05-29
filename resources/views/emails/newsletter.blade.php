<!DOCTYPE html>
<html>
<head>
    <title>{{ $subject }}</title>
</head>
<body>
    <p>{!! nl2br(e($content)) !!}</p>
    <h2>New Products</h2>
    <ul>
        @foreach($products as $product)
            <li>
                <strong>{{ $product->name }}</strong><br>
                {{ $product->description }}<br>
                <img src="{{ asset($product->Image) }}" alt="{{ $product->name }}" style="max-width: 100px;"><br>
                Price: ${{ $product->Prix }}
            </li>
        @endforeach
    </ul>
</body>
</html>
