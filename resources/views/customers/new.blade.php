<x-app-layout>
    <div class="container min-w-full py-5 lg:py-10 px-5 lg:px-10 flex flex-col gap-3">

        <div class="container min-w-full overflow-x-auto flex justify-center intems-center">
            <div class="card w-fit bg-base-300 shadow-xl">
                <div class="card-body items-center text-center">
                    <h2 class="card-title">New Customer</h2>

                    <div class="grid grid-cols-1 gap-3">

                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-2">

                            <div>
                                <x-input-label for="name" :value="__('Name')"/>
                                <x-text-input id="name" type="text" name="name" :value="old('name')" required autofocus
                                              autocomplete="name"/>
                                <x-input-error :messages="$errors->get('name')" class="mt-2"/>
                            </div>

                            <div>
                                <x-input-label for="legal_name" :value="__('Legal Name')"/>
                                <x-text-input id="legal_name" type="text" name="legal_name" :value="old('legal_name')" required autofocus
                                              autocomplete="legal_name"/>
                                <x-input-error :messages="$errors->get('legal_name')" class="mt-2"/>
                            </div>

                        </div>

                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-2">

                            <div>
                                <x-input-label for="fiscal_code" :value="__('Fiscal Code')"/>
                                <x-text-input id="fiscal_code" type="text" name="fiscal_code" :value="old('fiscal_code')" required autofocus
                                              autocomplete="fiscal_code"/>
                                <x-input-error :messages="$errors->get('fiscal_code')" class="mt-2"/>
                            </div>

                            <div>
                                <x-input-label for="vat_id" :value="__('VAT ID')"/>
                                <x-text-input id="vat_id" type="text" name="vat_id" :value="old('vat_id')" required autofocus
                                              autocomplete="vat_id"/>
                                <x-input-error :messages="$errors->get('vat_id')" class="mt-2"/>
                            </div>

                        </div>

                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-2">

                            <div>
                                <x-input-label for="contact_email" :value="__('E-Mail')"/>
                                <x-text-input id="contact_email" type="email" name="contact_email" :value="old('contact_email')" required autofocus
                                              autocomplete="contact_email"/>
                                <x-input-error :messages="$errors->get('contact_email')" class="mt-2"/>
                            </div>

                            <div>
                                <x-input-label for="contact_pec" :value="__('PEC')"/>
                                <x-text-input id="contact_pec" type="email" name="contact_pec" :value="old('contact_pec')" required autofocus
                                              autocomplete="contact_pec"/>
                                <x-input-error :messages="$errors->get('contact_pec')" class="mt-2"/>
                            </div>

                        </div>

                        <div>
                            <x-input-label for="sdi_code" :value="__('IT SDI Code')"/>
                            <x-text-input id="sdi_code" type="text" name="sdi_code" :value="old('sdi_code')" required autofocus
                                          autocomplete="sdi_code" class="w-full"/>
                            <x-input-error :messages="$errors->get('sdi_code')" class="mt-2"/>
                        </div>

                        <div>
                            <x-input-label for="address_line_1" :value="__('Address Line 1')"/>
                            <x-text-input id="address_line_1" type="text" name="address_line_1" :value="old('address_line_1')" required autofocus
                                          autocomplete="address_line_1" class="w-full"/>
                            <x-input-error :messages="$errors->get('address_line_1')" class="mt-2"/>
                        </div>

                        <div>
                            <x-input-label for="address_line_2" :value="__('Address Line 2')"/>
                            <x-text-input id="address_line_2" type="text" name="address_line_2" :value="old('address_line_2')" required autofocus
                                          autocomplete="address_line_2" class="w-full"/>
                            <x-input-error :messages="$errors->get('address_line_2')" class="mt-2"/>
                        </div>

                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-2">

                            <div>
                                <x-input-label for="address_zip" :value="__('ZIP Code')"/>
                                <x-text-input id="address_zip" type="text" name="address_zip" :value="old('address_zip')" required autofocus
                                              autocomplete="address_zip"/>
                                <x-input-error :messages="$errors->get('address_zip')" class="mt-2"/>
                            </div>

                            <div>
                                <x-input-label for="address_city" :value="__('Legal Name')"/>
                                <x-text-input id="address_city" type="text" name="address_city" :value="old('address_city')" required autofocus
                                              autocomplete="address_city"/>
                                <x-input-error :messages="$errors->get('address_city')" class="mt-2"/>
                            </div>

                        </div>

                        <div>
                            <x-input-label for="address_county" :value="__('Province')"/>
                            <x-text-input id="address_county" type="text" name="address_county" :value="old('address_county')" required autofocus
                                          autocomplete="address_county" class="w-full"/>
                            <x-input-error :messages="$errors->get('address_county')" class="mt-2"/>
                        </div>

                        <div>
                            <x-input-label for="address_country" :value="__('Province')"/>
                            <x-text-input id="address_country" type="text" name="address_country" :value="old('address_country')" required autofocus
                                          autocomplete="address_country" class="w-full"/>
                            <x-input-error :messages="$errors->get('address_country')" class="mt-2"/>
                        </div>

                        <input type="hidden" id="is_customer" name="is_customer" value="true">

                        <x-checkbox id="is_provider" name="is_provider" label="Save also as Provider" class="checkbox-primary" />

                    </div>



                    <div class="card-actions">
                        <button class="btn btn-primary">Save</button>
                    </div>
                </div>
            </div>
        </div>


    </div>
</x-app-layout>
