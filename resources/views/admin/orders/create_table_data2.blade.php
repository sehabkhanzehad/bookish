        <tr>
            <td><img src="/uploads/custom-images2/{{$variation->thumb_image}}" height="50" width="50"/></td>
            <td>{{ $variation->name }}</td>
            <input type="hidden" value="{{ $variation->name }}" name="product_name[]">
            <td>
            <select class="form-control color_data" id="var_size" name="variation[]">
                @foreach($color_array as $color_data)
                    <option value="{{ $color_data->size_id }}">{{ $color_data->size->title }}</option>
                @endforeach
            </select>
            @foreach($color_array as $key => $color_data)
            @if($key == 0)
            <input type="hidden" class="variation" value="{{ $color_data->size->title }}" name="variation_size[]" />
            @endif
            @endforeach
            <input type="hidden" class="pro_id" value="{{$pr_id}}">
            </td>
            <td>
            <select class="form-control" name="variation_color_id[]">
            @foreach($size_array as $size_data)
                <option value="{{ $size_data->color->name }}" data-color="{{ $size_data->color->name }}">{{ $size_data->color->name }}</option>
            @endforeach
            
            </select>
            
            @if(count($size_array))
            @foreach($size_array as $size_names)
                @if($size_names->color->name == $variation->variation_color_id)
                <input type="hidden" class="color_id" value="{{ $size_names->color->id }}" name="variation_color[]">
                @else
                ssssss
                @endif
            @endforeach
        @else
        <input type="hidden" class="color_id" value="1" name="variation_color[]">
        @endif
            
            </td>
            <td>
                <input class="form-control price" name="price[]" type="number" value="{{ $variation->price }}" required/>
            </td>
            <td>
                <input class="form-control offer_price" name="offer_price[]" type="number" value="{{ $variation->offer_price }}" required/>
            </td>
            <td>
                <input class="form-control" value="{{ $variation->discount_price }}" name="discount_price[]">
            </td>
            <td>
                <input class="form-control qty quantity" name="quantity[]" type="number" value="1" required min="1"/>
                <input type="hidden" class="form-control" name="product_id[]" value="{{$pr_id}}" required/>
            </td>
            <td class="row_total"> {{$variation->price}}</td>
            <td>
                <a href="#" class="remove btn btn-sm btn-danger"> Delete </a>
            </td>
        </tr>