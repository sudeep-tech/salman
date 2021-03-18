<div class="reviews-content-left">
    <h2>Customer Reviews</h2>
    @if(isset($review_data[0]) && !empty(@$review_data))
    @foreach($review_data as $ind_product_review)
    <div class="review-ratting">
    <p>@if(isset($ind_product_review->summary))<a href="#">{{@$ind_product_review->summary}} </a>@endif Review by @if(isset($ind_product_review->user->name)) {{@$ind_product_review->user->name}} @else Customer @endif</p>
    <table>
        <tbody>
        <tr>
            <th>Price: </th>
            <td>
            <div class="rating">@for($i=1;$i<=@$ind_product_review->price_rate;$i++) <i class="fa fa-star"></i>@endfor  
                @for($i=1;$i<=(5-$ind_product_review->price_rate);$i++) <i class="fa fa-star-o"></i> @endfor
            </div>
            </td>
        
            <th> &nbsp; | Value: </th>
            <td>
            <div class="rating">@for($i=1;$i<=@$ind_product_review->value_rate;$i++) <i class="fa fa-star"></i>@endfor  
                @for($i=1;$i<=(5-$ind_product_review->value_rate);$i++) <i class="fa fa-star-o"></i> @endfor
            </div>
            </td>
        
            <th> &nbsp;| Quality: </th>
            <td>
            <div class="rating">@for($i=1;$i<=@$ind_product_review->quality_rate;$i++) <i class="fa fa-star"></i>@endfor  
                @for($i=1;$i<=(5-$ind_product_review->quality_rate);$i++) <i class="fa fa-star-o"></i> @endfor
            </div>
            </td>
        </tr>
        </tbody>
    </table>
    <p class="author"> {!! @$ind_product_review->review !!}<small> (Posted on {{@$ind_product_review->updated_at->format('d M, Y')}})</small> </p>
    </div>
    @endforeach
    @else
        <div class="review-ratting">
            <h4 >No Review Yet</h4>
        </div>
    @endif
    
</div>
  
                       
{!! $review_data->render() !!}