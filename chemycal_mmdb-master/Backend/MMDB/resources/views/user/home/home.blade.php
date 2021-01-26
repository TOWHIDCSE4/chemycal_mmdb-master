@extends('user.home.base')

@section('title')
    HOME
@endsection

@section('css-define')

@endsection

@section('content')
    <!--app-content open-->
    <div class="app-content">
        <div class="side-app">

            <!-- PAGE-HEADER -->
            <div class="page-header" style="background-color: #0B508E">
                <div class="w-100">
                    <div style="width: 40%; display: inline-block;">
                        <input type="text" class="form-control" placeholder="Substance Name">
                    </div>
                    <div style="float: right">
                        <button type="button" class="btn btn-info w-100 side-menu__label">METAL FAMILY</button>
                    </div>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <!-- ROW -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xl-12">
                            <div class="card">
                                <div class="container-sub">
                                    {{--SUBSTANCE IDENTITY--}}
                                    <section id="substanceIdentity" class="section-container">
                                        <table style="width:100%">
                                            <tbody>
                                            <tr>
                                                <th>SUBSTANCE IDENTITY</th>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Substance name:</td>
                                                <td><input class="form-control col-md-6" name="input"
                                                           type="text"></td>
                                            </tr>
                                            <tr>
                                                <td>Chemical Formula:</td>
                                                <td><input class="form-control col-md-6" name="input"
                                                           type="text"></td>
                                            </tr>
                                            <tr>
                                                <td>CAS number:</td>
                                                <td><input class="form-control col-md-6" name="input"
                                                           type="text"></td>
                                            </tr>
                                            <tr>
                                                <td>EC number:</td>
                                                <td><input class="form-control col-md-6" name="input"
                                                           type="text"></td>
                                            </tr>
                                            <tr>
                                                <td>Metal/Metal Compound:</td>
                                                <td><input class="form-control col-md-6" name="input"
                                                           type="text"></td>
                                            </tr>
                                            <tr>
                                                <td>Molecular weight (g/mol):</td>
                                                <td><input class="form-control col-md-6" name="input"
                                                           type="text"></td>
                                            </tr>
                                            <tr>
                                                <td>Particle size (μm):</td>
                                                <td><textarea class="form-control col-md-6"></textarea></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </section>
                                    <hr>
                                    {{--CLASSIFICATION--}}
                                    <section id="classification" class="section-container">
                                        <table>
                                            <thead>
                                            <th>CLASSIFICATION</th>
                                            </thead>
                                            <tbody>
                                            {{--Physical / chemical classification--}}
                                            <tr>
                                                <th id="phydicalChemical">Physical / chemical classification</th>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th></th>
                                                <td class="title-table">Classification</td>
                                                <td class="title-table">Classification type</td>
                                            </tr>
                                            <tr>
                                                <td>Explosive:</td>
                                                <td>
                                                    <input class="form-control" name="input" type="text"></td>
                                                <td>
                                                    <input class="form-control" name="input" type="text">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Flammable gases:</td>
                                                <td><input class="form-control" name="input" type="text"></td>
                                                <td><input class="form-control" name="input" type="text"></td>
                                            </tr>
                                            <tr>
                                                <td>Flammable aerosol:</td>
                                                <td><input class="form-control" name="input" type="text"></td>
                                                <td><input class="form-control" name="input" type="text"></td>
                                            </tr>
                                            <tr>
                                                <td>Gases under pressure:</td>
                                                <td><input class="form-control" name="input" type="text"></td>
                                                <td><input class="form-control" name="input" type="text"></td>
                                            </tr>
                                            <tr>
                                                <td>Flammable liquids:</td>
                                                <td><input class="form-control" name="input" type="text"></td>
                                                <td><input class="form-control" name="input" type="text"></td>
                                            </tr>
                                            <tr>
                                                <td>Flammable solids:</td>
                                                <td><input class="form-control" name="input" type="text"></td>
                                                <td><input class="form-control" name="input" type="text"></td>
                                            </tr>
                                            <tr>
                                                <td>Self-reactive substances and mixtures:</td>
                                                <td><input class="form-control" name="input" type="text"></td>
                                                <td><input class="form-control" name="input" type="text"></td>
                                            </tr>
                                            <tr>
                                                <td>Pyrophoric liquids:</td>
                                                <td><input class="form-control" name="input" type="text"></td>
                                                <td><input class="form-control" name="input" type="text"></td>
                                            </tr>
                                            <tr>
                                                <td>Pyrophoric solids:</td>
                                                <td><input class="form-control" name="input" type="text"></td>
                                                <td><input class="form-control" name="input" type="text"></td>
                                            </tr>
                                            <tr>
                                                <td>Self-heating substances:</td>
                                                <td><input class="form-control" name="input" type="text"></td>
                                                <td><input class="form-control" name="input" type="text"></td>
                                            </tr>
                                            <tr>
                                                <td>Substances and mixtures which in contact with water emit
                                                    flammable gases:
                                                </td>
                                                <td><input class="form-control" name="input" type="text"></td>
                                                <td><input class="form-control" name="input" type="text"></td>
                                            </tr>
                                            <tr>
                                                <td>Oxidising liquids:</td>
                                                <td><input class="form-control" name="input" type="text"></td>
                                                <td><input class="form-control" name="input" type="text"></td>
                                            </tr>
                                            <tr>
                                                <td>Oxidising solids:</td>
                                                <td><input class="form-control" name="input" type="text"></td>
                                                <td><input class="form-control" name="input" type="text"></td>
                                            </tr>
                                            <tr>
                                                <td>Organic peroxides:</td>
                                                <td><input class="form-control" name="input" type="text"></td>
                                                <td><input class="form-control" name="input" type="text"></td>
                                            </tr>
                                            <tr>
                                                <td>Corrosive to metals:</td>
                                                <td><input class="form-control" name="input" type="text"></td>
                                                <td><input class="form-control" name="input" type="text"></td>
                                            </tr>
                                            {{--Environment--}}
                                            <tr>
                                                <th id="classEnvironment">Environment</th>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th></th>
                                                <td class="title-table">Classification</td>
                                                <td class="title-table">Classification type</td>
                                            </tr>
                                            <tr>
                                                <td>Hazardous to the aquatic environment:</td>
                                                <td><input class="form-control" name="input" type="text"></td>
                                                <td><input class="form-control" name="input" type="text"></td>
                                            </tr>
                                            <tr>
                                                <td>Hazardous to the atmospheric environment:</td>
                                                <td><input class="form-control" name="input" type="text"></td>
                                                <td><input class="form-control" name="input" type="text"></td>
                                            </tr>
                                            {{--M-Factor--}}
                                            <tr>
                                                <th>M-Factor</th>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>M-factor Acute</td>
                                                <td><input class="form-control" name="input" type="text"></td>
                                            </tr>
                                            <tr>
                                                <td>M-Factor Chronic</td>
                                                <td><input class="form-control" name="input" type="text"></td>
                                            </tr>
                                            {{--Human Health--}}
                                            <tr>
                                                <th id="humanHealth">Human Health</th>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th></th>
                                                <td class="title-table">Classification</td>
                                                <td class="title-table">Classification type</td>
                                            </tr>
                                            <tr>
                                                <td>Acute toxicity-oral</td>
                                                <td><input class="form-control" name="input" type="text"></td>
                                                <td><input class="form-control" name="input" type="text"></td>
                                            </tr>
                                            <tr>
                                                <td>Acute toxicity- dermal</td>
                                                <td><input class="form-control" name="input" type="text"></td>
                                                <td><input class="form-control" name="input" type="text"></td>
                                            </tr>
                                            <tr>
                                                <td>Acute toxicity - inhalation</td>
                                                <td><input class="form-control" name="input" type="text"></td>
                                                <td><input class="form-control" name="input" type="text"></td>
                                            </tr>
                                            <tr>
                                                <td>Skin corrosion/irritation</td>
                                                <td><input class="form-control" name="input" type="text"></td>
                                                <td><input class="form-control" name="input" type="text"></td>
                                            </tr>
                                            <tr>
                                                <td>Serious eye damage/eye irritation</td>
                                                <td><input class="form-control" name="input" type="text"></td>
                                                <td><input class="form-control" name="input" type="text"></td>
                                            </tr>
                                            <tr>
                                                <td>Respiratory sensitisation</td>
                                                <td><input class="form-control" name="input" type="text"></td>
                                                <td><input class="form-control" name="input" type="text"></td>
                                            </tr>
                                            <tr>
                                                <td>Skin sensitisation</td>
                                                <td><input class="form-control" name="input" type="text"></td>
                                                <td><input class="form-control" name="input" type="text"></td>
                                            </tr>
                                            <tr>
                                                <td>Aspiration hazard</td>
                                                <td><input class="form-control" name="input" type="text"></td>
                                                <td><input class="form-control" name="input" type="text"></td>
                                            </tr>
                                            <tr>
                                                <td>Reproductive toxicity</td>
                                                <td><input class="form-control" name="input" type="text"></td>
                                                <td><input class="form-control" name="input" type="text"></td>
                                            </tr>
                                            <tr>
                                                <td>Specific effect</td>
                                                <td><input class="form-control" name="input" type="text"></td>
                                                <td><input class="form-control" name="input" type="text"></td>
                                            </tr>
                                            <tr>
                                                <td>Route of exposure</td>
                                                <td><input class="form-control" name="input" type="text"></td>
                                                <td><input class="form-control" name="input" type="text"></td>
                                            </tr>
                                            <tr>
                                                <td>Effects on or via lactation</td>
                                                <td><input class="form-control" name="input" type="text"></td>
                                                <td><input class="form-control" name="input" type="text"></td>
                                            </tr>
                                            <tr>
                                                <td>Germ cell mutagenicity</td>
                                                <td><input class="form-control" name="input" type="text"></td>
                                                <td><input class="form-control" name="input" type="text"></td>
                                            </tr>
                                            <tr>
                                                <td>Carcinogenicity</td>
                                                <td><input class="form-control" name="input" type="text"></td>
                                                <td><input class="form-control" name="input" type="text"></td>
                                            </tr>
                                            <tr>
                                                <td>Specific organ toxicity-single</td>
                                                <td><input class="form-control" name="input" type="text"></td>
                                                <td><input class="form-control" name="input" type="text"></td>
                                            </tr>
                                            <tr>
                                                <td>Specific organ toxicity-repeated</td>
                                                <td><input class="form-control" name="input" type="text"></td>
                                                <td><input class="form-control" name="input" type="text"></td>
                                            <tr>
                                                <td>Specific concentration limits</td>
                                                <td><input class="form-control" name="input" type="text"></td>
                                                <td><input class="form-control" name="input" type="text"></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </section>
                                    <hr>
                                    {{--ENVIRONMENT--}}
                                    <section id="environment" class="section-container">
                                        <table class="w-100">
                                            <thead>
                                            <tr>
                                                <th>ENVIRONMENT</th>
                                                <td></td>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th id="sediments">Substance information</th>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Molecular weight</td>
                                                <td><input class="form-control col-md-6" name="input" type="text"></td>
                                            </tr>
                                            <tr>
                                                <td>Particle size</td>
                                                <td><input class="form-control col-md-6" name="input" type="text"></td>
                                            </tr>
                                            {{--Solubility--}}
                                            <tr>
                                                <th>Solubility</th>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Water solubility (µg Me/L)</td>
                                                <td><input class="form-control col-md-6" name="input" type="text"></td>
                                            </tr>
                                            <tr>
                                                <td>Water solubility method</td>
                                                <td><textarea class="form-control col-md-6"></textarea></td>
                                            </tr>
                                            {{--Effects assessments - Water--}}
                                            <tr>
                                                <th>Effects assessments - Water</th>
                                                <td></td>
                                            </tr>
                                            {{--Effects assessments - Sediments--}}
                                            <tr>
                                                <th>Effects assessments - Sediments</th>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th id="relevantParameters">Relevant parameters</th>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Kp susp freshwater</td>
                                                <td><input class="form-control col-md-6" name="input" type="number"></td>
                                            </tr>
                                            <tr>
                                                <td>Kp susp marine</td>
                                                <td><input class="form-control col-md-6" name="input" type="number"></td>
                                            </tr>
                                            <tr>
                                                <td>Kp susp estuary</td>
                                                <td><input class="form-control col-md-6" name="input" type="number"></td>
                                            </tr>
                                            <tr>
                                                <td>Kp sed freshwater</td>
                                                <td><input class="form-control col-md-6" name="input" type="number"></td>
                                            </tr>
                                            <tr>
                                                <td>Kp sed sarine</td>
                                                <td><input class="form-control col-md-6" name="input" type="number"></td>
                                            </tr>
                                            <tr>
                                                <td>Kp sed estuary</td>
                                                <td><input class="form-control col-md-6" name="input" type="number"></td>
                                            </tr>
                                            <tr>
                                                <td>Kp soil</td>
                                                <td><input class="form-control col-md-6" name="input" type="number"></td>
                                            </tr>
                                            <tr>
                                                <td>Kp comments</td>
                                                <td><input class="form-control col-md-6" name="input" type="number"></td>
                                            </tr>
                                            <tr>
                                                <td>Bioaccumulation aquatic sediment</td>
                                                <td><input class="form-control col-md-6" name="input" type="text"></td>
                                            </tr>
                                            <tr>
                                                <td>Bioaccumulation aquatic sediment discussion</td>
                                                <td><input class="form-control col-md-6" name="input" type="text"></td>
                                            </tr>
                                            <tr>
                                                <td>Bioaccumulation terretrial</td>
                                                <td><input class="form-control col-md-6" name="input" type="text"></td>
                                            </tr>
                                            <tr>
                                                <td>Bioaccumulation terretrial discussion</td>
                                                <td><input class="form-control col-md-6" name="input" type="text"></td>
                                            </tr>
                                            <tr>
                                                <th>Document</th>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Document name</td>
                                                <td><input class="form-control col-md-6" name="input" type="text"></td>
                                            </tr>
                                            <tr>
                                                <td>Document description</td>
                                                <td><input class="form-control col-md-6" name="input" type="text"></td>
                                            </tr>
                                            <tr>
                                                <td>Documment file</td>
                                                <td><input class="form-control col-md-6" name="input" type="text"></td>
                                            </tr>
                                            {{--Effects assessments--}}
                                            <tr>
                                                <th>Effects assessments</th>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Based on:</td>
                                                <td><textarea class="form-control col-md-6"></textarea></td>
                                            </tr>
                                            <tr>
                                                <td>PNEC discussion</td>
                                                <td><input class="form-control col-md-6" name="input" type="text"></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <div class="table-responsive">
                                            <table class="table container-table">
                                                <thead></thead>
                                                <tbody>
                                                <tr>
                                                    <th></th>
                                                    <td style="width: 10%;" class="title-table">Value</td>
                                                    <td style="width: 10%;" class="title-table">Unit</td>
                                                    <td style="width: 15%;" class="title-table">AF</td>
                                                    <td style="width: 10%;" class="title-table">Extrapolaton method</td>
                                                    <td class="title-table">Justification</td>
                                                </tr>
                                                <tr>
                                                    <td>PNEC aqua (fresh water)</td>
                                                    <td><input class="form-control" name="input" type="text"></td>
                                                    <td>
                                                        <select name="country" id="select-countries"
                                                                class="form-control custom-select">
                                                            <option value="1" data-data={}">1</option>
                                                            <option value="2" data-data={}">2</option>
                                                            <option value="3" data-data={}">3</option>
                                                            <option value="4" data-data={}" selected="">4</option>
                                                        </select>
                                                    </td>
                                                    <td><input class="form-control" name="input" type="text"></td>
                                                    <td><textarea class="form-control"></textarea></td>
                                                    <td><textarea class="form-control"></textarea></td>
                                                </tr>
                                                <tr>
                                                    <td>PNEC aqua (marine water)</td>
                                                    <td><input class="form-control" name="input" type="text"></td>
                                                    <td>
                                                        <select name="country" id="select-countries"
                                                                class="form-control custom-select">
                                                            <option value="1" data-data={}">1</option>
                                                            <option value="2" data-data={}">2</option>
                                                            <option value="3" data-data={}">3</option>
                                                            <option value="4" data-data={}" selected="">4</option>
                                                        </select>
                                                    </td>
                                                    <td><input class="form-control" name="input" type="number"></td>
                                                    <td><textarea class="form-control"></textarea></td>
                                                    <td><textarea class="form-control"></textarea></td>
                                                </tr>
                                                <tr>
                                                    <td>PNEC sediment (fresh water)</td>
                                                    <td><input class="form-control" name="input" type="text"></td>
                                                    <td>
                                                        <select name="country" id="select-countries"
                                                                class="form-control custom-select">
                                                            <option value="1" data-data={}">1</option>
                                                            <option value="2" data-data={}">2</option>
                                                            <option value="3" data-data={}">3</option>
                                                            <option value="4" data-data={}" selected="">4</option>
                                                        </select>
                                                    </td>
                                                    <td><input class="form-control" name="input" type="number"></td>
                                                    <td><textarea class="form-control"></textarea></td>
                                                    <td><textarea class="form-control"></textarea></td>
                                                </tr>
                                                <tr>
                                                    <td>PNEC sediment (marine water)</td>
                                                    <td><input class="form-control" name="input" type="text"></td>
                                                    <td>
                                                        <select name="country" id="select-countries"
                                                                class="form-control custom-select">
                                                            <option value="1" data-data={}">1</option>
                                                            <option value="2" data-data={}">2</option>
                                                            <option value="3" data-data={}">3</option>
                                                            <option value="4" data-data={}" selected="">4</option>
                                                        </select>
                                                    </td>
                                                    <td><input class="form-control" name="input" type="number"></td>
                                                    <td><textarea class="form-control"></textarea></td>
                                                    <td><textarea class="form-control"></textarea></td>
                                                </tr>
                                                <tr>
                                                    <td>PNEC soil (fresh water)</td>
                                                    <td><input class="form-control" name="input" type="text"></td>
                                                    <td>
                                                        <select name="country" id="select-countries"
                                                                class="form-control custom-select">
                                                            <option value="1" data-data={}">1</option>
                                                            <option value="2" data-data={}">2</option>
                                                            <option value="3" data-data={}">3</option>
                                                            <option value="4" data-data={}" selected="">4</option>
                                                        </select>
                                                    </td>
                                                    <td><input class="form-control" name="input" type="number"></td>
                                                    <td><textarea class="form-control"></textarea></td>
                                                    <td><textarea class="form-control"></textarea></td>
                                                </tr>
                                                <tr>
                                                    <td>PNEC soil (marine water)</td>
                                                    <td><input class="form-control" name="input" type="text"></td>
                                                    <td>
                                                        <select name="country" id="select-countries"
                                                                class="form-control custom-select">
                                                            <option value="1" data-data={}">1</option>
                                                            <option value="2" data-data={}">2</option>
                                                            <option value="3" data-data={}">3</option>
                                                            <option value="4" data-data={}" selected="">4</option>
                                                        </select>
                                                    </td>
                                                    <td><input class="form-control" name="input" type="number"></td>
                                                    <td><textarea class="form-control"></textarea></td>
                                                    <td><textarea class="form-control"></textarea></td>
                                                </tr>
                                                <tr>
                                                    <td>PNEC STP</td>
                                                    <td><input class="form-control" name="input" type="text"></td>
                                                    <td>
                                                        <select name="country" id="select-countries"
                                                                class="form-control custom-select">
                                                            <option value="1" data-data={}">1</option>
                                                            <option value="2" data-data={}">2</option>
                                                            <option value="3" data-data={}">3</option>
                                                            <option value="4" data-data={}" selected="">4</option>
                                                        </select>
                                                    </td>
                                                    <td><input class="form-control" name="input" type="number"></td>
                                                    <td><textarea class="form-control"></textarea></td>
                                                    <td><textarea class="form-control"></textarea></td>
                                                </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </section>
                                    <hr>
                                    {{--HUMAN HEALTH--}}
                                    <section id="humanHealth" class="section-container table-responsive">
                                        <table class="table container-table">
                                            <thead>
                                            <th>HUMAN HEALTH</th>
                                            </thead>
                                            <tbody>
                                            {{--Workers - Acute short term--}}
                                            <tr>
                                                <th id="workers">Workers - Acute short term</th>
                                            </tr>
                                            <tr>
                                                <th></th>
                                                <td style="width: 10%;" class="title-table">Value</td>
                                                <td style="width: 10%;" class="title-table">Unit</td>
                                                <td style="width: 15%;" class="title-table">AF</td>
                                                <td style="width: 10%;" class="title-table">Dose description starting point</td>
                                                <td style="width: 10%;" class="title-table">Most sensitive endpoint</td>
                                                <td class="title-table">Justification</td>
                                            </tr>
                                            <tr>
                                                <td>DN(M)EL DERMAL (short systemic)</td>
                                                <td><input class="form-control" name="input" type="number"></td>
                                                <td>
                                                    <select name="country" id="select-countries"
                                                            class="form-control custom-select">
                                                        <option value="1" data-data={}">1</option>
                                                        <option value="2" data-data={}">2</option>
                                                        <option value="3" data-data={}">3</option>
                                                        <option value="4" data-data={}" selected="">4</option>
                                                    </select>
                                                </td>
                                                <td><input class="form-control" name="input" type="number"></td>
                                                <td>
                                                    <select name="country" id="select-countries"
                                                            class="form-control custom-select">
                                                        <option value="1" data-data={}">1</option>
                                                        <option value="2" data-data={}">2</option>
                                                        <option value="3" data-data={}">3</option>
                                                        <option value="4" data-data={}" selected="">4</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select name="country" id="select-countries"
                                                            class="form-control custom-select">
                                                        <option value="1" data-data={}">1</option>
                                                        <option value="2" data-data={}">2</option>
                                                        <option value="3" data-data={}">3</option>
                                                        <option value="4" data-data={}" selected="">4</option>
                                                    </select>
                                                </td>
                                                <td><textarea class="form-control"></textarea></td>
                                            </tr>
                                            <tr>
                                                <td>DN(M)EL INHALATION (short systemic)</td>
                                                <td><input class="form-control" name="input" type="number"></td>
                                                <td>
                                                    <select name="country" id="select-countries"
                                                            class="form-control custom-select">
                                                        <option value="1" data-data={}">1</option>
                                                        <option value="2" data-data={}">2</option>
                                                        <option value="3" data-data={}">3</option>
                                                        <option value="4" data-data={}" selected="">4</option>
                                                    </select>
                                                </td>
                                                <td><input class="form-control" name="input" type="number"></td>
                                                <td>
                                                    <select name="country" id="select-countries"
                                                            class="form-control custom-select">
                                                        <option value="1" data-data={}">1</option>
                                                        <option value="2" data-data={}">2</option>
                                                        <option value="3" data-data={}">3</option>
                                                        <option value="4" data-data={}" selected="">4</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select name="country" id="select-countries"
                                                            class="form-control custom-select">
                                                        <option value="1" data-data={}">1</option>
                                                        <option value="2" data-data={}">2</option>
                                                        <option value="3" data-data={}">3</option>
                                                        <option value="4" data-data={}" selected="">4</option>
                                                    </select>
                                                </td>
                                                <td><textarea class="form-control"></textarea></td>
                                            </tr>
                                            <tr>
                                                <td>DN(M)EL DERMAL (short-local)</td>
                                                <td><input class="form-control" name="input" type="number"></td>
                                                <td>
                                                    <select name="country" id="select-countries"
                                                            class="form-control custom-select">
                                                        <option value="1" data-data={}">1</option>
                                                        <option value="2" data-data={}">2</option>
                                                        <option value="3" data-data={}">3</option>
                                                        <option value="4" data-data={}" selected="">4</option>
                                                    </select>
                                                </td>
                                                <td><input class="form-control" name="input" type="number"></td>
                                                <td>
                                                    <select name="country" id="select-countries"
                                                            class="form-control custom-select">
                                                        <option value="1" data-data={}">1</option>
                                                        <option value="2" data-data={}">2</option>
                                                        <option value="3" data-data={}">3</option>
                                                        <option value="4" data-data={}" selected="">4</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select name="country" id="select-countries"
                                                            class="form-control custom-select">
                                                        <option value="1" data-data={}">1</option>
                                                        <option value="2" data-data={}">2</option>
                                                        <option value="3" data-data={}">3</option>
                                                        <option value="4" data-data={}" selected="">4</option>
                                                    </select>
                                                </td>
                                                <td><textarea class="form-control"></textarea></td>
                                            </tr>
                                            <tr>
                                                <td>DN(M)EL INHALATION (short-local)</td>
                                                <td><input class="form-control" name="input" type="number"></td>
                                                <td>
                                                    <select name="country" id="select-countries"
                                                            class="form-control custom-select">
                                                        <option value="1" data-data={}">1</option>
                                                        <option value="2" data-data={}">2</option>
                                                        <option value="3" data-data={}">3</option>
                                                        <option value="4" data-data={}" selected="">4</option>
                                                    </select>
                                                </td>
                                                <td><input class="form-control" name="input" type="number"></td>
                                                <td>
                                                    <select name="country" id="select-countries"
                                                            class="form-control custom-select">
                                                        <option value="1" data-data={}">1</option>
                                                        <option value="2" data-data={}">2</option>
                                                        <option value="3" data-data={}">3</option>
                                                        <option value="4" data-data={}" selected="">4</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select name="country" id="select-countries"
                                                            class="form-control custom-select">
                                                        <option value="1" data-data={}">1</option>
                                                        <option value="2" data-data={}">2</option>
                                                        <option value="3" data-data={}">3</option>
                                                        <option value="4" data-data={}" selected="">4</option>
                                                    </select>
                                                </td>
                                                <td><textarea class="form-control"></textarea></td>
                                            </tr>
                                            <tr>
                                                <td>DN(M)EL DERMAL (long-systemic)</td>
                                                <td><input class="form-control" name="input" type="number"></td>
                                                <td>
                                                    <select name="country" id="select-countries"
                                                            class="form-control custom-select">
                                                        <option value="1" data-data={}">1</option>
                                                        <option value="2" data-data={}">2</option>
                                                        <option value="3" data-data={}">3</option>
                                                        <option value="4" data-data={}" selected="">4</option>
                                                    </select>
                                                </td>
                                                <td><input class="form-control" name="input" type="number"></td>
                                                <td>
                                                    <select name="country" id="select-countries"
                                                            class="form-control custom-select">
                                                        <option value="1" data-data={}">1</option>
                                                        <option value="2" data-data={}">2</option>
                                                        <option value="3" data-data={}">3</option>
                                                        <option value="4" data-data={}" selected="">4</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select name="country" id="select-countries"
                                                            class="form-control custom-select">
                                                        <option value="1" data-data={}">1</option>
                                                        <option value="2" data-data={}">2</option>
                                                        <option value="3" data-data={}">3</option>
                                                        <option value="4" data-data={}" selected="">4</option>
                                                    </select>
                                                </td>
                                                <td><textarea class="form-control"></textarea></td>
                                            </tr>
                                            <tr>
                                                <td>DN(M)EL INHALATION (long-systemic)</td>
                                                <td><input class="form-control" name="input" type="number"></td>
                                                <td>
                                                    <select name="country" id="select-countries"
                                                            class="form-control custom-select">
                                                        <option value="1" data-data={}">1</option>
                                                        <option value="2" data-data={}">2</option>
                                                        <option value="3" data-data={}">3</option>
                                                        <option value="4" data-data={}" selected="">4</option>
                                                    </select>
                                                </td>
                                                <td><input class="form-control" name="input" type="number"></td>
                                                <td>
                                                    <select name="country" id="select-countries"
                                                            class="form-control custom-select">
                                                        <option value="1" data-data={}">1</option>
                                                        <option value="2" data-data={}">2</option>
                                                        <option value="3" data-data={}">3</option>
                                                        <option value="4" data-data={}" selected="">4</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select name="country" id="select-countries"
                                                            class="form-control custom-select">
                                                        <option value="1" data-data={}">1</option>
                                                        <option value="2" data-data={}">2</option>
                                                        <option value="3" data-data={}">3</option>
                                                        <option value="4" data-data={}" selected="">4</option>
                                                    </select>
                                                </td>
                                                <td><textarea class="form-control"></textarea></td>
                                            </tr>
                                            <tr>
                                                <td>DN(M)EL DERMAL (long-local)</td>
                                                <td><input class="form-control" name="input" type="number"></td>
                                                <td>
                                                    <select name="country" id="select-countries"
                                                            class="form-control custom-select">
                                                        <option value="1" data-data={}">1</option>
                                                        <option value="2" data-data={}">2</option>
                                                        <option value="3" data-data={}">3</option>
                                                        <option value="4" data-data={}" selected="">4</option>
                                                    </select>
                                                </td>
                                                <td><input class="form-control" name="input" type="number"></td>
                                                <td>
                                                    <select name="country" id="select-countries"
                                                            class="form-control custom-select">
                                                        <option value="1" data-data={}">1</option>
                                                        <option value="2" data-data={}">2</option>
                                                        <option value="3" data-data={}">3</option>
                                                        <option value="4" data-data={}" selected="">4</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select name="country" id="select-countries"
                                                            class="form-control custom-select">
                                                        <option value="1" data-data={}">1</option>
                                                        <option value="2" data-data={}">2</option>
                                                        <option value="3" data-data={}">3</option>
                                                        <option value="4" data-data={}" selected="">4</option>
                                                    </select>
                                                </td>
                                                <td><textarea class="form-control"></textarea></td>
                                            </tr>
                                            <tr>
                                                <td>DN(M)EL INHALATION (long-local)</td>
                                                <td><input class="form-control" name="input" type="number"></td>
                                                <td>
                                                    <select name="country" id="select-countries"
                                                            class="form-control custom-select">
                                                        <option value="1" data-data={}">1</option>
                                                        <option value="2" data-data={}">2</option>
                                                        <option value="3" data-data={}">3</option>
                                                        <option value="4" data-data={}" selected="">4</option>
                                                    </select>
                                                </td>
                                                <td><input class="form-control" name="input" type="number"></td>
                                                <td>
                                                    <select name="country" id="select-countries"
                                                            class="form-control custom-select">
                                                        <option value="1" data-data={}">1</option>
                                                        <option value="2" data-data={}">2</option>
                                                        <option value="3" data-data={}">3</option>
                                                        <option value="4" data-data={}" selected="">4</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select name="country" id="select-countries"
                                                            class="form-control custom-select">
                                                        <option value="1" data-data={}">1</option>
                                                        <option value="2" data-data={}">2</option>
                                                        <option value="3" data-data={}">3</option>
                                                        <option value="4" data-data={}" selected="">4</option>
                                                    </select>
                                                </td>
                                                <td><textarea class="form-control"></textarea></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                            <table style="width:100%">
                                                <tbody>
                                                <tr>
                                                    <td style="width: 27%;">Discussion - Workers assessment</td>
                                                    <td><textarea class="form-control col-md-6"></textarea></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            {{--General population--}}
                                        <table>
                                            <tbody>
                                            <tr>
                                                <th id="generalPopulation">General population</th>
                                            </tr>
                                            <tr>
                                                <th></th>
                                                <td style="width: 10%;" class="title-table">Value</td>
                                                <td style="width: 10%;" class="title-table">Unit</td>
                                                <td style="width: 15%;" class="title-table">AF</td>
                                                <td style="width: 10%;" class="title-table">Dose description starting point</td>
                                                <td style="width: 10%;" class="title-table">Most sensitive endpoint</td>
                                                <td class="title-table">Justification</td>
                                            </tr>
                                            <tr>
                                                <td>DN(M)EL DERMAL (short systemic)</td>
                                                <td><input class="form-control" name="input" type="number"></td>
                                                <td>
                                                    <select name="country" id="select-countries"
                                                            class="form-control custom-select">
                                                        <option value="1" data-data={}">1</option>
                                                        <option value="2" data-data={}">2</option>
                                                        <option value="3" data-data={}">3</option>
                                                        <option value="4" data-data={}" selected="">4</option>
                                                    </select>
                                                </td>
                                                <td><input class="form-control" name="input" type="number"></td>
                                                <td>
                                                    <select name="country" id="select-countries"
                                                            class="form-control custom-select">
                                                        <option value="1" data-data={}">1</option>
                                                        <option value="2" data-data={}">2</option>
                                                        <option value="3" data-data={}">3</option>
                                                        <option value="4" data-data={}" selected="">4</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select name="country" id="select-countries"
                                                            class="form-control custom-select">
                                                        <option value="1" data-data={}">1</option>
                                                        <option value="2" data-data={}">2</option>
                                                        <option value="3" data-data={}">3</option>
                                                        <option value="4" data-data={}" selected="">4</option>
                                                    </select>
                                                </td>
                                                <td><textarea class="form-control"></textarea></td>
                                            </tr>
                                            <tr>
                                                <td>DN(M)EL INHALATION (short systemic)</td>
                                                <td><input class="form-control" name="input" type="number"></td>
                                                <td>
                                                    <select name="country" id="select-countries"
                                                            class="form-control custom-select">
                                                        <option value="1" data-data={}">1</option>
                                                        <option value="2" data-data={}">2</option>
                                                        <option value="3" data-data={}">3</option>
                                                        <option value="4" data-data={}" selected="">4</option>
                                                    </select>
                                                </td>
                                                <td><input class="form-control" name="input" type="number"></td>
                                                <td>
                                                    <select name="country" id="select-countries"
                                                            class="form-control custom-select">
                                                        <option value="1" data-data={}">1</option>
                                                        <option value="2" data-data={}">2</option>
                                                        <option value="3" data-data={}">3</option>
                                                        <option value="4" data-data={}" selected="">4</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select name="country" id="select-countries"
                                                            class="form-control custom-select">
                                                        <option value="1" data-data={}">1</option>
                                                        <option value="2" data-data={}">2</option>
                                                        <option value="3" data-data={}">3</option>
                                                        <option value="4" data-data={}" selected="">4</option>
                                                    </select>
                                                </td>
                                                <td><textarea class="form-control"></textarea></td>
                                            </tr>
                                            <tr>
                                                <td>DN(M)EL ORAL (short systemic)</td>
                                                <td><input class="form-control" name="input" type="number"></td>
                                                <td>
                                                    <select name="country" id="select-countries"
                                                            class="form-control custom-select">
                                                        <option value="1" data-data={}">1</option>
                                                        <option value="2" data-data={}">2</option>
                                                        <option value="3" data-data={}">3</option>
                                                        <option value="4" data-data={}" selected="">4</option>
                                                    </select>
                                                </td>
                                                <td><input class="form-control" name="input" type="number"></td>
                                                <td>
                                                    <select name="country" id="select-countries"
                                                            class="form-control custom-select">
                                                        <option value="1" data-data={}">1</option>
                                                        <option value="2" data-data={}">2</option>
                                                        <option value="3" data-data={}">3</option>
                                                        <option value="4" data-data={}" selected="">4</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select name="country" id="select-countries"
                                                            class="form-control custom-select">
                                                        <option value="1" data-data={}">1</option>
                                                        <option value="2" data-data={}">2</option>
                                                        <option value="3" data-data={}">3</option>
                                                        <option value="4" data-data={}" selected="">4</option>
                                                    </select>
                                                </td>
                                                <td><textarea class="form-control"></textarea></td>
                                            </tr>
                                            <tr>
                                                <td>DN(M)EL DERMAL (short-local)</td>
                                                <td><input class="form-control" name="input" type="number"></td>
                                                <td>
                                                    <select name="country" id="select-countries"
                                                            class="form-control custom-select">
                                                        <option value="1" data-data={}">1</option>
                                                        <option value="2" data-data={}">2</option>
                                                        <option value="3" data-data={}">3</option>
                                                        <option value="4" data-data={}" selected="">4</option>
                                                    </select>
                                                </td>
                                                <td><input class="form-control" name="input" type="number"></td>
                                                <td>
                                                    <select name="country" id="select-countries"
                                                            class="form-control custom-select">
                                                        <option value="1" data-data={}">1</option>
                                                        <option value="2" data-data={}">2</option>
                                                        <option value="3" data-data={}">3</option>
                                                        <option value="4" data-data={}" selected="">4</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select name="country" id="select-countries"
                                                            class="form-control custom-select">
                                                        <option value="1" data-data={}">1</option>
                                                        <option value="2" data-data={}">2</option>
                                                        <option value="3" data-data={}">3</option>
                                                        <option value="4" data-data={}" selected="">4</option>
                                                    </select>
                                                </td>
                                                <td><textarea class="form-control"></textarea></td>
                                            </tr>
                                            <tr>
                                                <td>DN(M)EL INHALATION (short-local)</td>
                                                <td><input class="form-control" name="input" type="number"></td>
                                                <td>
                                                    <select name="country" id="select-countries"
                                                            class="form-control custom-select">
                                                        <option value="1" data-data={}">1</option>
                                                        <option value="2" data-data={}">2</option>
                                                        <option value="3" data-data={}">3</option>
                                                        <option value="4" data-data={}" selected="">4</option>
                                                    </select>
                                                </td>
                                                <td><input class="form-control" name="input" type="number"></td>
                                                <td>
                                                    <select name="country" id="select-countries"
                                                            class="form-control custom-select">
                                                        <option value="1" data-data={}">1</option>
                                                        <option value="2" data-data={}">2</option>
                                                        <option value="3" data-data={}">3</option>
                                                        <option value="4" data-data={}" selected="">4</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select name="country" id="select-countries"
                                                            class="form-control custom-select">
                                                        <option value="1" data-data={}">1</option>
                                                        <option value="2" data-data={}">2</option>
                                                        <option value="3" data-data={}">3</option>
                                                        <option value="4" data-data={}" selected="">4</option>
                                                    </select>
                                                </td>
                                                <td><textarea class="form-control"></textarea></td>
                                            </tr>
                                            <tr>
                                                <td>DN(M)EL DERMAL (long-systemic)</td>
                                                <td><input class="form-control" name="input" type="number"></td>
                                                <td>
                                                    <select name="country" id="select-countries"
                                                            class="form-control custom-select">
                                                        <option value="1" data-data={}">1</option>
                                                        <option value="2" data-data={}">2</option>
                                                        <option value="3" data-data={}">3</option>
                                                        <option value="4" data-data={}" selected="">4</option>
                                                    </select>
                                                </td>
                                                <td><input class="form-control" name="input" type="number"></td>
                                                <td>
                                                    <select name="country" id="select-countries"
                                                            class="form-control custom-select">
                                                        <option value="1" data-data={}">1</option>
                                                        <option value="2" data-data={}">2</option>
                                                        <option value="3" data-data={}">3</option>
                                                        <option value="4" data-data={}" selected="">4</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select name="country" id="select-countries"
                                                            class="form-control custom-select">
                                                        <option value="1" data-data={}">1</option>
                                                        <option value="2" data-data={}">2</option>
                                                        <option value="3" data-data={}">3</option>
                                                        <option value="4" data-data={}" selected="">4</option>
                                                    </select>
                                                </td>
                                                <td><textarea class="form-control"></textarea></td>
                                            </tr>
                                            <tr>
                                                <td>DN(M)EL INHALATION (long-systemic)</td>
                                                <td><input class="form-control" name="input" type="number"></td>
                                                <td>
                                                    <select name="country" id="select-countries"
                                                            class="form-control custom-select">
                                                        <option value="1" data-data={}">1</option>
                                                        <option value="2" data-data={}">2</option>
                                                        <option value="3" data-data={}">3</option>
                                                        <option value="4" data-data={}" selected="">4</option>
                                                    </select>
                                                </td>
                                                <td><input class="form-control" name="input" type="number"></td>
                                                <td>
                                                    <select name="country" id="select-countries"
                                                            class="form-control custom-select">
                                                        <option value="1" data-data={}">1</option>
                                                        <option value="2" data-data={}">2</option>
                                                        <option value="3" data-data={}">3</option>
                                                        <option value="4" data-data={}" selected="">4</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select name="country" id="select-countries"
                                                            class="form-control custom-select">
                                                        <option value="1" data-data={}">1</option>
                                                        <option value="2" data-data={}">2</option>
                                                        <option value="3" data-data={}">3</option>
                                                        <option value="4" data-data={}" selected="">4</option>
                                                    </select>
                                                </td>
                                                <td><textarea class="form-control"></textarea></td>
                                            </tr>
                                            <tr>
                                                <td>DN(M)EL ORAL (long systemic)</td>
                                                <td><input class="form-control" name="input" type="number"></td>
                                                <td>
                                                    <select name="country" id="select-countries"
                                                            class="form-control custom-select">
                                                        <option value="1" data-data={}">1</option>
                                                        <option value="2" data-data={}">2</option>
                                                        <option value="3" data-data={}">3</option>
                                                        <option value="4" data-data={}" selected="">4</option>
                                                    </select>
                                                </td>
                                                <td><input class="form-control" name="input" type="number"></td>
                                                <td>
                                                    <select name="country" id="select-countries"
                                                            class="form-control custom-select">
                                                        <option value="1" data-data={}">1</option>
                                                        <option value="2" data-data={}">2</option>
                                                        <option value="3" data-data={}">3</option>
                                                        <option value="4" data-data={}" selected="">4</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select name="country" id="select-countries"
                                                            class="form-control custom-select">
                                                        <option value="1" data-data={}">1</option>
                                                        <option value="2" data-data={}">2</option>
                                                        <option value="3" data-data={}">3</option>
                                                        <option value="4" data-data={}" selected="">4</option>
                                                    </select>
                                                </td>
                                                <td><textarea class="form-control"></textarea></td>
                                            </tr>
                                            <tr>
                                                <td>DN(M)EL DERMAL (long-local)</td>
                                                <td><input class="form-control" name="input" type="number"></td>
                                                <td>
                                                    <select name="country" id="select-countries"
                                                            class="form-control custom-select">
                                                        <option value="1" data-data={}">1</option>
                                                        <option value="2" data-data={}">2</option>
                                                        <option value="3" data-data={}">3</option>
                                                        <option value="4" data-data={}" selected="">4</option>
                                                    </select>
                                                </td>
                                                <td><input class="form-control" name="input" type="number"></td>
                                                <td>
                                                    <select name="country" id="select-countries"
                                                            class="form-control custom-select">
                                                        <option value="1" data-data={}">1</option>
                                                        <option value="2" data-data={}">2</option>
                                                        <option value="3" data-data={}">3</option>
                                                        <option value="4" data-data={}" selected="">4</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select name="country" id="select-countries"
                                                            class="form-control custom-select">
                                                        <option value="1" data-data={}">1</option>
                                                        <option value="2" data-data={}">2</option>
                                                        <option value="3" data-data={}">3</option>
                                                        <option value="4" data-data={}" selected="">4</option>
                                                    </select>
                                                </td>
                                                <td><textarea class="form-control"></textarea></td>
                                            </tr>
                                            <tr>
                                                <td>DN(M)EL INHALATION (long-local)</td>
                                                <td><input class="form-control" name="input" type="number"></td>
                                                <td>
                                                    <select name="country" id="select-countries"
                                                            class="form-control custom-select">
                                                        <option value="1" data-data={}">1</option>
                                                        <option value="2" data-data={}">2</option>
                                                        <option value="3" data-data={}">3</option>
                                                        <option value="4" data-data={}" selected="">4</option>
                                                    </select>
                                                </td>
                                                <td><input class="form-control" name="input" type="number"></td>
                                                <td>
                                                    <select name="country" id="select-countries"
                                                            class="form-control custom-select">
                                                        <option value="1" data-data={}">1</option>
                                                        <option value="2" data-data={}">2</option>
                                                        <option value="3" data-data={}">3</option>
                                                        <option value="4" data-data={}" selected="">4</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select name="country" id="select-countries"
                                                            class="form-control custom-select">
                                                        <option value="1" data-data={}">1</option>
                                                        <option value="2" data-data={}">2</option>
                                                        <option value="3" data-data={}">3</option>
                                                        <option value="4" data-data={}" selected="">4</option>
                                                    </select>
                                                </td>
                                                <td><textarea class="form-control"></textarea></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <table style="width:100%">
                                            <tbody>
                                            <tr>
                                                <td style="width: 27%;">Discussion - General population</td>
                                                <td><textarea class="form-control col-md-6"></textarea></td>
                                            </tr>
                                            <tr>
                                                <td>Document - name</td>
                                                <td><input class="form-control col-md-6" name="input"
                                                           type="text"></td>
                                            </tr>
                                            <tr>
                                                <td>Document - description</td>
                                                <td><textarea class="form-control col-md-6"></textarea></td>
                                            </tr>
                                            <tr>
                                                <td>Documment - file</td>
                                                <td><input class="form-control col-md-6" name="input"
                                                           type="text"></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </section>
                                    <hr>
                                    {{--TRV & BIOELUTION--}}
                                    <section id="trvAndBioelution" class="section-container">
                                        <table class="w-100">
                                            <thead>
                                            <th>TRV & BIOELUTION</th>
                                            <td></td>
                                            </thead>
                                            <tbody>
                                            {{--Reference value human toxicity - ACUTE--}}
                                            <tr>
                                                <th id="acute">Reference value human toxicity - ACUTE</th>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Human toxicity - Acute - Oral - LD50</td>
                                                <td><input type="number" class="form-control col-md-6"></td>
                                            </tr>
                                            <tr>
                                                <td>Human toxicity - Acute - LC50 Inhalation</td>
                                                <td><input type="number" class="form-control col-md-6"></td>
                                            </tr>
                                            <tr>
                                                <td>Human toxicity - Acute - LD50 Dermal</td>
                                                <td><input type="number" class="form-control col-md-6"></td>
                                            </tr>
                                            <tr>
                                                <td>Human toxicity - Acute - units</td>
                                                <td>
                                                    <select name="country" id="select-countries"
                                                            class="form-control custom-select col-md-6">
                                                        <option value="1" data-data={}">1</option>
                                                        <option value="2" data-data={}">2</option>
                                                        <option value="3" data-data={}">3</option>
                                                        <option value="4" data-data={}" selected="">4</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            {{--Bioelution--}}
                                            <tr>
                                                <th id="bioelution">Bioelution</th>
                                            </tr>
                                            <tr>
                                                <td>Result Bioelution - Gastric</td>
                                                <td><input type="text" class="form-control col-md-6"></td>
                                            </tr>
                                            <tr>
                                                <td>Result Bioelution - Inhalation</td>
                                                <td><input type="text" class="form-control col-md-6"></td>
                                            </tr>
                                            <tr>
                                                <td>Result Bioelution - Dermal</td>
                                                <td><input type="text" class="form-control col-md-6"></td>
                                            </tr>
                                            <tr>
                                                <td>Additional information</td>
                                                <td><input type="text" class="form-control col-md-6"></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </section>
                                    <hr>
                                    {{--ERV & M--}}
                                    <section id="ErvAndM" class="section-container">
                                        <table class="w-100">
                                            <tbody>
                                            <tr>
                                                <th id="ErvAndM">ERV & M</th>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th>FATE & BEHAVIOUR</th>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Removal from water-column</td>
                                                <td>
                                                    <select name="country" id="select-countries"
                                                            class="form-control custom-select col-md-6">
                                                        <option value="1" data-data={}" selected="">Yes</option>
                                                        <option value="2" data-data={}">No</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Removal from water-column - Justification</td>
                                                <td><input class="form-control col-md-6" name="input"
                                                           type="text"></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <table class="w-100">
                                            <tbody>
                                            <tr>
                                                <th>ERV-ACUTE</th>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th></th>
                                                <td class="title-table">NOEC Freshwater pH 6</td>
                                                <td class="title-table">NOEC Freshwater pH 7</td>
                                                <td class="title-table">NOEC Freswater pH 8</td>
                                                <td class="title-table">NOEC Marine</td>
                                                <td class="title-table">NOEC units</td>
                                            </tr>
                                            <tr>
                                                <td>ERV-ACUTE - Algae</td>
                                                <td><input class="form-control" name="input" type="text"></td>
                                                <td><input class="form-control" name="input" type="text"></td>
                                                <td><input class="form-control" name="input" type="text"></td>
                                                <td><input class="form-control" name="input" type="text"></td>
                                                <td>
                                                    <select name="country" id="select-countries"
                                                            class="form-control custom-select">
                                                        <option value="1" data-data={}">1</option>
                                                        <option value="2" data-data={}">2</option>
                                                        <option value="3" data-data={}">3</option>
                                                        <option value="4" data-data={}" selected="">4</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>ERV-ACUTE - Daphniae</td>
                                                <td><input class="form-control" name="input" type="text"></td>
                                                <td><input class="form-control" name="input" type="text"></td>
                                                <td><input class="form-control" name="input" type="text"></td>
                                                <td><input class="form-control" name="input" type="text"></td>
                                                <td>
                                                    <select name="country" id="select-countries"
                                                            class="form-control custom-select">
                                                        <option value="1" data-data={}">1</option>
                                                        <option value="2" data-data={}">2</option>
                                                        <option value="3" data-data={}">3</option>
                                                        <option value="4" data-data={}" selected="">4</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>ERV-ACUTE - Fish</td>
                                                <td><input class="form-control" name="input" type="text"></td>
                                                <td><input class="form-control" name="input" type="text"></td>
                                                <td><input class="form-control" name="input" type="text"></td>
                                                <td><input class="form-control" name="input" type="text"></td>
                                                <td>
                                                    <select name="country" id="select-countries"
                                                            class="form-control custom-select">
                                                        <option value="1" data-data={}">1</option>
                                                        <option value="2" data-data={}">2</option>
                                                        <option value="3" data-data={}">3</option>
                                                        <option value="4" data-data={}" selected="">4</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                            <table class="w-100">
                                                <tbody>
                                                <tr>
                                                    <td style="width:27%">ERV ACUTE CLASSIFICATON - M Factor</td>
                                                    <td><input class="form-control col-md-6" name="input" type="number"></td>
                                                </tr>
                                                <tr>
                                                    <td>ERV ACUTE CLASSIFICATON - Comments</td>
                                                    <td><input class="form-control col-md-6" name="input" type="text"></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        <table class="w-100">
                                            <tbody>
                                            <tr>
                                                <th>ERV-CHRONIC</th>
                                                <td class="title-table">NOEC Freshwater pH 6</td>
                                                <td class="title-table">NOEC Freshwater pH 7</td>
                                                <td class="title-table">NOEC Freswater pH 8</td>
                                                <td class="title-table">NOEC Marine</td>
                                                <td class="title-table">NOEC units</td>
                                            </tr>
                                            <tr>
                                                <td>ERV-CHRONIC - Algae</td>
                                                <td><input class="form-control" name="input" type="text"></td>
                                                <td><input class="form-control" name="input" type="text"></td>
                                                <td><input class="form-control" name="input" type="text"></td>
                                                <td><input class="form-control" name="input" type="text"></td>
                                                <td>
                                                    <select name="country" id="select-countries"
                                                            class="form-control custom-select">
                                                        <option value="1" data-data={}">1</option>
                                                        <option value="2" data-data={}">2</option>
                                                        <option value="3" data-data={}">3</option>
                                                        <option value="4" data-data={}" selected="">4</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>ERV-CHRONIC - Daphniae</td>
                                                <td><input class="form-control" name="input" type="text"></td>
                                                <td><input class="form-control" name="input" type="text"></td>
                                                <td><input class="form-control" name="input" type="text"></td>
                                                <td><input class="form-control" name="input" type="text"></td>
                                                <td>
                                                    <select name="country" id="select-countries"
                                                            class="form-control custom-select">
                                                        <option value="1" data-data={}">1</option>
                                                        <option value="2" data-data={}">2</option>
                                                        <option value="3" data-data={}">3</option>
                                                        <option value="4" data-data={}" selected="">4</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>ERV-CHRONIC - Fish</td>
                                                <td><input class="form-control" name="input" type="text"></td>
                                                <td><input class="form-control" name="input" type="text"></td>
                                                <td><input class="form-control" name="input" type="text"></td>
                                                <td><input class="form-control" name="input" type="text"></td>
                                                <td>
                                                    <select name="country" id="select-countries"
                                                            class="form-control custom-select">
                                                        <option value="1" data-data={}">1</option>
                                                        <option value="2" data-data={}">2</option>
                                                        <option value="3" data-data={}">3</option>
                                                        <option value="4" data-data={}" selected="">4</option>
                                                    </select>
                                                </td>
                                            </tr>

                                            </tbody>
                                        </table>
                                        <table>
                                            <tbody>
                                            <tr>
                                                <td style="width:27%">ERV CHRONIC CLASSIFICATON - M Factor</td>
                                                <td><input class="form-control col-md-6" name="input" type="number"></td>
                                            </tr>
                                            <tr>
                                                <td>ERV CHRONIC CLASSIFICATON - Comments</td>
                                                <td><input class="form-control col-md-6" name="input" type="text"></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </section>
                                    <hr>
                                    {{--TARGET ORGAN / MoA--}}
                                    <section id="targetOrganMoa" class="section-container">
                                        <table class="w-100">
                                            <tbody>
                                            <tr>
                                                <th id="targetOrganMoa">TARGET ORGAN / MoA</th>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Target organ</td>
                                                <td><input type="text" class="form-control col-md-6"></td>
                                            </tr>
                                            <tr>
                                                <td>Target organ information</td>
                                                <td><input type="text" class="form-control col-md-6"></td>
                                            </tr>
                                            <tr>
                                                <td>Mode of Action</td>
                                                <td><input type="text" class="form-control col-md-6"></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </section>
                                    <hr>
                                    {{--Man via the Environment--}}
                                    <section id="manViaTheEnvironment" class="section-container">
                                        <table class="w-100">
                                            <tbody>
                                            <tr>
                                                <th id="manViaTheEnvironment">Man via the Environment</th>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>MvE</td>
                                                <td><input type="text" class="form-control col-md-6"></td>
                                            </tr>
                                            <tr>
                                                <td>MvE - Critical routes of exposure</td>
                                                <td><input type="text" class="form-control col-md-6"></td>
                                            </tr>
                                            <tr>
                                                <td>MvE RMMs</td>
                                                <td><input type="text" class="form-control col-md-6"></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </section>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- COL END -->
            </div>
            <!-- ROW END -->

        </div>
    </div>
    <!-- CONTAINER END -->
@endsection

@section('js-define')
    <script>
        $(function () {
            $(window).on('scroll', function () {
                var WindowTop = $(window).scrollTop();
                $('section').each(function (i) {
                    if (WindowTop > $(this).offset().top - 50 &&
                        WindowTop < $(this).offset().top + $(this).outerHeight(true)
                    ) {
                        $('.nav > .slide > .side-menu__item > .side-menu__label').removeClass('changeColorMenu');
                        $('.nav > .slide > .side-menu__item > .side-menu__icon').removeClass('changeColorMenu');
                        $('.nav .slide .side-menu__item').eq(i).find('.side-menu__label').addClass('changeColorMenu');
                        $('.nav .slide .side-menu__item').eq(i).find('.side-menu__icon').addClass('changeColorMenu');
                    }
                });
            });
            $('a[href*=\\#]:not([href=\\#])').click(function () {
                if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                    if (target.length) {
                        $('html,body').animate({
                            scrollTop: target.offset().top
                        }, 1000);
                        return false;
                    }
                }
            });

        });
    </script>
@endsection