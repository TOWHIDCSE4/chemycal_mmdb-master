<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableEnvironment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_environment', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('Substance_Name')->comment("Substance Name");
            $table->text('Chemical_Formula')->comment("Chemical Formula");
            $table->text('CAS_Number')->comment("CAS Number");
            $table->text('EC_Number')->comment("EC Number");
            $table->text('Metal_Compound')->comment("Metal Compound");
            $table->double('Molecular_Weight')->comment("Molecular Weight");
            $table->double('Particle_Size')->comment("Particle Size");
            $table->double('Water_Solubility')->comment("Water Solubility");
            $table->text('Water_Solubility_Method')->comment("Water Solubility Method");
            $table->text('ENV_Effects_Assessment_Based_On')->comment("ENV_Effects_Assessment_Based_On");
            $table->double('PNEC_Aqua_Value_1')->comment("PNEC_Aqua_Value_1");
            $table->text('PNEC_Aqua_Unit_1')->comment("PNEC_Aqua_Unit_1");
            $table->double('PNEC_Aqua_AF_1')->comment("PNEC_Aqua_AF_1");
            $table->text('PNEC_Aqua_Extrapolaton_Method_1')->comment("PNEC_Aqua_Extrapolaton_Method_1");
            $table->text('PNEC_Aqua_Justification_1')->comment("PNEC_Aqua_Justification_1");
            $table->double('PNEC_Aqua_Value_2')->comment("PNEC_Aqua_Value_2");
            $table->text('PNEC_Aqua_Unit_2')->comment("PNEC_Aqua_Unit_2");
            $table->double('PNEC_Aqua_AF_2')->comment("PNEC_Aqua_AF_2");
            $table->text('PNEC_Aqua_Extrapolaton_Method_2')->comment("PNEC_Aqua_Extrapolaton_Method_2");
            $table->text('PNEC_Aqua_Justification_2')->comment("PNEC_Aqua_Justification_2");
            $table->double('PNEC_STP_Value')->comment("PNEC_STP_Value");
            $table->text('PNEC_STP_Unit')->comment("PNEC_STP_Unit");
            $table->double('PNEC_STP_AF')->comment("PNEC_STP_AF");
            $table->text('PNEC_STP_Extrapolaton_Method')->comment("PNEC_STP_Extrapolaton_Method");
            $table->text('PNEC_STP_Justification')->comment("PNEC_STP_Justification");
            $table->double('PNEC_Sediment_Value_1')->comment("PNEC_Sediment_Value_1");
            $table->text('PNEC_Sediment_Unit_1')->comment("PNEC_Sediment_Unit_1");
            $table->double('PNEC_Sediment_AF_1')->comment("PNEC_Sediment_AF_1");
            $table->text('PNEC_Sediment_Extrapolaton_ethod_1')->comment("PNEC_Sediment_Extrapolaton_ethod_1");
            $table->text('PNEC_Sediment_Justification_1')->comment("PNEC_Sediment_Justification_1");
            $table->double('PNEC_Sediment_Value_2')->comment("PNEC_Sediment_Value_2");
            $table->text('PNEC_Sediment_Unit_2')->comment("PNEC_Sediment_Unit_2");
            $table->double('PNEC_Sediment_AF_2')->comment("PNEC_Sediment_AF_2");
            $table->text('PNEC_Sediment_Extrapolaton_ethod_2')->comment("PNEC_Sediment_Extrapolaton_ethod_2");
            $table->text('PNEC_Sediment_Justification_2')->comment("PNEC_Sediment_Justification_2");
            $table->double('PNEC_Soil_Value_1')->comment("PNEC_Soil_Value_1");
            $table->text('PNEC_Soil_Unit_1')->comment("PNEC_Soil_Unit_1");
            $table->double('PNEC_Soil_AF_1')->comment("PNEC_Soil_AF_1");
            $table->text('PNEC_Soil_Extrapolaton_Method_1')->comment("PNEC_Soil_Extrapolaton_Method_1");
            $table->text('PNEC_Soil_Justification_1')->comment("PNEC_Soil_Justification_1");
            $table->double('PNEC_Soil_Value_2')->comment("PNEC_Soil_Value_2");
            $table->text('PNEC_Soil_Unit_2')->comment("PNEC_Soil_Unit_2");
            $table->double('PNEC_Soil_AF_2')->comment("PNEC_Soil_AF_2");
            $table->text('PNEC_Soil_Extrapolaton_Method_2')->comment("PNEC_Soil_Extrapolaton_Method_2");
            $table->text('PNEC_Soil_Justification_2')->comment("PNEC_Soil_Justification_2");
            $table->text('PNEC_Discussion')->comment("PNEC_Discussion");
            $table->double('Kp_Susp_Freshwater')->comment("Kp_Susp_Freshwater");
            $table->double('Kp_Susp_Marine')->comment("Kp_Susp_Marine");
            $table->double('Kp_Susp_Estuary')->comment("Kp_Susp_Estuary");
            $table->double('Kp_Sed_Freshwater')->comment("Kp_Sed_Freshwater");
            $table->double('Kp_Sed_Marine')->comment("Kp_Sed_Marine");
            $table->double('Kp_Sed_Estuary')->comment("Kp_Sed_Estuary");
            $table->double('Kp_Soil')->comment("Kp_Soil");
            $table->double('Kp_Comments')->comment("Kp_Comments");
            $table->text('Bioaccumulation_Aquatic_Sediment')->comment("Bioaccumulation_Aquatic_Sediment");
            $table->text('Bioaccumulation_Aquatic_Sediment_Discussion')->comment("Bioaccumulation_Aquatic_Sediment_Discussion");
            $table->text('Bioaccumulation_Terretrial')->comment("Bioaccumulation_Terretrial");
            $table->text('Bioaccumulation_Terretrial_Discussion')->comment("Bioaccumulation_Terretrial_Discussion");
            $table->text('Document_Name')->comment("Document_Name");
            $table->text('Document_Description')->comment("Document_Description");
            $table->text('Documment_File')->comment("Documment_File");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_environment');
    }
}
