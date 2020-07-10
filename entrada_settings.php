<?php



$tdataentrada = array();
$tdataentrada[".searchableFields"] = array();
$tdataentrada[".ShortName"] = "entrada";
$tdataentrada[".OwnerID"] = "";
$tdataentrada[".OriginalTable"] = "entrada";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );

$tdataentrada[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataentrada[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataentrada[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsentrada = array();
$fieldToolTipsentrada = array();
$pageTitlesentrada = array();
$placeHoldersentrada = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsentrada["Portuguese(Brazil)"] = array();
	$fieldToolTipsentrada["Portuguese(Brazil)"] = array();
	$placeHoldersentrada["Portuguese(Brazil)"] = array();
	$pageTitlesentrada["Portuguese(Brazil)"] = array();
	$fieldLabelsentrada["Portuguese(Brazil)"]["ID"] = "ID";
	$fieldToolTipsentrada["Portuguese(Brazil)"]["ID"] = "";
	$placeHoldersentrada["Portuguese(Brazil)"]["ID"] = "";
	$fieldLabelsentrada["Portuguese(Brazil)"]["Produto"] = "Produto";
	$fieldToolTipsentrada["Portuguese(Brazil)"]["Produto"] = "";
	$placeHoldersentrada["Portuguese(Brazil)"]["Produto"] = "";
	$fieldLabelsentrada["Portuguese(Brazil)"]["Unidade"] = "Unidade";
	$fieldToolTipsentrada["Portuguese(Brazil)"]["Unidade"] = "";
	$placeHoldersentrada["Portuguese(Brazil)"]["Unidade"] = "";
	$fieldLabelsentrada["Portuguese(Brazil)"]["Quantidade"] = "Quantidade";
	$fieldToolTipsentrada["Portuguese(Brazil)"]["Quantidade"] = "";
	$placeHoldersentrada["Portuguese(Brazil)"]["Quantidade"] = "";
	$fieldLabelsentrada["Portuguese(Brazil)"]["Data"] = "Data";
	$fieldToolTipsentrada["Portuguese(Brazil)"]["Data"] = "";
	$placeHoldersentrada["Portuguese(Brazil)"]["Data"] = "";
	$fieldLabelsentrada["Portuguese(Brazil)"]["Fornecedor"] = "Fornecedor";
	$fieldToolTipsentrada["Portuguese(Brazil)"]["Fornecedor"] = "";
	$placeHoldersentrada["Portuguese(Brazil)"]["Fornecedor"] = "";
	$pageTitlesentrada["Portuguese(Brazil)"]["add"] = "Recebimento de Produto";
	$pageTitlesentrada["Portuguese(Brazil)"]["edit"] = "Editar Recebimento de Produto [{%ID}]";
	$pageTitlesentrada["Portuguese(Brazil)"]["import"] = "Importar Recebimento de Produto";
	$pageTitlesentrada["Portuguese(Brazil)"]["list"] = "Recebimento de Produto";
	$pageTitlesentrada["Portuguese(Brazil)"]["print"] = "Recebimento de Produto";
	$pageTitlesentrada["Portuguese(Brazil)"]["search"] = "Recebimento de Produto - Busca Avancada";
	$pageTitlesentrada["Portuguese(Brazil)"]["view"] = "Recebimento de Produto [{%ID}]";
	if (count($fieldToolTipsentrada["Portuguese(Brazil)"]))
		$tdataentrada[".isUseToolTips"] = true;
}


	$tdataentrada[".NCSearch"] = true;



$tdataentrada[".shortTableName"] = "entrada";
$tdataentrada[".nSecOptions"] = 0;

$tdataentrada[".mainTableOwnerID"] = "";
$tdataentrada[".entityType"] = 0;

$tdataentrada[".strOriginalTableName"] = "entrada";

		 



$tdataentrada[".showAddInPopup"] = false;

$tdataentrada[".showEditInPopup"] = false;

$tdataentrada[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataentrada[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataentrada[".listAjax"] = false;
//	temporary
$tdataentrada[".listAjax"] = false;

	$tdataentrada[".audit"] = true;

	$tdataentrada[".locking"] = false;


$pages = $tdataentrada[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataentrada[".edit"] = true;
	$tdataentrada[".afterEditAction"] = 0;
	$tdataentrada[".closePopupAfterEdit"] = 1;
	$tdataentrada[".afterEditActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_ADD] ) {
$tdataentrada[".add"] = true;
$tdataentrada[".afterAddAction"] = 0;
$tdataentrada[".closePopupAfterAdd"] = 1;
$tdataentrada[".afterAddActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_LIST] ) {
	$tdataentrada[".list"] = true;
}



$tdataentrada[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataentrada[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataentrada[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataentrada[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataentrada[".printFriendly"] = true;
}



$tdataentrada[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataentrada[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataentrada[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataentrada[".isUseAjaxSuggest"] = true;

$tdataentrada[".rowHighlite"] = true;





$tdataentrada[".ajaxCodeSnippetAdded"] = false;

$tdataentrada[".buttonsAdded"] = false;

$tdataentrada[".addPageEvents"] = false;

// use timepicker for search panel
$tdataentrada[".isUseTimeForSearch"] = false;


$tdataentrada[".badgeColor"] = "E07878";


$tdataentrada[".allSearchFields"] = array();
$tdataentrada[".filterFields"] = array();
$tdataentrada[".requiredSearchFields"] = array();

$tdataentrada[".googleLikeFields"] = array();
$tdataentrada[".googleLikeFields"][] = "ID";
$tdataentrada[".googleLikeFields"][] = "Produto";
$tdataentrada[".googleLikeFields"][] = "Unidade";
$tdataentrada[".googleLikeFields"][] = "Quantidade";
$tdataentrada[".googleLikeFields"][] = "Data";
$tdataentrada[".googleLikeFields"][] = "Fornecedor";



$tdataentrada[".tableType"] = "list";

$tdataentrada[".printerPageOrientation"] = 0;
$tdataentrada[".nPrinterPageScale"] = 100;

$tdataentrada[".nPrinterSplitRecords"] = 40;

$tdataentrada[".geocodingEnabled"] = false;










$tdataentrada[".pageSize"] = 20;

$tdataentrada[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataentrada[".strOrderBy"] = $tstrOrderBy;

$tdataentrada[".orderindexes"] = array();

$tdataentrada[".sqlHead"] = "SELECT ID,  	Produto,  	Unidade,  	Quantidade,  	`Data`,  	Fornecedor";
$tdataentrada[".sqlFrom"] = "FROM entrada";
$tdataentrada[".sqlWhereExpr"] = "";
$tdataentrada[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataentrada[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataentrada[".arrGroupsPerPage"] = $arrGPP;

$tdataentrada[".highlightSearchResults"] = true;

$tableKeysentrada = array();
$tableKeysentrada[] = "ID";
$tdataentrada[".Keys"] = $tableKeysentrada;


$tdataentrada[".hideMobileList"] = array();




//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "entrada";
	$fdata["Label"] = GetFieldLabel("entrada","ID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
										

		$fdata["strField"] = "ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ID";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataentrada["ID"] = $fdata;
		$tdataentrada[".searchableFields"][] = "ID";
//	Produto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Produto";
	$fdata["GoodName"] = "Produto";
	$fdata["ownerTable"] = "entrada";
	$fdata["Label"] = GetFieldLabel("entrada","Produto");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "Produto";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Produto";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "produtos";
			$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"Unidade", 'lookupF'=>"Unidade");
	$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "Nome";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Nome";

	

	
	$edata["LookupOrderBy"] = "Nome";

	
	
	
	

	
	
	
// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataentrada["Produto"] = $fdata;
		$tdataentrada[".searchableFields"][] = "Produto";
//	Unidade
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Unidade";
	$fdata["GoodName"] = "Unidade";
	$fdata["ownerTable"] = "entrada";
	$fdata["Label"] = GetFieldLabel("entrada","Unidade");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "Unidade";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Unidade";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataentrada["Unidade"] = $fdata;
		$tdataentrada[".searchableFields"][] = "Unidade";
//	Quantidade
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Quantidade";
	$fdata["GoodName"] = "Quantidade";
	$fdata["ownerTable"] = "entrada";
	$fdata["Label"] = GetFieldLabel("entrada","Quantidade");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "Quantidade";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Quantidade";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataentrada["Quantidade"] = $fdata;
		$tdataentrada[".searchableFields"][] = "Quantidade";
//	Data
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Data";
	$fdata["GoodName"] = "Data";
	$fdata["ownerTable"] = "entrada";
	$fdata["Label"] = GetFieldLabel("entrada","Data");
	$fdata["FieldType"] = 7;

	
	
	
										

		$fdata["strField"] = "Data";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Data`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 5;
	$edata["InitialYearFactor"] = 1;
	$edata["LastYearFactor"] = 5;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataentrada["Data"] = $fdata;
		$tdataentrada[".searchableFields"][] = "Data";
//	Fornecedor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Fornecedor";
	$fdata["GoodName"] = "Fornecedor";
	$fdata["ownerTable"] = "entrada";
	$fdata["Label"] = GetFieldLabel("entrada","Fornecedor");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "Fornecedor";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Fornecedor";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataentrada["Fornecedor"] = $fdata;
		$tdataentrada[".searchableFields"][] = "Fornecedor";


$tables_data["entrada"]=&$tdataentrada;
$field_labels["entrada"] = &$fieldLabelsentrada;
$fieldToolTips["entrada"] = &$fieldToolTipsentrada;
$placeHolders["entrada"] = &$placeHoldersentrada;
$page_titles["entrada"] = &$pageTitlesentrada;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["entrada"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["entrada"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_entrada()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  	Produto,  	Unidade,  	Quantidade,  	`Data`,  	Fornecedor";
$proto0["m_strFrom"] = "FROM entrada";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
					
;
						$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "ID",
	"m_strTable" => "entrada",
	"m_srcTableName" => "entrada"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "entrada";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Produto",
	"m_strTable" => "entrada",
	"m_srcTableName" => "entrada"
));

$proto8["m_sql"] = "Produto";
$proto8["m_srcTableName"] = "entrada";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Unidade",
	"m_strTable" => "entrada",
	"m_srcTableName" => "entrada"
));

$proto10["m_sql"] = "Unidade";
$proto10["m_srcTableName"] = "entrada";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Quantidade",
	"m_strTable" => "entrada",
	"m_srcTableName" => "entrada"
));

$proto12["m_sql"] = "Quantidade";
$proto12["m_srcTableName"] = "entrada";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Data",
	"m_strTable" => "entrada",
	"m_srcTableName" => "entrada"
));

$proto14["m_sql"] = "`Data`";
$proto14["m_srcTableName"] = "entrada";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Fornecedor",
	"m_strTable" => "entrada",
	"m_srcTableName" => "entrada"
));

$proto16["m_sql"] = "Fornecedor";
$proto16["m_srcTableName"] = "entrada";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "entrada";
$proto19["m_srcTableName"] = "entrada";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "ID";
$proto19["m_columns"][] = "Produto";
$proto19["m_columns"][] = "Unidade";
$proto19["m_columns"][] = "Quantidade";
$proto19["m_columns"][] = "Data";
$proto19["m_columns"][] = "Fornecedor";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "entrada";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "entrada";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="entrada";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_entrada = createSqlQuery_entrada();


	
					
;

						

$tdataentrada[".sqlquery"] = $queryData_entrada;

$tableEvents["entrada"] = new eventsBase;
$tdataentrada[".hasEvents"] = false;

?>