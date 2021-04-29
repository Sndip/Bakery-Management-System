
<style>
   @import url(//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);
fieldset, label { margin: 0; padding: 0; }
body{ margin: 20px; }
h1 { font-size: 1.5em; margin: 10px; }

/****** Style Star Rating Widget *****/

.rating { 
  border: none;
  float: left;
}

.rating > input { display: none; } 
.rating > label:before { 
  margin: 5px;
  font-size: 1.25em;
  font-family: FontAwesome;
  display: inline-block;
  content: "\f005";
}

.rating > .half:before { 
  content: "\f089";
  position: absolute;
}

.rating > label { 
  color: #ddd; 
 float: right; 
}

/***** CSS Magic to Highlight Stars on Hover *****/

.rating > input:checked ~ label, /* show gold star when clicked */


.rating > input:checked ~ label:hover,

.rating > input:checked ~ label:hover ~ label { color: #FFED85;  } 
#elmt {
    pointer-events : none;
}
</style>
<fieldset class="rating">
    <input type="radio" id="star5 elmt" name="rate" value="5" / <?php if($avg>4.5){echo "checked"; } ?>><label class = "full" for="star5" title="Awesome - 5 stars"></label>
    <input type="radio" id="star4half elmt" name="rate" value="4.5" / <?php if($avg>4 && $avg<=4.5){echo "checked"; } ?>><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
    <input type="radio" id="star4 elmt" name="rate" value="4" / <?php if($avg>3.5 && $avg<=4){echo "checked"; } ?>><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
    <input type="radio" id="star3half elmt" name="rate" value="3.5" / <?php if($avg>3 && $avg<=3.5){echo "checked"; } ?>><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
    <input type="radio" id="star3 elmt" name="rate" value="3" / <?php if($avg>2.5 && $avg<=3){echo "checked"; } ?>><label class = "full" for="star3" title="Meh - 3 stars"></label>
    <input type="radio" id="star2half elmt" name="rate" value="2.5" / <?php if($avg>2 && $avg<=2.5){echo "checked"; } ?>><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
    <input type="radio" id="star2 elmt" name="rate" value="2" / <?php if($avg>1.5 && $avg<=2){echo "checked"; } ?>><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
    <input type="radio" id="star1half elmt" name="rate" value="1.5" /  <?php if($avg>1 && $avg<=1.5){echo "checked"; } ?>><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
    <input type="radio" id="star1 elmt" name="rate" value="1" /  <?php if($avg>0.5 && $avg<=1){echo "checked"; } ?>><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
    <input type="radio" id="starhalf elmt" name="rate" value="0.5" /  <?php if($avg>0 && $avg<=0.5){echo "checked"; } ?>><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
</fieldset>

