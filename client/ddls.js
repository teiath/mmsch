//$(document).ready(function() {	
function ddls(){
	
		$("#src_category").kendoMultiSelect({
        dataTextField: "name",
        dataValueField: "category_id",
        optionLabel: "Επιλέξτε...",
        //dataSource: dsCategories,
		dataSource: inMemoryCategories,
        autoBind: true,
        change: function() {

            var value = this.value();
            $('#src_category').val(value);

			if (!$.isNumeric( value ) ){
				$("#src_orientationType").data('kendoMultiSelect').dataSource.filter({});
				$("#src_operationShift").data('kendoMultiSelect').dataSource.filter({});
				$("#src_specialType").data('kendoMultiSelect').dataSource.filter({});
				$("#src_unitType").data('kendoMultiSelect').dataSource.filter({});
				$("#src_legalCharacter").data('kendoMultiSelect').dataSource.filter({});
			}
			else{
				//
			}
			var selected = $("#src_category").data('kendoMultiSelect').value();
			
			if (selected.length > 0 ){
				
				var normalizedFilter = new Array();
                normalizedFilter.push({'field': "category_id", 'value': -1});
				
				$.each(selected, function(index, value) {
                	normalizedFilter.push({'field': "category_id", 'value': value});
                });
				
				$("#src_orientationType").data('kendoMultiSelect').dataSource.filter({
                	logic: "or",
                	filters: normalizedFilter
                });

                $("#src_operationShift").data('kendoMultiSelect').dataSource.filter({
                	logic: "or",
                	filters: normalizedFilter
                });
				
				$("#src_specialType").data('kendoMultiSelect').dataSource.filter({
                	logic: "or",
                	filters: normalizedFilter
                });
				
				$("#src_unitType").data('kendoMultiSelect').dataSource.filter({
                	logic: "or",
                	filters: normalizedFilter
                });
				
				$("#src_legalCharacter").data('kendoMultiSelect').dataSource.filter({
                	logic: "or",
                	filters: normalizedFilter
                });
			}
			else {
				$("#src_orientationType").data('kendoMultiSelect').dataSource.filter({});
				$("#src_operationShift").data('kendoMultiSelect').dataSource.filter({});
				$("#src_specialType").data('kendoMultiSelect').dataSource.filter({});
				$("#src_unitType").data('kendoMultiSelect').dataSource.filter({});
				$("#src_legalCharacter").data('kendoMultiSelect').dataSource.filter({});
			}           
        },
        dataBound: function() {
            //var totalItems = this.dataSource.total();
            //var lbl = this.element.parent().prev();
            //lbl.find('.badge').html(totalItems);
        }
    });

		$("#src_educationLevel").kendoMultiSelect({
        dataTextField: "name",
        dataValueField: "education_level_id",
        optionLabel: "Επιλέξτε...",
        //dataSource: dsEducationLevels,
		dataSource: inMemoryΕducationLevels,
        autoBind: true,
        change: function() {
            var value = this.value();
            $('#src_educationLevel').val(value);

			if (!$.isNumeric( value ) ){
                $("#src_unitType").data('kendoMultiSelect').dataSource.filter({});
            }
			
			var selected = $("#src_educationLevel").data('kendoMultiSelect').value();
			
			if (selected.length > 0 ){
				
				var normalizedFilter = new Array();

                $.each(selected, function(index, value) {
                	normalizedFilter.push({'field': "education_level_id", 'value': value});
                });

                $("#src_unitType").data('kendoMultiSelect').dataSource.filter({
                	logic: "or",
                	filters: normalizedFilter
                });
			}
			else {
                //$("#src_transferArea").data('kendoMultiSelect').dataSource.filter({});
                //$("#src_regionEduAdmin").data('kendoMultiSelect').trigger('change');
			}
			/*
            var ddlUnitType = $('#src_unitType').data('kendoMultiSelect');
            var ddlCategory = $('#src_category').data('kendoMultiSelect');

            if (value) {
                dsUnitTypes
                        .one('change', function() {
                    ddlUnitType.current(null);
                })
                        .filter({
                    'education_level': value,
                    'category': ddlCategory.value()
                });

                ddlUnitType.enable();
            } else {
                ddlUnitType.enable(false);
            }
			*/
            
        },
        dataBound: function() {
            /*
             var totalItems = this.dataSource.total();
             var lbl = this.element.parent().prev();
             lbl.find('.badge').html(totalItems);
             */
        }
    });

		$("#src_unitType").kendoMultiSelect({
        dataTextField: "name",
        dataValueField: "unit_type_id",
        optionLabel: "Επιλέξτε...",
        dataSource: inMemoryUnitTypes,
        //autoBind: false,
        change: function() {
            var value = this.value();
            $('#src_unitType').val(value);
        },
        dataBound: function() {
            //var totalItems = this.dataSource.total();
            //var lbl = this.element.parent().prev();
            //lbl.find('.badge').html(totalItems);
        }
    });

    
		$("#src_regionEduAdmin").kendoMultiSelect({
            dataTextField: "name",
            dataValueField: "region_edu_admin_id",
            optionLabel: "Επιλέψτε...",
            //dataSource: dsRegionEduAdmins,
            dataSource: inMemoryRegionEduAdmins.data(),
            //autoBind: true,
            change: function() {
                var value = this.value();
                $('#src_regionEduAdmin').val(value);

                //$("#src_eduAdmin").data('kendoMultiSelect').enable(true);
                //$("#src_transferArea").data('kendoMultiSelect').enable(true);

                if (!$.isNumeric( value ) ){
                	$("#src_eduAdmin").data('kendoMultiSelect').dataSource.filter({});
                	$("#src_transferArea").data('kendoMultiSelect').dataSource.filter({});
                }
                else {
                    //$selected = 
                	//$("#src_eduAdmin").data('kendoDropDownList').dataSource.filter({'field': "region_edu_admin_id", 'value': value});
                	//$("#src_transferArea").data('kendoDropDownList').dataSource.filter({'field': "region_edu_admin_id", 'value': value});
                }

                var selected = $("#src_regionEduAdmin").data('kendoMultiSelect').value();

                if (selected.length > 0 ){

                	var normalizedFilter = new Array();
                	normalizedFilter.push({'field': "region_edu_admin_id", 'value': -1});

                	$.each(selected, function(index, value) {
                		normalizedFilter.push({'field': "region_edu_admin_id", 'value': value});
                	});

                	$("#src_eduAdmin").data('kendoMultiSelect').dataSource.filter({
                		logic: "or",
                		filters: normalizedFilter
                	});

                	$("#src_transferArea").data('kendoMultiSelect').dataSource.filter({
                		logic: "or",
                		filters: normalizedFilter
                	});
                }
                else {
                	$("#src_eduAdmin").data('kendoMultiSelect').dataSource.filter({});
                	$("#src_transferArea").data('kendoMultiSelect').dataSource.filter({});
                }
            },
            dataBound: function() {
                //var totalItems = this.dataSource.total();
                //var lbl = this.element.parent().prev();
                //lbl.find('.badge').html(totalItems);
            }
        });
        //$src_regionEduAdmin.data('kendoMultiSelect').dataSource.insert(0, { region_edu_admin_id: -1, name: "--Χωρίς Περιφέρεια--" });

        $("#src_eduAdmin").kendoMultiSelect({
            cascadeFrom: "src_regionEduAdmin",
            dataTextField: "short_name",
            dataValueField: "edu_admin_id",
            optionLabel: "Επιλέξτε...",
            //dataSource: inMemoryEduAdmins.data(),
            //dataSource: inMemoryEduAdmins.data(),
			dataSource: inMemoryEduAdmins.data(),
            //dataSource: dsEduAdmins,
            //autoBind: false,
            autoBind: true,
            change: function() {
                var value = this.value();
                $('#src_eduAdmin').val(value);
                //$("#src_eduAdmin").data('kendoDropDownList').enable(true);
                //$("#src_transferArea").data('kendoMultiSelect').enable(true);

                if (!$.isNumeric( value ) ){
                	$("#src_transferArea").data('kendoMultiSelect').dataSource.filter({});
                }

                var selected = $("#src_eduAdmin").data('kendoMultiSelect').value();

                if (selected.length > 0 ){

                	var normalizedFilter = new Array();

                	$.each(selected, function(index, value) {
                		normalizedFilter.push({'field': "edu_admin_id", 'value': value});
                	});

                	$("#src_transferArea").data('kendoMultiSelect').dataSource.filter({
                		logic: "or",
                		filters: normalizedFilter
                	});
                }
                else {
                	//$("#src_transferArea").data('kendoMultiSelect').dataSource.filter({});
                	$("#src_regionEduAdmin").data('kendoMultiSelect').trigger('change');
                }
            },
            open: function() {
            	//$("#src_eduAdmin").data('kendoDropDownList').enable(true);
                /*var totalItems = this.dataSource.total();
                 var lbl = this.element.parent().prev();
                 lbl.find('.badge').html(totalItems);*/
                
                //this.dataSource.insert(0, { edu_admin_id: -1, name: "--Χωρίς Διεύθυνση εκπαίδευσης--" });
            }
        });
        
		//$("#src_eduAdmin").data('kendoMultiSelect').enable(true);

        $("#src_transferArea").kendoMultiSelect({
            //cascadeFrom: "src_regionEduAdmin",
            dataTextField: "name",
            dataValueField: "transfer_area_id",
            optionLabel: "Επιλέξτε...",
            dataSource: inMemoryTransferAreas,
            autoBind: true,
            change: function() {
                var value = this.value();
                $('#src_transferArea').val(value);
            },
            dataBound: function() {
                //var totalItems = this.dataSource.total();
                //var lbl = this.element.parent().prev();
                //lbl.find('.badge').html(totalItems);
            }
        });
        
		//$("#src_transferArea").data('kendoMultiSelect').enable(true);

        $("#src_orientationType").kendoMultiSelect({
            cascadeFrom: "src_category",
			dataTextField: "name",
            dataValueField: "orientation_type_id",
            optionLabel: "Επιλέξτε...",
            dataSource: inMemoryOrientationTypes,
			/*
			dataSource: new kendo.data.DataSource({
                serverFiltering: true,
                transport: tsOrientationTypes,
                schema: {
                    data: "data",
                    total: "total"
                }
            }),
			*/
            autoBind: false,
            change: function() {
                var value = this.value();
                $('#src_orientationType').val(value);
				
				var selected = $("#src_orientationType").data('kendoMultiSelect').value();
				
				if (selected.length > 0 ){
				}
				else {
                	$("#src_category").data('kendoMultiSelect').trigger('change');
                }
            },
            dataBound: function() {
                //var totalItems = this.dataSource.total();
                //var lbl = this.element.parent().prev();
                //lbl.find('.badge').html(totalItems);
            }
        });

        $("#src_operationShift").kendoMultiSelect({
            cascadeFrom: "src_category",
			dataTextField: "name",
            dataValueField: "operation_shift_id",
            optionLabel: "Επιλέξτε...",
            dataSource: inMemoryOperationShifts,
			/*
			dataSource: new kendo.data.DataSource({
                serverFiltering: true,
                transport: tsOperationShifts,
                schema: {
                    data: "data",
                    total: "total"
                }
            }),
			*/
            autoBind: false,
            change: function() {
                var value = this.value();
                $('#src_operationShift').val(value);
				
				var selected = $("#src_operationShift").data('kendoMultiSelect').value();
				
				if (selected.length > 0 ){
				}
				else {
                	$("#src_category").data('kendoMultiSelect').trigger('change');
                }
            },
            dataBound: function() {
                //var totalItems = this.dataSource.total();
                //var lbl = this.element.parent().prev();
                //lbl.find('.badge').html(totalItems);
            }
        });

        $("#src_prefecture").kendoMultiSelect({
            dataTextField: "name",
            dataValueField: "prefecture_id",
            optionLabel: "Επιλέξτε...",
            /*
            dataSource: new kendo.data.DataSource({
                serverFiltering: true,
                transport: tsPrefectures,
                schema: {
                    data: "data",
                    total: "total"
                }
            }),
            */
            dataSource: inMemoryPrefectures.data(),
            autoBind: true,
            change: function() {
                var value = this.value();
                $('#src_prefecture').val(value);

                //var ddlMunicipality = $('#src_municipality').data('kendoDropDownList');
				$("#src_municipality").data('kendoMultiSelect').enable(true);

                if (!$.isNumeric( value ) ){
                	$("#src_municipality").data('kendoMultiSelect').dataSource.filter({});
                }
                else {
                    //
                }

                var selected = $("#src_prefecture").data('kendoMultiSelect').value();
				
				if (selected.length > 0 ){
				
					var normalizedFilter = new Array();
                	normalizedFilter.push({'field': "prefecture_id", 'value': -1});

                	$.each(selected, function(index, value) {
                		normalizedFilter.push({'field': "prefecture_id", 'value': value});
                	});

                	$("#src_municipality").data('kendoMultiSelect').dataSource.filter({
                		logic: "or",
                		filters: normalizedFilter
                	});
				}
				else {
					$("#src_municipality").data('kendoMultiSelect').dataSource.filter({});
				}

            },
            dataBound: function() {
                //var totalItems = this.dataSource.total();
                //var lbl = this.element.parent().prev();
                //lbl.find('.label').html(totalItems);
            }
        });

        $("#src_municipality").kendoMultiSelect({
            cascadeFrom: "src_prefecture",
			dataTextField: "name",
            dataValueField: "municipality_id",
            optionLabel: "Επιλέξτε...",
            dataSource: inMemoryMunicipalities.data(),
			/*
			dataSource: new kendo.data.DataSource({
                serverFiltering: true,
                transport: tsMunicipalities,
                schema: {
                    data: "data",
                    total: "total"
                }
            }),
			*/
            autoBind: false,
            change: function() {
                var value = this.value();
                $('#src_municipality').val(value);
				
				var selected = $("#src_municipality").data('kendoMultiSelect').value();
				
				if (selected.length > 0 ){
				}
				else {
                	$("#src_prefecture").data('kendoMultiSelect').trigger('change');
                }
            },
            dataBound: function() {
                //var totalItems = this.dataSource.total();
                //var lbl = this.element.parent().prev();
                //lbl.find('.label').html(totalItems);
            }
        });

        $("#src_implementationEntity").kendoMultiSelect({
            dataTextField: "initials",
            dataValueField: "implementation_entity_id",
            optionLabel: "Επιλέξτε...",
            //dataSource: inMemoryImplEnt.data(),
			dataSource: staticData.ImplEnt.data,
            /*
             dataSource: new kendo.data.DataSource({
             serverFiltering: true,
             transport: tsImplementationEntities,
             schema: {
             data: "data",
             total: "total"
             }
             }),
             autoBind: true,
             */
            change: function() {
                var value = this.value();
                $('#src_implementationEntity').val(value);
            },
            dataBound: function() {
                //var totalItems = this.dataSource.total();
                //var lbl = this.element.parent().prev();
                //lbl.find('.badge').html(totalItems);
            }
        });

        $("#src_source").kendoMultiSelect({
            dataTextField: "name",
            dataValueField: "source_id",
            optionLabel: "Επιλέξτε...",
            dataSource: inMemorySources,
			/*
			dataSource: new kendo.data.DataSource({
                serverFiltering: true,
                transport: tsSources,
                schema: {
                    data: "data",
                    total: "total"
                }
            }),
			*/
            autoBind: true,
            change: function() {
                var value = this.value();
				$('#src_source').val(value);
            },
            dataBound: function() {
                //var totalItems = this.dataSource.total();
                //var lbl = this.element.parent().prev();
                //lbl.find('.badge').html(totalItems);
            }
        });

        $("#src_state").kendoMultiSelect({
            dataTextField: "name",
            dataValueField: "state_id",
            optionLabel: "Επιλέξτε...",
			//dataSource: inMemoryStates,
			dataSource: staticData.States.data,
			/*
            dataSource: new kendo.data.DataSource({
                serverFiltering: true,
                transport: tsStates,
                schema: {
                    data: "data",
                    total: "total"
                }
            }),
			*/
            index: 0,
            autoBind: true,
            change: function() {
                var value = this.value();
                $('#src_state').val(value);
            },
            dataBound: function() {
                //var totalItems = this.dataSource.total();
                //var lbl = this.element.parent().prev();
                //lbl.find('.badge').html(totalItems);

                //this.select(1);
                this.trigger('change');
            }
        });

        $("#src_specialType").kendoMultiSelect({
            cascadeFrom: "src_category",
			dataTextField: "name",
            dataValueField: "special_type_id",
            optionLabel: "Επιλέξτε...",
			dataSource: inMemorySpecialTypes,
			/*
            dataSource: new kendo.data.DataSource({
                serverFiltering: true,
                transport: tsSpecialTypes,
                schema: {
                    data: "data",
                    total: "total"
                }
            }),
			*/
            autoBind: false,
            change: function() {
                var value = this.value();
                $('#src_specialType').val(value);
				
				var selected = $("#src_specialType").data('kendoMultiSelect').value();
				
				if (selected.length > 0 ){
				}
				else {
                	$("#src_category").data('kendoMultiSelect').trigger('change');
                }
            },
            dataBound: function() {
                //var totalItems = this.dataSource.total();
                //var lbl = this.element.parent().prev();
                //lbl.find('.badge').html(totalItems);
            }
        });
		
		$("#src_legalCharacter").kendoMultiSelect({
            cascadeFrom: "src_category",
			dataTextField: "name",
            dataValueField: "legal_character_id",
            optionLabel: "Επιλέξτε...",
			dataSource: staticData.LegalCharacters.data,
            autoBind: false,
            change: function() {
                var value = this.value();
                $('#src_legalCharacter').val(value);
				
				var selected = $("#src_legalCharacter").data('kendoMultiSelect').value();
				
				if (selected.length > 0 ){
				}
				else {
                	$("#src_category").data('kendoMultiSelect').trigger('change');
                }
            }
        });
}

function destroyDDL(){
	
	
	$("#src_category").data('kendoMultiSelect').destroy();
	$("#src_educationLevel").data('kendoMultiSelect').destroy();
	$("#src_unitType").data('kendoMultiSelect').destroy();
	$("#src_regionEduAdmin").data('kendoMultiSelect').destroy();
	$("#src_eduAdmin").data('kendoMultiSelect').destroy();
	$("#src_transferArea").data('kendoMultiSelect').destroy();
	$("#src_orientationType").data('kendoMultiSelect').destroy();
	$("#src_operationShift").data('kendoMultiSelect').destroy();
	$("#src_prefecture").data('kendoMultiSelect').destroy();
	$("#src_municipality").data('kendoMultiSelect').destroy();
	$("#src_implementationEntity").data('kendoMultiSelect').destroy();
	$("#src_source").data('kendoMultiSelect').destroy();
	$("#src_state").data('kendoMultiSelect').destroy();
	$("#src_specialType").data('kendoMultiSelect').destroy();
	$("#src_legalCharacter").data('kendoMultiSelect').destroy();
	
	
	$("#myModal").remove();
}
//});