<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <style>
        .hidden {
            display: none;
        }
    </style>
    <button type="button" id="add">Add Other Members</button>
    <button type="button" id="add2">Add Other Members</button>
    <form action="{{ route('admin-dosen-post') }}" method="post">
        @csrf
        <div id="dynamic_field"></div><br><hr><br>
        <div id="dynamic_field2"></div>
        <input type="submit">
    </form>
    <button type="button" class="btn_remove hidden">Remove last</button>
    <button type="button" class="btn_remove2 hidden">Remove last</button>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        var i = 1;
        $('#add').click(function() {
            if (i <= 7) {
            $('#dynamic_field').append('<div id="row' + i + '"><label" for="member_' + i + '">Member ' + i + '</label><input type="text" name="member_' + i + '" value="member_' + i + '"></div>')
            i++;
            $('.btn_remove').removeClass('hidden');
            }
        });
        $(document).on('click', '.btn_remove', function() {
            var button_id = $(this).attr("id");
            console.log('1 => '.button_id);
            i--;
            $('#row' + $('#dynamic_field div').length).remove();
            if (i<=1) {
            $('.btn_remove').addClass('hidden');
            }
        });
    });
    $(document).ready(function() {
        var o = 1;
        $('#add2').click(function() {
            if (o <= 7) {
            $('#dynamic_field2').append('<div id="row' + o + '"><label" for="exp_' + o + '">Member ' + o + '</label><input type="text" name="exp_' + o + '" value="exp_' + o + '"></div>')
            o++;
            $('.btn_remove2').removeClass('hidden');
            }
        });
        $(document).on('click', '.btn_remove2', function() {
            var button_id2 = $(this).attr("id");
            console.log('2 => '.button_id2);
            o--;
            $('#row' + $('#dynamic_field2 div').length).remove();
            if (o<=1) {
            $('.btn_remove2').addClass('hidden');
            }
        });
    });
    </script>
</html>