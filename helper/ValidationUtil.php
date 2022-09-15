<?php
/*test reflection
 * Studi Kasus : Membuat Validation Framework
    ● Sekarang kita akan coba melakukan studi kasus menggunakan Reflection
    ● Kita akan membuat validation framework menggunakan reflection
    ● Validation framework nya cukup sederhana, kita hanya akan mengecek apakah properties bernilai
    null atau tidak, kalo null atau belum di set, kita akan throw ValidationException
    ● Tanpa reflection, biasanya untuk melakukan hal ini, kita butuh pengecekan secara manual
 */

class ValidationUtil {
    //tanpa reflection
    static function validate(LoginRequest $request) {
        if(!isset($request->username)){
            throw new ValidationException("Username is null");
        }else if(!isset($request->password)){
            throw new ValidationException("Password is null");
        }
    }
    
    //dengan reflection
    static function validateReflection($request) {
        $reflection = new ReflectionClass($request);
        $properties = $reflection->getProperties(ReflectionProperty::IS_PUBLIC);
        foreach ($properties as $property) {
            if(!$property->isInitialized($request)){
                throw new ValidationException("$property->name is not set");
            }else if(is_null($property->getValue($request))){
                throw new ValidationException("$property->name is null");
            }
        }
    }
}