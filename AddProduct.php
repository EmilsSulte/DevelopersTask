
<b><span class="Headline2">Add Product</span></b>
<hr class="hr1">
<hr class="hr2">
<input class="Pogas" id="button_3" name="Save_button" type="button" value="Save">
<input onclick="GoBack()" class="Pogas" id="button_4" name="Cancel_button" type="button" value="Cancel">
<text id="SKU" class="text1">
    SKU
</text>
<text id="Name" class="text2">
    Name
</text>
<text id="Price" class="text3">
    Price ($)
</text>
<input class="placeholder" pattern="[A-Z;0-9]{9}" title="SKU must be unique" id="Input_box" name="UI_box"
    placeholder="Unique ID for the product">
<input class="placeholder" pattern="[A-Za-z]{4-15}" title="Name must contain only letters" id="Input_box2" name="UI_box"
    placeholder="Name the product">
<input class="placeholder" pattern="[0-9]{1-2}" title="Price must only contain numbers" id="Input_box3" name="UI_box"
    placeholder="Insert a reasonable price">
<text id="Type" class="Switcher">
    Type Switcher
</text>
<select class="List_box" id="UI_List_Box" onchange="getForm(this)" name="List_box" size="1">
    <option value="1">DISC</option>
    <option value="2">BOOK</option>
    <option value="3">CHAIR</option>
</select>
<div id="Class_1" class="Form_1" style="display: none;">
    <input id="Acme_Disc" class="Form_1" name="UI_box4">
    <text id="Descript1" class="Form_1">
        Please provide the size of the DISC in MB
    </text>
</div>
<div id="Class_3" class="Form_3" style="display: none;">
    <text id="Descript3" class="Form_3">
        Height (CM)
    </text>
    <input id="Chair_box" class="Form_3" name="UI_box5">
    <text id="Descript31" class="Form_3">
        Width (CM)
    </text>
    <input id="Chair_box2" class="Form_3" name="UI_box6">
    <text id="Descript32" class="Form_3">
        Length (CM)
    </text>
    <input id="Chair_box3" class="Form_3" name="UI_box7">
    <text id="Descript33" class="Form_3">
        Please, provide dimensions!
    </text>
</div>
<div id="Class_2" class="Form_2" style="display: none;">
    <text id="Descript2" class="Form_2">
        Weight (KG)
    </text>
    <input id="Book_box" class="Form_2" name="UI_box8">
    <text id="Descript22" class="Form_2">
        Please, provide weight!
    </text>


</div>