# Changelog

## v4.1.15 - v4.1.14 - v4.1.13

There was an issue with the subtree split as we attempted to test lower dependencies on the subtree split, some components where wrongly tagged.

The proper fix is at: https://github.com/api-platform/core/pull/7196

### Bug fixes

* [4bdfd6063](https://github.com/api-platform/core/commit/4bdfd6063a6e80fc9cc33ff16c0ec98fec688291) fix(symfony, laravel) skip webhooks when generates routing (#7175)
* [582076cb6](https://github.com/api-platform/core/commit/582076cb6c0dbcde205fc49d97a0f50405544d0b) fix(openapi): duplicate get path for webhooks (#7174)
* [84b967930](https://github.com/api-platform/core/commit/84b96793043c939f333c1aa2e96f69b23d3e9ece) fix(laravel): persist morph relations (#7170)
* [d51cddba2](https://github.com/api-platform/core/commit/d51cddba2a7618c08e511582ac2f41a6b0eaf657) fix(laravel): index on non-primary key (#7183)
* [fdb485dd2](https://github.com/api-platform/core/commit/fdb485dd2af56f7664bd90705d81e8f58c8b494a) fix(openapi): `example` and `default` with nullable value not being shown

### Features

* [79d08db6a](https://github.com/api-platform/core/commit/79d08db6a4728303b37440c610c96a490d44780a) feat(elasticsearch): add support for v9 (#7180)

## v4.1.11 - v4.1.12

### Bug fixes

* [b14a463a9](https://github.com/api-platform/core/commit/b14a463a9da8a285eba1b0adc63ca4121efb0dce) fix(laravel): register error handler without graphql

## v4.1.10

### Bug fixes

* [329acf21e](https://github.com/api-platform/core/commit/329acf21e3a8618136a21b9121c5891f1fe6b9e8) fix(metadata): infer parameter string type from schema (#7161)
* [5459ba375](https://github.com/api-platform/core/commit/5459ba375b0e7ffd1c783a6e18a6452769eaff46) fix(metadata): parameter cast to array flag (#7160)
* [fe73002bf](https://github.com/api-platform/core/commit/fe73002bf5ae64adb1eb9e310dc62ff158de094d) fix(laravel): duplicated property names
* [b0390080e](https://github.com/api-platform/core/commit/b0390080e90be9ac494c8b4d968e59a4962f32ca) fix(laravel): name convert validation property path
* [730d17a30](https://github.com/api-platform/core/commit/730d17a306df4b92082484a19e82c5e150537331) fix(laravel): validate the model instead of body
* [4d66f5ef3](https://github.com/api-platform/core/commit/4d66f5ef313fe3857611e8345702a10019c79ec5) fix(laravel): persist embeded relations with groups
* [39123942a](https://github.com/api-platform/core/commit/39123942a0e1ff9dfb1e46f4a410160e3cd3fbd7) fix(laravel): register error handler without graphql
* [fd010ea1b](https://github.com/api-platform/core/commit/fd010ea1be86073f5d8905d5640846390ade7ce6) fix(openapi): nullable externalDocs return type
* [470c2e8bd](https://github.com/api-platform/core/commit/470c2e8bdf8d7a7502c02d2b681ced2001e2c1cc) fix(httpcache): iri cache tag for collection operation with path parameter
* [9c0dbb653](https://github.com/api-platform/core/commit/9c0dbb65319beb89193e653e14c99352ac529a55) fix(state): do not expose FQCN in DeserializeProvider on PartialDenormalizationException (#7158)
* [f78986000](https://github.com/api-platform/core/commit/f789860009888582791611a31d6084c620050615) fix(serializer): exception message to not expose resource FQCN (#7156)

### Features

* [767fa926b](https://github.com/api-platform/core/commit/767fa926b10bef771e896300b8e796287392d8c0) feat(laravel): add name_converter option

## v4.1.9

### Bug fixes

* [4dd0cdfc4](https://github.com/api-platform/core/commit/4dd0cdfc4a7f4cc73e7e67a49ee790ed1aaf5707) fix(doctrine): support integer-backed enums in BackedEnumFilter (#7127)
* [70a922573](https://github.com/api-platform/core/commit/70a9225737bece18ad4b66b8ac636c38b2a1008a) fix: error formats (#7148)
* [723d041c4](https://github.com/api-platform/core/commit/723d041c47467d8be0d8a0f20431da9de0a87c5a) fix(metadata): xml PHPize HTTP cache headers (#7140)
* [d3d0ca21b](https://github.com/api-platform/core/commit/d3d0ca21bd45a8383e3e51166a65162be93655bf) fix(serializer): invalid uri variable 400 response (#7135)

## v4.1.8

### Bug fixes

* [0cd9b9f70](https://github.com/api-platform/core/commit/0cd9b9f7002829a6238ed4a1731c3a123c4a91c4) fix: backport handling of union/intersection type in item normalizer (#7106)
* [0fc0904b9](https://github.com/api-platform/core/commit/0fc0904b9409e81041d4d5ae48d699f3360208fc) fix(metadata): correct class to exclude defaults (#7088)
* [5145a8383](https://github.com/api-platform/core/commit/5145a8383c8e234012b957a36701ec824774a817) fix: filtering not using strategy set in attribute when strategy not set per property (#7136)
* [613bb5b75](https://github.com/api-platform/core/commit/613bb5b75fe6cbc79c99e06bcbd664fc3f25c167) fix(doctrine): filters schema for dates and numbers (#7131)
* [ed1ef2594](https://github.com/api-platform/core/commit/ed1ef2594e72180e5fe153e762809e3c22b29e7f) fix(state): specify :property parameter properties (#7110)
* [f55606b01](https://github.com/api-platform/core/commit/f55606b01179703fb4be44f1b66a36136852f154) fix(serializer): throw NotNormalizableValueException when resource not found or invalid IRI on denormalization
* [3faf5d4b4](https://github.com/api-platform/core/commit/3faf5d4b44f7c39d7a9d6ecbcfdf90f7061f1b6f) fix(doctrine): order filter instance service
* [0ff950f37](https://github.com/api-platform/core/commit/0ff950f376345ff6a6d39a202b8bef15c3e423d2) fix: type info deprecations to baseline
* [d93d580a1](https://github.com/api-platform/core/commit/d93d580a1dbaf6a1af5f05f0ebde2f7b68d75d25) fix: command name deprecation

## v4.1.7

### Bug fixes

* [40c09d1c0](https://github.com/api-platform/core/commit/40c09d1c0560ec5c2a96391faf9fbe328f6f2f97) fix(metadata): yaml link security (#7066)
* [545eb69b8](https://github.com/api-platform/core/commit/545eb69b86797f436b8c494912513e1ef9064550) fix(symfony): internal resources should not inherit global defaults (#7073)
* [615bdd6b1](https://github.com/api-platform/core/commit/615bdd6b1c372f6438c6460dfcce69ef6c746e08) fix(hydra): use correctly enable_docs (#7062)
* [694681f4b](https://github.com/api-platform/core/commit/694681f4b187688dd41de1912637003a2fb313a2) fix(symfony): do not ignore Test files on symfony (#7077)
* [6f15be5c7](https://github.com/api-platform/core/commit/6f15be5c7badf197f10bb7d57dd79373f855ef20) fix(laravel): eloquent BelongsTo linking (#7075)
* [dddd3eee4](https://github.com/api-platform/core/commit/dddd3eee40af2e8126476ce3fe4c69f33ec15ac0) fix(metadata): parameter provider within filter (#7081)
* [dfca9bf60](https://github.com/api-platform/core/commit/dfca9bf6023c5535ce7ee9b3829a8efd7f1f9398) Revert "fix(jsonld): duplicate error fields when prefix is enabled (#7021)" (#7074)
* [d696a8e42](https://github.com/api-platform/core/commit/d696a8e4284b0e5b5c56300852bab70283386a99) fix(metadata): use template typehint in parameters (#7078)

## v4.1.6

### Bug fixes

* [44e560839](https://github.com/api-platform/core/commit/44e56083996f2f00a1d87a149fd41aeb0149e4dd) fix(laravel): undefined variable app

## v4.1.5

### Bug fixes

* [60747cc8c](https://github.com/api-platform/core/commit/60747cc8c2fb855798c923b5537888f8d0969568) fix(graphql): access to unauthorized resource using node Relay [CVE-2025-31481](https://github.com/api-platform/core/security/advisories/GHSA-cg3c-245w-728m)
* [7af65aad1](https://github.com/api-platform/core/commit/7af65aad13037d7649348ee3dcd88e084ef771f8) fix(graphql): property security might be cached w/ different objects [CVE-2025-31485](https://github.com/api-platform/core/security/advisories/GHSA-428q-q3vv-3fq3)

## v4.1.4

### Bug fixes

* [eaf007536](https://github.com/api-platform/core/commit/eaf00753693a493788f5ad60c4c45295048eb1a7) fix(state): support filter interface on serializer filter parameter provider (#7047)
* [b0fa2291e](https://github.com/api-platform/core/commit/b0fa2291e50a57789eb14777277769627931cfbd) fix(laravel): error handler only on api routes (#7049)
* [1eb9da13a](https://github.com/api-platform/core/commit/1eb9da13a7e06a8d380dfa27e23a0f8457ceb2bd) fix(laravel): missing filters (#7056)
* [a46a76889](https://github.com/api-platform/core/commit/a46a7688958428b76eb7b6181ae1636cd3b7a4bf) fix(symfony): serialization of closure inside the profiler (#7054)
* [c1b50e2cb](https://github.com/api-platform/core/commit/c1b50e2cb082b00a371bf62c7e86c2f3fea5dadf) fix(doctrine): joinColumn might be an array (#7060)
* [f4c426d71](https://github.com/api-platform/core/commit/f4c426d719b01debaa993b00d03cce8964057ecc) Revert "fix(doctrine): throw an exception when a filter is not found in a par…" (#7046)

## v4.1.3

### Bug fixes

* [8a2265041](https://github.com/api-platform/core/commit/8a22650419fd32efdafad43493f2327b38dd3ee6) fix(laravel): defer "filters" dependent services (#7045)

## v4.1.2

### Bug fixes

* [42f25cf04](https://github.com/api-platform/core/commit/42f25cf0461c382ce10e2378be5e9428c23eb94a) fix: react@18 for UMD + add Laravel support in update-js.sh (#7028)
* [77ffc380b](https://github.com/api-platform/core/commit/77ffc380bcd3c22a1eb4fb0c4f1cd265cfd1a898) fix(laravel): do not require tests while autoconfiguring (#7024)
* [935b9b55d](https://github.com/api-platform/core/commit/935b9b55da0eacce3dd2bbed4584b10b154d97c2) fix(laravel): json api default parameters (#7027)
* [a2824ff4b](https://github.com/api-platform/core/commit/a2824ff4be6276e37e37a3b4e4fb2e9a0096789c) fix(laravel): defer autoconfiguration (#7040)


## v4.1.1

### Bug fixes

* [1e0bc9dc8](https://github.com/api-platform/core/commit/1e0bc9dc8ebe2f947ac0b3bc153047b0b28b0a17) fix(laravel): query extensions with item operations (#7001)
* [1e7076c65](https://github.com/api-platform/core/commit/1e7076c65aea9a2f09b0dcc6598ef2a705e0bb45) fix(laravel): register ErrorProvider (#7018)
* [2771363b0](https://github.com/api-platform/core/commit/2771363b03f1b1c27313ecd457f7a4934524151c) fix(validation): deprecate string message for ValidationException constructor (#7005)
* [500062da2](https://github.com/api-platform/core/commit/500062da2074585979e9a92939bc3b7a3c7554c5) fix(symfony): add a `alwaysBootKernel` property for BC layer (#7007)
* [8697d6630](https://github.com/api-platform/core/commit/8697d66304d276feeef6f838c8c54291d3563aab) fix(openapi): boolean "true" value in HttpOperation::openapi (#7003)
* [b1e0c889c](https://github.com/api-platform/core/commit/b1e0c889cc96602afc9c68fccb9da25a6b6fd354) fix(doctrine): correct the use statement for ManagerRegistry (#7004)
* [fcbd804b2](https://github.com/api-platform/core/commit/fcbd804b29907baba8878ca12ff013732e0326e4) fix(jsonld): duplicate error fields when prefix is enabled (#7021)

### Features

* [129853668](https://github.com/api-platform/core/commit/129853668c3fd66bcfe1a298a0f662c29545f7a4) feat(laravel): stateOptions modelClass for eloquent (#7020)
* [42991b941](https://github.com/api-platform/core/commit/42991b9418c340e44c9e30360e5dd4d869433859) feat(laravel): openapi export command (#7016)
* [dd1b89f9b](https://github.com/api-platform/core/commit/dd1b89f9b771544cb8449d7e9f8f4bbd80c615d2) feat(laravel): auto configure our tagged interfaces (#7014)

Also contains [v4.0.20 changes](#v4020).

## v4.1.0

### Bug fixes

* [da37ca91c](https://github.com/api-platform/core/commit/da37ca91c83e4f715c5acbbe3dc0296e8055bebc) fix(laravel): default to file cache instead of cache.default (#6955)
* [e041d721e](https://github.com/api-platform/core/commit/e041d721ea6fe24026eb021905740b25102d7966) fix: errors retrieval and documentation (#6952)
* [e6130cbcc](https://github.com/api-platform/core/commit/e6130cbccc1a8963b731769ef34f39e09f5d2cde) fix: missing filters on swagger ui entrypoint (#6950)
* [01fd74268](https://github.com/api-platform/core/commit/01fd74268cf0e4a289b31ea74bea7f4e089b8361) fix(laravel): restore accidentally removed BooleanFilter
* [db40a63e7](https://github.com/api-platform/core/commit/db40a63e729fe03be84111dac2b0774fea4ab343) fix(hydra): rdfs:label should not duplicate title (#6748)
* [deb2ed265](https://github.com/api-platform/core/commit/deb2ed265dfee7b8a73fd3b542aef3e29eca3412) fix(laravel): fix use laravel fillable for writable props (#6898)
* [67fbe51c5](https://github.com/api-platform/core/commit/67fbe51c570abe1ece6651ae6a037662e9012881) fix: reintroduce the `show_webby` parameter in Laravel config (#6741)

### Features

* [cb5ede1c5](https://github.com/api-platform/core/commit/cb5ede1c5171677a90dd2d96a87e73cd549c0218) feat: add checkMode parameter to control json schema validation (#6974)
* [771d9401c](https://github.com/api-platform/core/commit/771d9401cffa0463928bb35ab52a56b269d57e1b) feat(elasticsearch): re-introduce v7 support (#6827)
* [b5372ddee](https://github.com/api-platform/core/commit/b5372ddeef2067333761104f3c17ed1b86001bf4) feat(openapi): filter x-apiplatform-tags to produce different openapi specifications (#6945)
* [2e2debb94](https://github.com/api-platform/core/commit/2e2debb94b06752262b0d18b736edc22b501266b) feat(mongodb): Replace usage of deprecated method `AggregationBuilder::execute()` (#6933)
* [4bdf042e5](https://github.com/api-platform/core/commit/4bdf042e5cab1ddb931562cf98a97686d8c415ae) feat(mongodb): Add pagination metadata to the aggregation results (#6912)
* [b968ccd50](https://github.com/api-platform/core/commit/b968ccd5026afb5562c4c4588929885b86ecb3cb) feat(openapi): document error outputs using json-schemas (#6923)
* [c97db6bb2](https://github.com/api-platform/core/commit/c97db6bb2f6b2db9a6a17141bdb56bd51e9fc50d) feat: swagger ui persist authorization option (#6877)
* [00787f32d](https://github.com/api-platform/core/commit/00787f32da54418de7d869cff218e22d8ae2ae1d) feat(laravel): automatically register policies (#6623)
* [12c42096b](https://github.com/api-platform/core/commit/12c42096bb0006d6ebae60ae5d90e9b356f9a335) feat(metadata): ability to hide an hydra class/operation (#6871)
* [57f15cf4f](https://github.com/api-platform/core/commit/57f15cf4f38278315c5f31d3949416c9455ba0d0) feat(state): strict query parameters (#6399)
* [bd0e92936](https://github.com/api-platform/core/commit/bd0e92936f82d3cd4563cd45ebf1f73fd1db9f01) feat(openapi): HTTP Authentication Support for Swagger UI (#6665)
* [be98f4e01](https://github.com/api-platform/core/commit/be98f4e01a52d8341ef9b65ed2f4e3b46ab31165) feat(graphql): allow to configure max query depth and max query complexity (#6880)
* [c78ed0b78](https://github.com/api-platform/core/commit/c78ed0b78baf5d2e1b7444a9882ba039c70a3887) feat(laravel): boolean filter (#6806)
* [d0a442786](https://github.com/api-platform/core/commit/d0a44278630d201b91cbba0774a09f4eeaac88f7) feat(doctrine): enhance getLinksHandler with method validation and typo suggestions (#6874)
* [f67f6f1ac](https://github.com/api-platform/core/commit/f67f6f1acb6476182c18a3503f2a8bc80ae89a0b)  feat(doctrine): doctrine filters like laravel eloquent filters  (#6775)

## Notes

This version as the 4.0.19 is compatible with Laravel 12.
The [hydra patch](#6748) changes default `hydra:title` and uses the resource `shortname`. Previously the `hydra:title` information was duplicating the `hydra:description`. 
The `rdfs:label` got removed from the `hydra:Class` as it was used instead of the `hydra:title`.
On `hydra:property` `rdfs:label` got renamed to `label` as the `rdfs` namespace is available in the context. 
The `ApiPlatform\Metadata\ErrorResource` and the `ConstraintViolation` (`ValidationException` class) are now generated directly from your PHP classes, only our `ConstraintViolationList` is hard-written and documents the `ConstraintViolation::violation` property. Therefore, your [own error resources](https://api-platform.com/docs/guides/error-resource/) are also documented. On top of that, we now set the `rdfs:subClassOf` to `hydra:Error`.
`#[ApiProperty(hydra: false)]` allows you to skip a documented `hydra:supportedProperty` on a class.
On write operations, we added the [expectsHeader](https://www.hydra-cg.com/spec/latest/core/#hydra:expectsHeader) field. 

## v4.1.0-beta.2

### Bug fixes

* [da37ca91c](https://github.com/api-platform/core/commit/da37ca91c83e4f715c5acbbe3dc0296e8055bebc) fix(laravel): default to file cache instead of cache.default (#6955)
* [e041d721e](https://github.com/api-platform/core/commit/e041d721ea6fe24026eb021905740b25102d7966) fix: errors retrieval and documentation (#6952)
* [e6130cbcc](https://github.com/api-platform/core/commit/e6130cbccc1a8963b731769ef34f39e09f5d2cde) fix: missing filters on swagger ui entrypoint (#6950)

### Features

* [771d9401c](https://github.com/api-platform/core/commit/771d9401cffa0463928bb35ab52a56b269d57e1b) feat(elasticsearch): re-introduce v7 support (#6827)
* [b5372ddee](https://github.com/api-platform/core/commit/b5372ddeef2067333761104f3c17ed1b86001bf4) feat(openapi): filter x-apiplatform-tags to produce different openapi specifications (#6945)

## v4.1.0-beta.1

### Features

* [2e2debb94](https://github.com/api-platform/core/commit/2e2debb94b06752262b0d18b736edc22b501266b) feat(mongodb): Replace usage of deprecated method `AggregationBuilder::execute()` (#6933)
* [4bdf042e5](https://github.com/api-platform/core/commit/4bdf042e5cab1ddb931562cf98a97686d8c415ae) feat(mongodb): Add pagination metadata to the aggregation results (#6912)
* [b968ccd50](https://github.com/api-platform/core/commit/b968ccd5026afb5562c4c4588929885b86ecb3cb) feat(openapi): document error outputs using json-schemas (#6923)

## v4.1.0-alpha.2

### Bug fixes

* [01fd74268](https://github.com/api-platform/core/commit/01fd74268cf0e4a289b31ea74bea7f4e089b8361) fix(laravel): restore accidentally removed BooleanFilter
* [db40a63e7](https://github.com/api-platform/core/commit/db40a63e729fe03be84111dac2b0774fea4ab343) fix(hydra): rdfs:label should not duplicate title (#6748)
* [deb2ed265](https://github.com/api-platform/core/commit/deb2ed265dfee7b8a73fd3b542aef3e29eca3412) fix(laravel): fix use laravel fillable for writable props (#6898)

### Features

* [c97db6bb2](https://github.com/api-platform/core/commit/c97db6bb2f6b2db9a6a17141bdb56bd51e9fc50d) feat: swagger ui persist authorization option (#6877)

### Notes

The [hydra patch](#6748) changes default `hydra:title` and uses the resource `shortname`. Previously the `hydra:title` information was duplicating the `hydra:description`. 
The `rdfs:label` got removed from the `hydra:Class` as it was used instead of the `hydra:title`.
On `hydra:property` `rdfs:label` got renamed to `label` as the `rdfs` namespace is available in the context. 
The `ApiPlatform\Metadata\ErrorResource` and the `ConstraintViolation` (`ValidationException` class) are now generated directly from your PHP classes, only our `ConstraintViolationList` is hard-written and documents the `ConstraintViolation::violation` property. Therefore, your [own error resources](https://api-platform.com/docs/guides/error-resource/) are also documented. On top of that, we now set the `rdfs:subClassOf` to `hydra:Error`.
`#[ApiProperty(hydra: false)]` allows you to skip a documented `hydra:supportedProperty` on a class.
On write operations, we added the [expectsHeader](https://www.hydra-cg.com/spec/latest/core/#hydra:expectsHeader) field. 


## v4.1.0-alpha.1

### Bug fixes

* [67fbe51c5](https://github.com/api-platform/core/commit/67fbe51c570abe1ece6651ae6a037662e9012881) fix: reintroduce the `show_webby` parameter in Laravel config (#6741)

### Features

* [00787f32d](https://github.com/api-platform/core/commit/00787f32da54418de7d869cff218e22d8ae2ae1d) feat(laravel): automatically register policies (#6623)
* [12c42096b](https://github.com/api-platform/core/commit/12c42096bb0006d6ebae60ae5d90e9b356f9a335) feat(metadata): ability to hide an hydra class/operation (#6871)
* [57f15cf4f](https://github.com/api-platform/core/commit/57f15cf4f38278315c5f31d3949416c9455ba0d0) feat(state): strict query parameters (#6399)
* [bd0e92936](https://github.com/api-platform/core/commit/bd0e92936f82d3cd4563cd45ebf1f73fd1db9f01) feat(openapi): HTTP Authentication Support for Swagger UI (#6665)
* [be98f4e01](https://github.com/api-platform/core/commit/be98f4e01a52d8341ef9b65ed2f4e3b46ab31165) feat(graphql): allow to configure max query depth and max query complexity (#6880)
* [c78ed0b78](https://github.com/api-platform/core/commit/c78ed0b78baf5d2e1b7444a9882ba039c70a3887) feat(laravel): boolean filter (#6806)
* [d0a442786](https://github.com/api-platform/core/commit/d0a44278630d201b91cbba0774a09f4eeaac88f7) feat(doctrine): enhance getLinksHandler with method validation and typo suggestions (#6874)
* [f67f6f1ac](https://github.com/api-platform/core/commit/f67f6f1acb6476182c18a3503f2a8bc80ae89a0b)  feat(doctrine): doctrine filters like laravel eloquent filters  (#6775)

## v4.0.22

### Bug fixes

* [60747cc8c](https://github.com/api-platform/core/commit/60747cc8c2fb855798c923b5537888f8d0969568) fix(graphql): access to unauthorized resource using node Relay [CVE-2025-31481](https://github.com/api-platform/core/security/advisories/GHSA-cg3c-245w-728m)
* [7af65aad1](https://github.com/api-platform/core/commit/7af65aad13037d7649348ee3dcd88e084ef771f8) fix(graphql): property security might be cached w/ different objects [CVE-2025-31485](https://github.com/api-platform/core/security/advisories/GHSA-428q-q3vv-3fq3)
* [f4c426d71](https://github.com/api-platform/core/commit/f4c426d719b01debaa993b00d03cce8964057ecc) Revert "fix(doctrine): throw an exception when a filter is not found in a par…" (#7046)

## v4.0.21

### Bug fixes

* [7cb5a6db8](https://github.com/api-platform/core/commit/7cb5a6db87241d95e6c324318fe861bd4f1820cf) fix: allow parameter provider as object (#7032)
* [bb83e9a03](https://github.com/api-platform/core/commit/bb83e9a034c511156aa20a8555bf367374ef5458) fix(symfony): allow to merge array with string in global defaults (#7037)
* [da2e86809](https://github.com/api-platform/core/commit/da2e86809d4a8dec294dc2fc148d92406f1f7fd1) fix: header parameter should be case insensitive (#7031)


### Features

## v4.0.20

### Bug fixes

* [284937039](https://github.com/api-platform/core/commit/284937039c61d4516687c648f4a7581ec1686f3d) fix(doctrine): mapping ArrayAccess deprecation (#6982)
* [a434173b8](https://github.com/api-platform/core/commit/a434173b82f735041a79cb5f469ee0e731ca5956) fix(doctrine): Add a proper exception when a doctrine manager could not be found for a resource class (#6995)


### Features

## v4.0.19

### Bug fixes

* [1dfefda5e](https://github.com/api-platform/core/commit/1dfefda5e22b7ec03780e928e943097dd31ef68f) fix(laravel): add middleware granularity (#6962)

Compatibility with Laravel 12.

## v4.0.18

### Bug fixes

* [7007dcca8](https://github.com/api-platform/core/commit/7007dcca8649814d871db7abe0fd65dc9c94a176) fix(laravel): duplicate middleware in routes
* [a16147ab7](https://github.com/api-platform/core/commit/a16147ab7b36f5238700c6ee9ee9253ce1424808) fix(laravel): handle route prefix (#6978)
* [d2e1963c5](https://github.com/api-platform/core/commit/d2e1963c56733b3174ae37cbc27a1374eba80bee) fix(symfony): detach objects to prevent loop when using Doctrine middleware and Mercure (#6936) (#6965)


### Features

## v4.0.17

### Bug fixes

* [5124d8c57](https://github.com/api-platform/core/commit/5124d8c571bc4324aa060e4ff808d48f0ffa8d73) fix(laravel): Prevent overwriting existing routes on the router (#6941)
* [5c7e0d2c0](https://github.com/api-platform/core/commit/5c7e0d2c015b5264b2f857abc7e6cb944582de21) fix(symfony): error wrongly inherit normalization context (#6939)
* [af35d34d0](https://github.com/api-platform/core/commit/af35d34d01e62e96dd81dadde6a056ce67d47703) fix(laravel): mitigate property metadata read for Error (#6951)
* [d5b48b1cd](https://github.com/api-platform/core/commit/d5b48b1cd6163ee755211476fdd3d4dd0bf6f7ae) fix(laravel): SwaggerUI custom CSS (#6937)
* [da796b979](https://github.com/api-platform/core/commit/da796b979384663c3eaf4e4fe4d215b447800844) fix(metadata): allow serializer attribute object in ApiProperty::$serialize (#6946)
* [de2d298e3](https://github.com/api-platform/core/commit/de2d298e306b196bce834af290aec242807ea39b) fix: ensure template files have a tpl file extension (#6826) (#6829)
* [b6a67a197](https://github.com/api-platform/core/commit/b6a67a197a668ce15f216cffbcddc637f19c69c2) perf: various optimizations for Laravel/Symfony (#6954)

To save some time during cache warmup we recommend to define uri variables such as: `uriVariables: ['id']`. More details at #6954.

### Features

## v4.0.16

### Bug fixes

* [dc4fc84ba](https://github.com/api-platform/core/commit/dc4fc84ba93e22b4f44a37e90a93c6d079c1c620) fix(graphql): securityAfterResolver not called

### Features

## v4.0.15

### Bug fixes

* [36cee399c](https://github.com/api-platform/core/commit/36cee399cfd519355b03d0406921066a22ab474c) fix(state): skip Content-Location header for GET requests (#6901)
* [dba9de197](https://github.com/api-platform/core/commit/dba9de197001e91094e594f0e4dc638007cce7a6) fix(symfony): fix property restrictions for root resource with dynamic validation groups (#6908)

### Features

* [421d97ecf](https://github.com/api-platform/core/commit/421d97ecfdbc7d699a3d017d1e3ae3827a38b216) feat(laravel): add support for backed enum normalizers (#6911)

Also contains [v3.4.15 changes](#v3415).

## v4.0.14

### Bug fixes

* [97cdb6b3f](https://github.com/api-platform/core/commit/97cdb6b3f43471789e096c9dc3a0c3c7b6d4e43c) fix(state): remove ProcessorInterface laravel specific type
* [b12a0d005](https://github.com/api-platform/core/commit/b12a0d005fda58a162b82a3574e6ee877838a55b) fix(graphql): register types for parameter args (#6895)

Also contains [v3.4.14 changes](#v3414).

## v4.0.13

### Bug fixes

* [3a694624b](https://github.com/api-platform/core/commit/3a694624bdd6c82df756ff04682b5f90fd625f59) fix(laravel): eloquent BelongsToMany relation (#6862)
* [c8db7aef0](https://github.com/api-platform/core/commit/c8db7aef05557675940c3e610c94c6a2184d90ba) fix(laravel): jsonapi query parameters (page, sort, fields and include) (#6876)
* [f2c998158](https://github.com/api-platform/core/commit/f2c998158a70632a26efcdd29a17d7f3a2cb859c) fix(jsonld): anonymous context hydra_prefix value (#6873)

Also contains [v3.4.10 changes](#v3410).

## v4.0.12

### Bug fixes

* [4db72f55f](https://github.com/api-platform/core/commit/4db72f55fa9dcd48518dc62b5bf472895b6a966b) fix: filter may not use FilterInterface (#6858)
* [c899a3da1](https://github.com/api-platform/core/commit/c899a3da14eb2dff49095d28855ef8f2a1c4072a) fix(laravel): use tagged resolvers as graphql resolvers
 (#6855)
* [e0f8c38b9](https://github.com/api-platform/core/commit/e0f8c38b98a05f29ad36b37725e54a036209a859) fix(laravel): graphql currentPage (#6857)

Also contains [v3.4.9 changes](#v349).

## v4.0.11

### Bug fixes

* [af66075fd](https://github.com/api-platform/core/commit/af66075fdd6b83bdebc1c4ca33cc0ab7e1a7f8af) fix(laravel): fix foregin keys (relations) beeing in attributes (#6843)

* [2d59c6369](https://github.com/api-platform/core/commit/2d59c63699b4602cfe4d62504896c6d4121c1be4) feat(laravel): belongs to many relations (#6818)

Also contains [v3.4.8 changes](#v348).

## v4.0.10

### Bug fixes

* [774590069](https://github.com/api-platform/core/commit/77459006912d9162fdae9eadd496a62858ac990e) fix(laravel): add contact & license options to fix swagger UI issues (#6804)
* [7ff9790c8](https://github.com/api-platform/core/commit/7ff9790c8e326de8152c653974fd523770dc6501) fix(laravel): allow boolean cast (#6808)
* [f19dd9446](https://github.com/api-platform/core/commit/f19dd9446f5722d243e82b1e7bc34ebdab95719d) fix(laravel): graphQl type locator indexes (#6815)

Also contains [v3.4.7 changes](#v347).

## v4.0.9

### Bug fixes

* [417fef5da](https://github.com/api-platform/core/commit/417fef5da9b1f3f16e323a193dec141f13b1ebc5) fix(laravel): overlaping route format (#6782)
* [81099065e](https://github.com/api-platform/core/commit/81099065e30eb0356881907bd52095b85b9cae3d) fix(laravel): declare normalizer list as a service (#6786)
* [dc8c09b1e](https://github.com/api-platform/core/commit/dc8c09b1e1ac15a7bcd4961fc3e80b06bec82e77) fix(laravel) graphQl Relationship loading (#6792)

Also contains [v3.4.6 changes](#v346).

## v4.0.8

### Bug fixes

* [dddb97075](https://github.com/api-platform/core/commit/dddb97075af9c6e2517e1881b803c9d31a1913cf) fix(symfony): default formats order (#6780)

## v4.0.7

### Bug fixes

* [17c916c3a](https://github.com/api-platform/core/commit/17c916c3a1bcc837c9bc842dc48390dbeb043450) fix(symfony): BackedEnumProvider typo fix (#6769)
* [216d9ccaa](https://github.com/api-platform/core/commit/216d9ccaacf7845daaaeab30f3a58bb5567430fe) fix(serializer): fetch type on normalization error when possible (#6761)
* [2f967d934](https://github.com/api-platform/core/commit/2f967d9345004779f409b9ce1b5d0cbba84c7132) fix(doctrine): throw an exception when a filter is not found in a parameter (#6767)
* [6c9b508b0](https://github.com/api-platform/core/commit/6c9b508b030976741a68f84e226502e6c218e896) fix(laravel): remove link header when jsonld is not enabled (#6768)
* [736ca045e](https://github.com/api-platform/core/commit/736ca045e6832f04aaa002ddd7b85c55df4696bb) fix(validator): allow to pass both a ConstraintViolationList and a previous exception (#6762)
* [9ac3661b6](https://github.com/api-platform/core/commit/9ac3661b6a75255832203b87a9ba7994add64061) fix(hydra): store and use hydra context in a local variable (#6765)

## v4.0.6

### Bug fixes

* [195c4e788](https://github.com/api-platform/core/commit/195c4e7883520416e042ac78143b18652a216fbf) fix(hydra): hydra context changed (#6710)
* [4f65ef2d0](https://github.com/api-platform/core/commit/4f65ef2d061215df348e3505856f0f41c7c909ed) fix(metadata): providing parameter constraints skips automatic ones (#6756)
* [5a8ef115a](https://github.com/api-platform/core/commit/5a8ef115a90791992a6c1325fb6d1ac458b22153) fix(symfony): ECMA-262 pattern with RegExp validator (#6733)
* [67c5a2a24](https://github.com/api-platform/core/commit/67c5a2a2463bca94f0997b4fab1248a08994465b) fix(laravel): jsonapi error serialization (#6755)
* [ac6f667f3](https://github.com/api-platform/core/commit/ac6f667f301f6c4c399a707faf00567239bd98d8) fix(laravel): collection relations other than HasMany (#6737)

* [cecd77149](https://github.com/api-platform/core/commit/cecd77149795c1a455ac72bc3ed0606413e69900) feat(laravel): use laravel cache setting (#6751)

## v4.0.5

### Bug fixes

* [4171d5f9c](https://github.com/api-platform/core/commit/4171d5f9cd41731b857c53a186270ba0626baedf) fix(graphql): register query parameter arguments with filters (#6726)
* [48ab53816](https://github.com/api-platform/core/commit/48ab53816c55e6116aa64ac81f522f4b7b9bb9f6) fix(laravel): make command writes to app instead of src (#6723)

## v4.0.4

### Bug fixes

* [2e8287dad](https://github.com/api-platform/core/commit/2e8287dad0c0315dd6527279a6359c0a22f40d93) fix(laravel): allow serializer attributes through ApiProperty (#6680)
* [439c188ea](https://github.com/api-platform/core/commit/439c188ea1685676d5e705a49a4b835f35a84d72) fix(laravel): match integer type (#6715)
* [4ad7a50aa](https://github.com/api-platform/core/commit/4ad7a50aaabf0d85e2eb5bb3a6d4ef8d5b7b39a7) fix(laravel): openapi Options binding (#6714)
* [ec6e64512](https://github.com/api-platform/core/commit/ec6e6451299a50fcab397e86fafe6db132ce7519) fix(laravel): skip resource path when not available (#6697)

### Features

* [5aa799321](https://github.com/api-platform/core/commit/5aa7993219a6fb55f11476a031963a542b2d3586) feat(laravel): command to generate state providers/processors (#6708)

## v4.0.3

### Bug fixes

* [025f63e69](https://github.com/api-platform/core/commit/025f63e69c2ec655a828559ed78c49a365ca043b) fix(laravel): route registration of EntrypointController should be last (#6667)
* [2b4937a3e](https://github.com/api-platform/core/commit/2b4937a3e09fb891b99fd8499b597190a4b740e0) fix(laravel): eloquent accessors (#6668)
* [4312a1f55](https://github.com/api-platform/core/commit/4312a1f55f4f80152be93734cb5cf73c70dee53a) fix(metadata): register parameters on graphql operations
* [6d4e24883](https://github.com/api-platform/core/commit/6d4e24883767f1c58dff5e52f57b0422110fa38f) fix(laravel): hiding/showing relationships (#6679)
* [85306f2f5](https://github.com/api-platform/core/commit/85306f2f5a7d480b1570471689d1d3ca4e9846a3) fix(laravel): swagger ui authentication (#6661)
* [a6e37068e](https://github.com/api-platform/core/commit/a6e37068ea49d1b5a4ee098a62a287d62fba1c35) fix(laravel): use Model::qualifyColumn instead of hardcoding $table.$column (#6658)
* [b0d5a2ade](https://github.com/api-platform/core/commit/b0d5a2adedb583074aa93d4f641bdda419d31ffa) fix(laravel): register global middleware to secure non-rest routes
* [f9d96e546](https://github.com/api-platform/core/commit/f9d96e546a37121244ab98d65c2d91f48b1bb112) fix(metadata): graphql can be disabled but with an existing operation


### Features

* [df701da05](https://github.com/api-platform/core/commit/df701da05620a847f529ebabaee97f8cf5ecb37f) feat(laravel): graphql policies

## v4.0.2

### Bug fixes

* [219199db3](https://github.com/api-platform/core/commit/219199db386cab05f1c1225b889c0a9609b36699) fix(symfony): missing alias to serializer context builder interface (#6643)
* [5f943e3bb](https://github.com/api-platform/core/commit/5f943e3bb56934ba5d0b858f6b4c20a2985b6b6b) fix(graphql): wrong exception namespace (#6647)
* [72a0b669a](https://github.com/api-platform/core/commit/72a0b669a426ca4bbbf14cf80a6ced683b947e8c) fix(serializer): remove serializer context builder interface
* [88bd8c3e1](https://github.com/api-platform/core/commit/88bd8c3e151c843649bcac3feefc2cb956212410) fix(laravel): installation command, fix config overwrites (#6649)
* [93314b08d](https://github.com/api-platform/core/commit/93314b08de1e6f0505af9e3a3ba3d9971f1ef09c) fix(serializer): allow state's SerializerFilterContextBuilderInterface (#6632)
* [9a0afc917](https://github.com/api-platform/core/commit/9a0afc917a4bfa824ffbb640af9bb1114a5d31b4) fix(serializer): remove unnecessary dependency
* [c47e2996e](https://github.com/api-platform/core/commit/c47e2996e51c587c998fde88903703bd6ac9a43c) fix: default format and standard_put values
* [e327f5f69](https://github.com/api-platform/core/commit/e327f5f69c823c1ed674eefc0eb2551e30fb36bd) fix(symfony): namespace of path segment name generator services (#6642)

Notes:

`standard_put=true` is now the default, you can set it to `false` using `extra_properties.defaults`

## v4.0.1

### Bug fixes

* [eb80a1a56](https://github.com/api-platform/core/commit/eb80a1a5651b81cab13b018662a0d21e05facbfe) fix(state): precise format on content-location (#6627)

### Features

* [4a2271670](https://github.com/api-platform/core/commit/4a2271670a88c318ab38bd7eb2a1c0b93a5c0ea0) feat: api-platform/json-hal component (#6621)

## v4.0.0

### Bug fixes

* [7c5689626](https://github.com/api-platform/core/commit/7c568962634691892fe1057b3c982765a1c20ba2) fix(laravel): call authorize on delete but not validation (#6618)
* [d74b2b5fa](https://github.com/api-platform/core/commit/d74b2b5fa939a9f5ca11d3538e358070047a6c3d) fix: swagger ui with route identifier (#6616)
* [de6e3f546](https://github.com/api-platform/core/commit/de6e3f546a26c5ad5444d8e2448d81faec36bd73) fix(laravel): validate enum schema within filter (#6615)
* [0a461d749](https://github.com/api-platform/core/commit/0a461d749b7b4ac706f3b7b6138a13cb6e4a9d2d) fix(symfony): allow schema restriction for collection like property from choice constraint (#6520)
* [0c66a494d](https://github.com/api-platform/core/commit/0c66a494d3bda5817e59da2e43f0232e2e8fea15) fix(laravel): cache metadata, add trace on debug mode (#6555)
* [1b6e7c6cc](https://github.com/api-platform/core/commit/1b6e7c6ccf3d2c61816a7dceb35f1d5980ea0565) fix(laravel): disable GraphQL by default and fix provider
* [290944103](https://github.com/api-platform/core/commit/290944103039a4a6d64904d1a89264b800c809d5) fix(laravel): SwaggerUI title (#6527)
* [2df0860b5](https://github.com/api-platform/core/commit/2df0860b577bb1ae0882096436f3eaeb91281901) fix(laravel): Eloquent date and datetime type detection (#6529)
* [2fc74f2e6](https://github.com/api-platform/core/commit/2fc74f2e651f229e982343c1cb0c6a2c5d5eee64) fix: remove PUT from default operations (#6570)
* [3b42c9ff2](https://github.com/api-platform/core/commit/3b42c9ff235de5feac555d0283c513a6e4643953) fix: deserialization path for not denormalizable relations collected errors (#6537)
* [3c554a605](https://github.com/api-platform/core/commit/3c554a605ec9d5f36dfd852c4f93f0ce582064c9) fix(laravel): docs _format and open swagger ui (#6595)
* [3c5aea80f](https://github.com/api-platform/core/commit/3c5aea80fdbed20216764f6d721fe4f37cf2889d) fix(symfony): load isApiResource metadata (#6562)
* [4ee209eff](https://github.com/api-platform/core/commit/4ee209effb0fd11789db9f016d6e90aa3cb942a9) fix(laravel): visible and hidden fields support (#6538)
* [6e15eb95f](https://github.com/api-platform/core/commit/6e15eb95fffb2deec3d381f5d6fd87e189772270) fix(laravel): register HydraPartialCollectionViewNormalizer (#6588)
* [86365be2a](https://github.com/api-platform/core/commit/86365be2a5b8e8d0050e09d4e401bb758aa8b7a8) fix(laravel): Eloquent PropertyAccessor (#6536)
* [a1dd0b54d](https://github.com/api-platform/core/commit/a1dd0b54d137d70f2163fa03690c1f4c74a549c0) fix(laravel): entrypoint with doc formats (#6552)
* [a4a53ab48](https://github.com/api-platform/core/commit/a4a53ab4838f4d17d3677952157b44ec165e3e3a) fix(laravel): identitifer is not writable unless marked as writable (#6531)
* [a6f355358](https://github.com/api-platform/core/commit/a6f355358a88e7cf7759db0dee41e185157ddc68) fix(laravel): do not normalize exception originalTrace (#6533)
* [bd6a57c4c](https://github.com/api-platform/core/commit/bd6a57c4c0b38d6f880a5bd79031a87033f707e6) fix(laravel): snake case props (#6532)
* [c31566602](https://github.com/api-platform/core/commit/c315666022185839742b8c5ef81601d85d8c3f4b) fix(laravel): api_doc route regex
* [ebc61d59d](https://github.com/api-platform/core/commit/ebc61d59d60eda3a020593cf4cb46c5d30548e46) fix(laravel): entrypoint serialization (#6541)

### Features

* [00787f32d](https://github.com/api-platform/core/commit/00787f32da54418de7d869cff218e22d8ae2ae1d) feat(laravel): automatically register policies (#6623)
* [06a647a80](https://github.com/api-platform/core/commit/06a647a80d4c6b7bfb3474d0685bcb445b56a5a8) feat(laravel): add CSV support (#6617)
* [a49bde1ea](https://github.com/api-platform/core/commit/a49bde1ea79ae4226b70c20f9bf967ac77e9ab89)  feat(laravel): filter validations rules
* [03357fb90](https://github.com/api-platform/core/commit/03357fb90ac0003f0cec2002df01711d0fb99a1e) feat(laravel): supports more Eloquent types (#6544)
* [05e75be83](https://github.com/api-platform/core/commit/05e75be834c629e0487caaaedfe9fdf0bd5a7226) feat(doctrine): add new filter for filtering an entity using PHP backed enum, resolves #6506 (#6547) (#6560)
* [538648840](https://github.com/api-platform/core/commit/538648840dc7439b12033ed6f413f3167705da4d) feat(laravel): enable graphQl support (#6550)
* [5b9767be2](https://github.com/api-platform/core/commit/5b9767be215afdf61fccf8490d0a3a7018078ce5) feat(laravel): policy, auth and gate (#6523)
* [5e1233c57](https://github.com/api-platform/core/commit/5e1233c57a497d00a7c4bd3e3ad0cac25aeac014) feat(laravel): search filter (#6534)
* [9c461626f](https://github.com/api-platform/core/commit/9c461626f7d02f8d15487134b636f11966c19a5e) feat(laravel): provide a trait in addition to the annotation (#6543)
* [c9f18d4fb](https://github.com/api-platform/core/commit/c9f18d4fb833ea0b89ef18021cad491cf0600ef1)  feat(laravel): eloquent filters (search, date, equals, or) (#6593)
* [e09e73efc](https://github.com/api-platform/core/commit/e09e73efc5b4a39ab33d00c5d5422d8d9f7b5e89) feat: remove hydra prefix (#6418)

## v4.0.0-alpha.5

### Bug fixes

* [0a461d749](https://github.com/api-platform/core/commit/0a461d749b7b4ac706f3b7b6138a13cb6e4a9d2d) fix(symfony): allow schema restriction for collection like property from choice constraint (#6520)
* [0c66a494d](https://github.com/api-platform/core/commit/0c66a494d3bda5817e59da2e43f0232e2e8fea15) fix(laravel): cache metadata, add trace on debug mode (#6555)
* [1b6e7c6cc](https://github.com/api-platform/core/commit/1b6e7c6ccf3d2c61816a7dceb35f1d5980ea0565) fix(laravel): disable GraphQL by default and fix provider
* [290944103](https://github.com/api-platform/core/commit/290944103039a4a6d64904d1a89264b800c809d5) fix(laravel): SwaggerUI title (#6527)
* [2df0860b5](https://github.com/api-platform/core/commit/2df0860b577bb1ae0882096436f3eaeb91281901) fix(laravel): Eloquent date and datetime type detection (#6529)
* [2fc74f2e6](https://github.com/api-platform/core/commit/2fc74f2e651f229e982343c1cb0c6a2c5d5eee64) fix: remove PUT from default operations (#6570)
* [3b42c9ff2](https://github.com/api-platform/core/commit/3b42c9ff235de5feac555d0283c513a6e4643953) fix: deserialization path for not denormalizable relations collected errors (#6537)
* [3c554a605](https://github.com/api-platform/core/commit/3c554a605ec9d5f36dfd852c4f93f0ce582064c9) fix(laravel): docs _format and open swagger ui (#6595)
* [3c5aea80f](https://github.com/api-platform/core/commit/3c5aea80fdbed20216764f6d721fe4f37cf2889d) fix(symfony): load isApiResource metadata (#6562)
* [4ee209eff](https://github.com/api-platform/core/commit/4ee209effb0fd11789db9f016d6e90aa3cb942a9) fix(laravel): visible and hidden fields support (#6538)
* [6e15eb95f](https://github.com/api-platform/core/commit/6e15eb95fffb2deec3d381f5d6fd87e189772270) fix(laravel): register HydraPartialCollectionViewNormalizer (#6588)
* [86365be2a](https://github.com/api-platform/core/commit/86365be2a5b8e8d0050e09d4e401bb758aa8b7a8) fix(laravel): Eloquent PropertyAccessor (#6536)
* [a1dd0b54d](https://github.com/api-platform/core/commit/a1dd0b54d137d70f2163fa03690c1f4c74a549c0) fix(laravel): entrypoint with doc formats (#6552)
* [a4a53ab48](https://github.com/api-platform/core/commit/a4a53ab4838f4d17d3677952157b44ec165e3e3a) fix(laravel): identitifer is not writable unless marked as writable (#6531)
* [a6f355358](https://github.com/api-platform/core/commit/a6f355358a88e7cf7759db0dee41e185157ddc68) fix(laravel): do not normalize exception originalTrace (#6533)
* [bd6a57c4c](https://github.com/api-platform/core/commit/bd6a57c4c0b38d6f880a5bd79031a87033f707e6) fix(laravel): snake case props (#6532)
* [c31566602](https://github.com/api-platform/core/commit/c315666022185839742b8c5ef81601d85d8c3f4b) fix(laravel): api_doc route regex
* [ebc61d59d](https://github.com/api-platform/core/commit/ebc61d59d60eda3a020593cf4cb46c5d30548e46) fix(laravel): entrypoint serialization (#6541)


### Features

* [03357fb90](https://github.com/api-platform/core/commit/03357fb90ac0003f0cec2002df01711d0fb99a1e) feat(laravel): supports more Eloquent types (#6544)
* [05e75be83](https://github.com/api-platform/core/commit/05e75be834c629e0487caaaedfe9fdf0bd5a7226) feat(doctrine): add new filter for filtering an entity using PHP backed enum, resolves #6506 (#6547) (#6560)
* [538648840](https://github.com/api-platform/core/commit/538648840dc7439b12033ed6f413f3167705da4d) feat(laravel): enable graphQl support (#6550)
* [5b9767be2](https://github.com/api-platform/core/commit/5b9767be215afdf61fccf8490d0a3a7018078ce5) feat(laravel): policy, auth and gate (#6523)
* [5e1233c57](https://github.com/api-platform/core/commit/5e1233c57a497d00a7c4bd3e3ad0cac25aeac014) feat(laravel): search filter (#6534)
* [9c461626f](https://github.com/api-platform/core/commit/9c461626f7d02f8d15487134b636f11966c19a5e) feat(laravel): provide a trait in addition to the annotation (#6543)
* [c9f18d4fb](https://github.com/api-platform/core/commit/c9f18d4fb833ea0b89ef18021cad491cf0600ef1)  feat(laravel): eloquent filters (search, date, equals, or) (#6593)
* [e09e73efc](https://github.com/api-platform/core/commit/e09e73efc5b4a39ab33d00c5d5422d8d9f7b5e89) feat: remove hydra prefix (#6418)

## v4.0.0-alpha.1

### Bug fixes

* [f7f9f5427](https://github.com/api-platform/core/commit/f7f9f542719ad43d6e0fe74024a2fa05c11cb6fa) fix(laravel): phpstan/doc-parser is mandatory

### Features

* [0d5f35683](https://github.com/api-platform/core/commit/0d5f356839eb6aa9f536044abe4affa736553e76) feat(laravel): laravel component (#5882)

## v3.4.16

### Bug fixes

* [dc4fc84ba](https://github.com/api-platform/core/commit/dc4fc84ba93e22b4f44a37e90a93c6d079c1c620) fix(graphql): securityAfterResolver not called
* [9eb5c4e94](https://github.com/api-platform/core/commit/9eb5c4e941d0ebf59bc8ef5777b144db9b4a0899) fix(symfony): suggest `DocumentationAction` as replacement for deprecated `SwaggerUiAction` (#6894)

## v3.4.15

### Bug fixes

* [ab03b5544](https://github.com/api-platform/core/commit/ab03b5544f742b98a39cc23fc157f1be7a2e0c63) fix(openapi): typing issue with `openapiContext` in `#[ApiProperty]` (#6910)

## v3.4.14

### Bug fixes

* [0cf752bce](https://github.com/api-platform/core/commit/0cf752bcec692718b2503250e655d05aea670316) fix(metadata): make the schema attribute to fallback to null for parameters in YamlResourceExtractor (#6896)
* [2b3c55db2](https://github.com/api-platform/core/commit/2b3c55db2a9ecc52f62c441fa8a5696233a30b87) fix(symfony): remove unsolvable deprecation (#6899) see also (#6655)
* [9493b9b6e](https://github.com/api-platform/core/commit/9493b9b6ec0264ab5b700c861ad1b97455b4f88d) fix(symfony): revert json schema bc break (#6903)
* [b82f9ac76](https://github.com/api-platform/core/commit/b82f9ac76ce89dd3910849c73da42317ee1339ed) fix(openapi): not forbidden response on openAPI doc (#6886)

I mispublished a v3.4.13 on some repositories to fix them all I bumped 3.4.10 to 3.4.14
More details at #6888.

## v3.4.10

### Bug fixes

* [2ee5eb496](https://github.com/api-platform/core/commit/2ee5eb4967f507d04ae07280914bea3c712d8cad) fix(symfony): mercure exception formatting by calling array_keys() (#6879)

## v3.4.9

### Bug fixes

* [22cbd0147](https://github.com/api-platform/core/commit/22cbd0147ef6f817093533d62dc8279add67a647) fix(metadata): various parameter improvements (#6867)
* [978975ef0](https://github.com/api-platform/core/commit/978975ef01d7b9d230291676527aa1140a7e552f) fix(jsonschema): hashmaps produces invalid openapi schema (#6830)
* [a209dd440](https://github.com/api-platform/core/commit/a209dd440957176099247acf35b82611073352b1) fix: add missing error normalizer trait and remove deprecated interface (#6853)
* [abbc031ee](https://github.com/api-platform/core/commit/abbc031eece83b54781502cd6373b47a09e109f4) fix: test empty parameter against null (#6852)

### Notes

- `Parameter::getValue()` now takes a default value as argument `getValue(mixed $default = new ParameterNotFound()): mixed`
- `Parametes::get(string $key, string $parameterClass = QueryParameter::class)` (but also `has` and `remove`) now has a default value as second argument to `QueryParameter::class`
- Constraint violation had the wrong message when using `property`, fixed by using the `key` instead

## v3.4.8

### Bug fixes

* [4d7deeaf7](https://github.com/api-platform/core/commit/4d7deeaf794178b5496ae989520095831a86df8a) fix(jsonld): check if supportedTypes exists (#6825)
* [5111935d4](https://github.com/api-platform/core/commit/5111935d4f917920c6f3d24b828f9d59fd0e3520) fix(symfony): object typed property schema collection restriction (#6823)
* [6bf894f6f](https://github.com/api-platform/core/commit/6bf894f6f0ead0751936aeddcfc527f017498bb3) fix(serializer): use attribute denormalization context for constructor arguments (#6821)
* [86c97cac3](https://github.com/api-platform/core/commit/86c97cac3b8d45b6190e2999b99a02e88dd4e527) fix(symfony): symfony 7.2 deprecations (#6835)
* [d312eae7e](https://github.com/api-platform/core/commit/d312eae7ef590ec05139c09bfaf2d3c7668a3f22) fix(doctrine): fixed orm datefilter applying inner join when no filtering values have been provided (#6849)

## v3.4.7

### Bug fixes

* [2d25e79e0](https://github.com/api-platform/core/commit/2d25e79e0e04ce549fb67ecc2017798a8deb7458) fix(symfony): unset item_uri_template when serializing an error (#6816)

## v3.4.6

### Bug fixes

* [17c916c3a](https://github.com/api-platform/core/commit/17c916c3a1bcc837c9bc842dc48390dbeb043450) fix(symfony): service typo fix BackedEnumProvider for autowiring (#6769)
* [216d9ccaa](https://github.com/api-platform/core/commit/216d9ccaacf7845daaaeab30f3a58bb5567430fe) fix(serializer): fetch type on normalization error when possible (#6761)
* [2f967d934](https://github.com/api-platform/core/commit/2f967d9345004779f409b9ce1b5d0cbba84c7132) fix(doctrine): throw an exception when a filter is not found in a parameter (#6767)
* [736ca045e](https://github.com/api-platform/core/commit/736ca045e6832f04aaa002ddd7b85c55df4696bb) fix(validator): allow to pass both a ConstraintViolationList and a previous exception (#6762)
* [a98332d99](https://github.com/api-platform/core/commit/a98332d99a43338fa3bc0fd6b20f82ac58d1c397) fix(metadata): name convert parameter property (#6766)
* [aa1667de1](https://github.com/api-platform/core/commit/aa1667de116fa9a40842f1480fc90ab49c7c2784) fix(state): empty result when the array paginator is out of bound (#6785)
* [ab88353a3](https://github.com/api-platform/core/commit/ab88353a32f94146b01c34bae377ec5a735846db) fix(hal): detecting and handling circular reference (#6752)
* [bba030614](https://github.com/api-platform/core/commit/bba030614b96887fea4f5c177e3137378ccae8a5) fix: properly support phpstan/phpdoc-parser 2 (#6789)
* [bec147b91](https://github.com/api-platform/core/commit/bec147b916c29e346a698b28ddd4493bf305d9a0) fix(state): do not check content type if no input (#6794)

## v3.4.5

### Bug fixes

* [fc8fa00a1](https://github.com/api-platform/core/commit/fc8fa00a19320b65547a60537261959c11f8e6a8) fix(hydra): iri template when using query parameter (#6742)

## v3.4.4

### Bug fixes

* [550347867](https://github.com/api-platform/core/commit/550347867f30611b673d8df99f65186d013919dd) fix(graphql): register query parameter arguments with filters (#6727)
* [99262dce7](https://github.com/api-platform/core/commit/99262dce739800bd841c95e026848b587ba25801) fix(jsonschema): handle @id when genId is false (#6716)
* [ad5efa535](https://github.com/api-platform/core/commit/ad5efa535a4dcbaad64ecff89514eaa6e07f5b7c) fix: multiple parameter provider #6673 (#6732)
* [d34cd7be8](https://github.com/api-platform/core/commit/d34cd7be8e7a12fd08a8b10270a614c06c10aa89) fix: use stateOptions when retrieving a Parameter filter (#6728)
* [e7fb04fab](https://github.com/api-platform/core/commit/e7fb04fab05bc077e2dbeb0fa0fc2c1d28c96105) fix(symfony): fetch api-platform/symfony version debug bar (#6722)
* [e96623ebf](https://github.com/api-platform/core/commit/e96623ebfd8691ba943bdb56a4d91e160497a311) fix(jsonld): prefix error @type with hydra: (#6721)

## v3.4.3

### Bug fixes

* [3ca599158](https://github.com/api-platform/core/commit/3ca599158139d56fbd6ee66f2de3e586120d735c) fix(hydra): hydra_prefix on errors (#6704)
* [f7f605dc8](https://github.com/api-platform/core/commit/f7f605dc8b798b975d2286c970c9091436d7f890) fix: check that api-platform/ramsey-uuid is installed before registering related services (#6696)
* [fbb53e5e3](https://github.com/api-platform/core/commit/fbb53e5e35ca0ec3de26ddc7de7ea4d1dda5c20b) fix(symfony): metadata aware name converter has 0 arguments by default (#6711)

## v3.4.2

### Bug fixes

* [0ca76fc89](https://github.com/api-platform/core/commit/0ca76fc898d2d1a679a490a5dea85473bf680901) fix(elasticsearch): allow elasticsearch 7 (#6689)
* [15d61c4b7](https://github.com/api-platform/core/commit/15d61c4b75fea2b365e0852a923fed8efbae6ab8) fix(metadata): using parameters in fromClass and toClass uriVariables' options (#6663)
* [2e2044636](https://github.com/api-platform/core/commit/2e204463675939903128037f82916d68f0016719) fix(metadata): parameter provider in a long running http worker (#6683)
* [4c58b33e8](https://github.com/api-platform/core/commit/4c58b33e8c5a90f9377543bd068288dcf84e3236) fix(jsonapi): fixed definition name to allow using the same class names in different namespaces (#6676)
* [4f5f56756](https://github.com/api-platform/core/commit/4f5f5675629fe52ea415a6bd91f3625eedea9c87) fix: remove hydra prefix on errors (#6624)
* [afe7d47d7](https://github.com/api-platform/core/commit/afe7d47d7b7ba6c8591bfb60137a65d1fa1fe38f) fix(metadata): passing class as parameter in XML ApiResource's definition (#6659)
* [b93ee467c](https://github.com/api-platform/core/commit/b93ee467c69253e0cfe60e75b48a5c7aa683474a) fix(metadata): overwriting XML ApiResource definition by YAML ApiResource definition (#6660)

## v3.4.1

### Bug fixes

* [219199db3](https://github.com/api-platform/core/commit/219199db386cab05f1c1225b889c0a9609b36699) fix(symfony): missing alias to serializer context builder interface (#6643)
* [5f943e3bb](https://github.com/api-platform/core/commit/5f943e3bb56934ba5d0b858f6b4c20a2985b6b6b) fix(graphql): wrong exception namespace (#6647)
* [93314b08d](https://github.com/api-platform/core/commit/93314b08de1e6f0505af9e3a3ba3d9971f1ef09c) fix(serializer): allow state's SerializerFilterContextBuilderInterface (#6632)
* [9a0afc917](https://github.com/api-platform/core/commit/9a0afc917a4bfa824ffbb640af9bb1114a5d31b4) fix(serializer): remove unnecessary dependency
* [e327f5f69](https://github.com/api-platform/core/commit/e327f5f69c823c1ed674eefc0eb2551e30fb36bd) fix(symfony): namespace of path segment name generator services (#6642)

## v3.4.0

### Deprecations:

Namespaces like `ApiPlatform/Api` or `ApiPlatform/Util` are deprecated and will be removed in 4.0.
You should now install `api-platform/symfony` instead of `api-platform/core`.

Read the [upgrade guide](https://api-platform.com/docs/core/upgrade-guide/) for detailed steps.

### Bug fixes

* [56153b755](https://github.com/api-platform/core/commit/56153b755151ee11c8c17fdc3fd919d544f078ac) fix(hydra): error hydra prefix (#6599)
* [7c89f66a5](https://github.com/api-platform/core/commit/7c89f66a534cc1100c3dab0a129381d307d9d8b4) fix: replace ApiPlatform\\Exception use by ApiPlatform\Metadata\\Exception (#6597)
* [a3a4a990d](https://github.com/api-platform/core/commit/a3a4a990d527136f093b022782a82e1d5b04c0b5) fix(metadata): loop on operations can be null
* [ef0ee6427](https://github.com/api-platform/core/commit/ef0ee6427f8056bcb2617c228a7cf9ffd9d29ccd) fix(doctrine): use parameter.property for filter value (#6572)
* [17c6b586c](https://github.com/api-platform/core/commit/17c6b586c5ab49437ac11dd092efdd5f0baf569b) fix(state): log on missing provider (#6519)
* [601ccfb42](https://github.com/api-platform/core/commit/601ccfb4243803f40a7fa7179e0661da59c88b86) fix(doctrine): move event listeners to doctrine/common (#6573)
* [6499e0aa5](https://github.com/api-platform/core/commit/6499e0aa5dd61fdff7706e7940cdf8c1fc3e18ef) fix: deprecate url generator interface namespace (#6575)
* [3c5aea80f](https://github.com/api-platform/core/commit/3c5aea80fdbed20216764f6d721fe4f37cf2889d) fix(symfony): load isApiResource metadata (#6562)
* [61af0cc90](https://github.com/api-platform/core/commit/61af0cc90c1e095edb12e32ef433a742ef46637e) fix(doctrine): allow doctrine/dbal:^4
* [e063b80af](https://github.com/api-platform/core/commit/e063b80afe012ca4a6c8999de55b59193e8ae0ae) fix: parameter context for filters (#6535)
* [e22392193](https://github.com/api-platform/core/commit/e22392193bb1fc71ece5abf393fa54b0745fc287) fix(state): security parameter with listeners (#6457)

Various fixes for components isolation.

### Features

* [130fb5a8c](https://github.com/api-platform/core/commit/130fb5a8c833430e5e09624b06f296e0bcb7ceed) feat: better path sorting for openapi UIs (#6583)
* [26d700e06](https://github.com/api-platform/core/commit/26d700e06035eaf4d04ddd52f3101dae690734d8) feat(symfony): add error page (#6389)
* [48267c9b6](https://github.com/api-platform/core/commit/48267c9b6a942b1fb54f0efcfa5b2d2ac47c93bf) feat(openapi): add error resources schemes (#6332)
* [e91c783a2](https://github.com/api-platform/core/commit/e91c783a2abf51bf2bdcf1230826108632c44a0d) feat(state): "deserializer_type" context (#6429)
* [17c6b586c](https://github.com/api-platform/core/commit/17c6b586c5ab49437ac11dd092efdd5f0baf569b) feat(state): log on missing provider (#6519)
* [05e75be83](https://github.com/api-platform/core/commit/05e75be834c629e0487caaaedfe9fdf0bd5a7226) feat(doctrine): add new filter for filtering an entity using PHP backed enum, resolves #6506 (#6547) (#6560)
* [0b985ae76](https://github.com/api-platform/core/commit/0b985ae760bc4689d3f5bbacebb21b35b334d0be) feat(state): add security to parameters (#6435)
* [63ccfd58c](https://github.com/api-platform/core/commit/63ccfd58c95b5aa4aa0353eb122d96ef35187222) feat: BackedEnum resources (#6309)
* [65296eaf1](https://github.com/api-platform/core/commit/65296eaf1eb18dc725e9316e9ab49b191aae43a3) feat(openapi): allow optional request body content (#6374)
* [7399fcf7e](https://github.com/api-platform/core/commit/7399fcf7eaf28cd649d137da1fdd54f69093e275) feat(symfony): skip error handler (#6463)
* [74986cb55](https://github.com/api-platform/core/commit/74986cb552182dc645bd1fc967faa0954dd59e0a) feat: inflector as service (#6447)
* [b47edb2a4](https://github.com/api-platform/core/commit/b47edb2a499c34e79c167f963e3a626a3e9d040a) feat(serializer): context IRI in HAL or JsonApi format (#6215)
* [db1241c66](https://github.com/api-platform/core/commit/db1241c66a08d226f57d8d61e0ec519071c6afdb) feat(openapi): make open_api_override_responses act on default 404 response generation (#6551)
* [e09e73efc](https://github.com/api-platform/core/commit/e09e73efc5b4a39ab33d00c5d5422d8d9f7b5e89) feat: remove hydra prefix (#6418)

## v3.4.0-alpha.5

### Deprecations:

Namespaces like `ApiPlatform/Api` or `ApiPlatform/Util` are deprecated and will be removed in 4.0.
You should now install `api-platform/symfony` instead of `api-platform/core`.

### Bug fixes

* [17c6b586c](https://github.com/api-platform/core/commit/17c6b586c5ab49437ac11dd092efdd5f0baf569b) fix(state): log on missing provider (#6519)
* [601ccfb42](https://github.com/api-platform/core/commit/601ccfb4243803f40a7fa7179e0661da59c88b86) fix(doctrine): move event listeners to doctrine/common (#6573)
* [6499e0aa5](https://github.com/api-platform/core/commit/6499e0aa5dd61fdff7706e7940cdf8c1fc3e18ef) fix: deprecate url generator interface namespace (#6575)
* [3c5aea80f](https://github.com/api-platform/core/commit/3c5aea80fdbed20216764f6d721fe4f37cf2889d) fix(symfony): load isApiResource metadata (#6562)
* [61af0cc90](https://github.com/api-platform/core/commit/61af0cc90c1e095edb12e32ef433a742ef46637e) fix(doctrine): allow doctrine/dbal:^4
* [e063b80af](https://github.com/api-platform/core/commit/e063b80afe012ca4a6c8999de55b59193e8ae0ae) fix: parameter context for filters (#6535)
* [e22392193](https://github.com/api-platform/core/commit/e22392193bb1fc71ece5abf393fa54b0745fc287) fix(state): security parameter with listeners (#6457)

Various fixes for components isolation.

### Features

* [05e75be83](https://github.com/api-platform/core/commit/05e75be834c629e0487caaaedfe9fdf0bd5a7226) feat(doctrine): add new filter for filtering an entity using PHP backed enum, resolves #6506 (#6547) (#6560)
* [0b985ae76](https://github.com/api-platform/core/commit/0b985ae760bc4689d3f5bbacebb21b35b334d0be) feat(state): add security to parameters (#6435)
* [26d5cbb9b](https://github.com/api-platform/core/commit/26d5cbb9ba996f793e50eff3eab578ea0753d243) feat: deprecate query parameter validator (#6454)
* [63ccfd58c](https://github.com/api-platform/core/commit/63ccfd58c95b5aa4aa0353eb122d96ef35187222) feat: BackedEnum resources (#6309)
* [65296eaf1](https://github.com/api-platform/core/commit/65296eaf1eb18dc725e9316e9ab49b191aae43a3) feat(openapi): allow optional request body content (#6374)
* [7399fcf7e](https://github.com/api-platform/core/commit/7399fcf7eaf28cd649d137da1fdd54f69093e275) feat(symfony): skip error handler (#6463)
* [74986cb55](https://github.com/api-platform/core/commit/74986cb552182dc645bd1fc967faa0954dd59e0a) feat: inflector as service (#6447)
* [b47edb2a4](https://github.com/api-platform/core/commit/b47edb2a499c34e79c167f963e3a626a3e9d040a) feat(serializer): context IRI in HAL or JsonApi format (#6215)
* [db1241c66](https://github.com/api-platform/core/commit/db1241c66a08d226f57d8d61e0ec519071c6afdb) feat(openapi): make open_api_override_responses act on default 404 response generation (#6551)
* [e09e73efc](https://github.com/api-platform/core/commit/e09e73efc5b4a39ab33d00c5d5422d8d9f7b5e89) feat: remove hydra prefix (#6418)

## v3.4.0-alpha.4

### Deprecations:

Namespaces like `ApiPlatform/Api` or `ApiPlatform/Util` are deprecated and will be removed in 4.0.
You should now install `api-platform/symfony` instead of `api-platform/core`.

### Bug fixes

* [17c6b586c](https://github.com/api-platform/core/commit/17c6b586c5ab49437ac11dd092efdd5f0baf569b) fix(state): log on missing provider (#6519)
* [601ccfb42](https://github.com/api-platform/core/commit/601ccfb4243803f40a7fa7179e0661da59c88b86) fix(doctrine): move event listeners to doctrine/common (#6573)
* [6499e0aa5](https://github.com/api-platform/core/commit/6499e0aa5dd61fdff7706e7940cdf8c1fc3e18ef) fix: deprecate url generator interface namespace (#6575)
* [3c5aea80f](https://github.com/api-platform/core/commit/3c5aea80fdbed20216764f6d721fe4f37cf2889d) fix(symfony): load isApiResource metadata (#6562)
* [61af0cc90](https://github.com/api-platform/core/commit/61af0cc90c1e095edb12e32ef433a742ef46637e) fix(doctrine): allow doctrine/dbal:^4
* [e063b80af](https://github.com/api-platform/core/commit/e063b80afe012ca4a6c8999de55b59193e8ae0ae) fix: parameter context for filters (#6535)
* [e22392193](https://github.com/api-platform/core/commit/e22392193bb1fc71ece5abf393fa54b0745fc287) fix(state): security parameter with listeners (#6457)

### Features

* [05e75be83](https://github.com/api-platform/core/commit/05e75be834c629e0487caaaedfe9fdf0bd5a7226) feat(doctrine): add new filter for filtering an entity using PHP backed enum, resolves #6506 (#6547) (#6560)
* [0b985ae76](https://github.com/api-platform/core/commit/0b985ae760bc4689d3f5bbacebb21b35b334d0be) feat(state): add security to parameters (#6435)
* [26d5cbb9b](https://github.com/api-platform/core/commit/26d5cbb9ba996f793e50eff3eab578ea0753d243) feat: deprecate query parameter validator (#6454)
* [63ccfd58c](https://github.com/api-platform/core/commit/63ccfd58c95b5aa4aa0353eb122d96ef35187222) feat: BackedEnum resources (#6309)
* [65296eaf1](https://github.com/api-platform/core/commit/65296eaf1eb18dc725e9316e9ab49b191aae43a3) feat(openapi): allow optional request body content (#6374)
* [7399fcf7e](https://github.com/api-platform/core/commit/7399fcf7eaf28cd649d137da1fdd54f69093e275) feat(symfony): skip error handler (#6463)
* [74986cb55](https://github.com/api-platform/core/commit/74986cb552182dc645bd1fc967faa0954dd59e0a) feat: inflector as service (#6447)
* [b47edb2a4](https://github.com/api-platform/core/commit/b47edb2a499c34e79c167f963e3a626a3e9d040a) feat(serializer): context IRI in HAL or JsonApi format (#6215)
* [db1241c66](https://github.com/api-platform/core/commit/db1241c66a08d226f57d8d61e0ec519071c6afdb) feat(openapi): make open_api_override_responses act on default 404 response generation (#6551)

## v3.4.0-alpha.2

### Deprecations:

Namespaces like `ApiPlatform/Api` or `ApiPlatform/Util` are deprecated and will be removed in 4.0.
You should now install `api-platform/symfony` instead of `api-platform/core`.

### Bug fixes

* [3c5aea80f](https://github.com/api-platform/core/commit/3c5aea80fdbed20216764f6d721fe4f37cf2889d) fix(symfony): load isApiResource metadata (#6562)
* [61af0cc90](https://github.com/api-platform/core/commit/61af0cc90c1e095edb12e32ef433a742ef46637e) fix(doctrine): allow doctrine/dbal:^4
* [e063b80af](https://github.com/api-platform/core/commit/e063b80afe012ca4a6c8999de55b59193e8ae0ae) fix: parameter context for filters (#6535)
* [e22392193](https://github.com/api-platform/core/commit/e22392193bb1fc71ece5abf393fa54b0745fc287) fix(state): security parameter with listeners (#6457)

### Features

* [05e75be83](https://github.com/api-platform/core/commit/05e75be834c629e0487caaaedfe9fdf0bd5a7226) feat(doctrine): add new filter for filtering an entity using PHP backed enum, resolves #6506 (#6547) (#6560)
* [0b985ae76](https://github.com/api-platform/core/commit/0b985ae760bc4689d3f5bbacebb21b35b334d0be) feat(state): add security to parameters (#6435)
* [26d5cbb9b](https://github.com/api-platform/core/commit/26d5cbb9ba996f793e50eff3eab578ea0753d243) feat: deprecate query parameter validator (#6454)
* [63ccfd58c](https://github.com/api-platform/core/commit/63ccfd58c95b5aa4aa0353eb122d96ef35187222) feat: BackedEnum resources (#6309)
* [65296eaf1](https://github.com/api-platform/core/commit/65296eaf1eb18dc725e9316e9ab49b191aae43a3) feat(openapi): allow optional request body content (#6374)
* [7399fcf7e](https://github.com/api-platform/core/commit/7399fcf7eaf28cd649d137da1fdd54f69093e275) feat(symfony): skip error handler (#6463)
* [74986cb55](https://github.com/api-platform/core/commit/74986cb552182dc645bd1fc967faa0954dd59e0a) feat: inflector as service (#6447)
* [b47edb2a4](https://github.com/api-platform/core/commit/b47edb2a499c34e79c167f963e3a626a3e9d040a) feat(serializer): context IRI in HAL or JsonApi format (#6215)
* [db1241c66](https://github.com/api-platform/core/commit/db1241c66a08d226f57d8d61e0ec519071c6afdb) feat(openapi): make open_api_override_responses act on default 404 response generation (#6551)

## v3.4.0-alpha.1

### Bug fixes

* [41deeb4e4](https://github.com/api-platform/core/commit/41deeb4e49c35d27cd902ea41ddaa3c8c492d8e4) fix(symfony): fix debug:api-resource command for class with multiple resources with same uriTemplate (#6505)
* [52fd9818b](https://github.com/api-platform/core/commit/52fd9818b1d02dd89cac578e0762530079b5b42d) fix(elasticsearch): change normalize return type to compatible with other normalizers (#6493)
* [61af0cc90](https://github.com/api-platform/core/commit/61af0cc90c1e095edb12e32ef433a742ef46637e) fix(doctrine): allow doctrine/dbal:^4
* [e22392193](https://github.com/api-platform/core/commit/e22392193bb1fc71ece5abf393fa54b0745fc287) fix(state): security parameter with listeners (#6457)


### Features

* [0b985ae76](https://github.com/api-platform/core/commit/0b985ae760bc4689d3f5bbacebb21b35b334d0be) feat(state): add security to parameters (#6435)
* [26d5cbb9b](https://github.com/api-platform/core/commit/26d5cbb9ba996f793e50eff3eab578ea0753d243) feat: deprecate query parameter validator (#6454)
* [63ccfd58c](https://github.com/api-platform/core/commit/63ccfd58c95b5aa4aa0353eb122d96ef35187222) feat: BackedEnum resources (#6309)
* [65296eaf1](https://github.com/api-platform/core/commit/65296eaf1eb18dc725e9316e9ab49b191aae43a3) feat(openapi): allow optional request body content (#6374)
* [7399fcf7e](https://github.com/api-platform/core/commit/7399fcf7eaf28cd649d137da1fdd54f69093e275) feat(symfony): skip error handler (#6463)
* [74986cb55](https://github.com/api-platform/core/commit/74986cb552182dc645bd1fc967faa0954dd59e0a) feat: inflector as service (#6447)
* [b47edb2a4](https://github.com/api-platform/core/commit/b47edb2a499c34e79c167f963e3a626a3e9d040a) feat(serializer): context IRI in HAL or JsonApi format (#6215)

## v3.3.15

### Bug fixes

* [dc4fc84ba](https://github.com/api-platform/core/commit/dc4fc84ba93e22b4f44a37e90a93c6d079c1c620) fix(graphql): securityAfterResolver not called 
* [9eb5c4e94](https://github.com/api-platform/core/commit/9eb5c4e941d0ebf59bc8ef5777b144db9b4a0899) fix(symfony): suggest `DocumentationAction` as replacement for deprecated `SwaggerUiAction` (#6894)

## v3.3.14

### Bug fixes

* [4c58b33e8](https://github.com/api-platform/core/commit/4c58b33e8c5a90f9377543bd068288dcf84e3236) fix(jsonapi): fixed definition name to allow using the same class names in different namespaces (#6676)

## v3.3.13

### Bug fixes

* [1b9dfccc8](https://github.com/api-platform/core/commit/1b9dfccc8d64be2b04e48490905771a77aefdd96) fix: count TraversablePaginator (#6611)
* [4c58b33e8](https://github.com/api-platform/core/commit/4c58b33e8c5a90f9377543bd068288dcf84e3236) fix(jsonapi): fixed definition name to allow using the same class names in different namespaces (#6676)
* [ef0ee6427](https://github.com/api-platform/core/commit/ef0ee6427f8056bcb2617c228a7cf9ffd9d29ccd) fix(doctrine): use parameter.property for filter value (#6572)

## v3.3.12

### Bug fixes

* [0a461d749](https://github.com/api-platform/core/commit/0a461d749b7b4ac706f3b7b6138a13cb6e4a9d2d) fix(symfony): allow schema restriction for collection like property from choice constraint (#6520)
* [0e91b0451](https://github.com/api-platform/core/commit/0e91b045168fa74603a093b301546d604e7997ad) fix: use correct class in FilterValidationException deprecation message (#6549)
* [2da8dd326](https://github.com/api-platform/core/commit/2da8dd32681fe9d51b0bdb343f60b98b4e9033d2) fix(symfony): replace tagged by tagged_iterator
* [3b42c9ff2](https://github.com/api-platform/core/commit/3b42c9ff235de5feac555d0283c513a6e4643953) fix: deserialization path for not denormalizable relations collected errors (#6537)
* [41deeb4e4](https://github.com/api-platform/core/commit/41deeb4e49c35d27cd902ea41ddaa3c8c492d8e4) fix(symfony): fix debug:api-resource command for class with multiple resources with same uriTemplate (#6505)
* [52fd9818b](https://github.com/api-platform/core/commit/52fd9818b1d02dd89cac578e0762530079b5b42d) fix(elasticsearch): change normalize return type to compatible with other normalizers (#6493)
* [b3d7c0768](https://github.com/api-platform/core/commit/b3d7c07682366cc387ceee904cadbdd85bad0c09) fix(openapi): allow null return type parameter

## v3.3.11

### Features

* [344b8b245](https://github.com/api-platform/core/commit/344b8b245ac2a77e0b22b69e7976456c024a5dcb) Revert "feat(jsonschema): make JSON-LD specific properties required (#6366)" (#6484)

## v3.3.10

### Bug fixes

* [6776231ed](https://github.com/api-platform/core/commit/6776231eddebb8dbb9efdc66dec29247172cf0ea) fix: remove useless deprecation (#6481)
* [71dbfb1af](https://github.com/api-platform/core/commit/71dbfb1af029b4c9e7d53d9e5c2b38ff97ac68a7) fix: property called default in ApiProperty has incorrect type (#6471) (#6472)
* [c3e2e5b82](https://github.com/api-platform/core/commit/c3e2e5b8298f187f34e091af0f0a58e671ae853c) fix(symfony): securityPostValidation when use_symfony_listeners (#6479)
* [e3013d40d](https://github.com/api-platform/core/commit/e3013d40dc601ff580d2d69d3228c36af3f457b6) Revert "fix(jsonschema): make all required properties optional in PATCH opera…" (#6476)
* [aeca0149d](https://github.com/api-platform/core/commit/aeca0149dc488ac0fefd90adaae4a65df49bab1a) fix(jsonschema): make JSON-LD specific properties required in the output schema (#6366)

## v3.3.9

### Bug fixes

* [84df46786](https://github.com/api-platform/core/commit/84df4678618869f439a7995a2534440c031e10f3) fix(jsonld): remove request uri variables when denormalizing output (#6467)
* [ffb4ad31f](https://github.com/api-platform/core/commit/ffb4ad31f30b531a5102da8cd92235e070f43b86) fix(jsonld): mitigate #6465 (#6469)

## v3.3.8

### Bug fixes

* [0edc73806](https://github.com/api-platform/core/commit/0edc73806c047b04c452a1cd7bc1132106906d02) fix(state): allow to skip parameter validator provider (#6452)
* [25c5f222d](https://github.com/api-platform/core/commit/25c5f222dbe24ff111d2ba2b19556112a50ed87a) fix(graphql): security after resolver (#6444)
* [32ef3d4e2](https://github.com/api-platform/core/commit/32ef3d4e24f14b361e2c67efb2494b8494a87b12) fix(jsonld): allow @id, @context and @type on denormalization 2 (#6451)
* [4de43bab9](https://github.com/api-platform/core/commit/4de43bab9fbcafcd79ceac9bbe3a1293b56303c4) fix: swagger ui provider accept html (#6449)
* [65ac0d228](https://github.com/api-platform/core/commit/65ac0d22885c8c9b68df9f3becd1b004746ce019) fix(symfony): property info with doctrine collections
* [7926dc68d](https://github.com/api-platform/core/commit/7926dc68d1d0e9df7ff6439487beb782dd124671) fix: parameter not found when no value (#6458)
* [93e4b3d70](https://github.com/api-platform/core/commit/93e4b3d709a6a9bbfb4fd0722f7aa5b01efa57d7) fix(state): store parameter value without its key (#6456)
* [c086dfe9d](https://github.com/api-platform/core/commit/c086dfe9dd516e5fa26e1a819ba0477c50b4ffda) fix(openapi): optional yaml component (#6445)
* [c473b2efe](https://github.com/api-platform/core/commit/c473b2efec4e53929fbe2832452894d489002455) fix(state): query and header parameter with the same name (#6453)


### Features

These are enhancement to the experimental Parameter feature:

* [9ac50d294](https://github.com/api-platform/core/commit/9ac50d294f95a0c34baf67aebf3ea5623bc1be4c) feat(state): review validation for required parameters (#6441)
* [c2d3aeb91](https://github.com/api-platform/core/commit/c2d3aeb91764e5fa1f8f56de3a800cc69364a9b0) feat(state): list all violations during query parameters validation (#6442)

## v3.3.7

### Bug fixes

* [0ed1b637a](https://github.com/api-platform/core/commit/0ed1b637a84d0860c2e014e2473b52d17de9276b) fix(metadata): wrong schema generated if openapicontext set on array (#6431)
* [57f930c65](https://github.com/api-platform/core/commit/57f930c65cb067b1727488ba6db6188c6c5a01c6) fix(openapi): parameters can disable openapi (#6440)
* [69b4d35b9](https://github.com/api-platform/core/commit/69b4d35b9764e36dab0484e1a7332886e1de9b2c) fix(state): provider as ParameterProviderInterface (#6430)
* [842091ddf](https://github.com/api-platform/core/commit/842091ddf5b41c7a0d76bfbcddccff2920a84c35) fix(jsonschema): make all required properties optional in PATCH operation with 'json' format (#6394)
* [af34e72ed](https://github.com/api-platform/core/commit/af34e72ed6bb0d5f7235fcc9c2a6c7810ba4f9c2) fix(openapi): yaml openapi export should have numeric keys as string (#6436)
* [b42e25f2d](https://github.com/api-platform/core/commit/b42e25f2dcb5e0c1759c9482c08c9929ef86dc90) fix(state): parameter decorates main chain (#6434)
* [c922ba3f5](https://github.com/api-platform/core/commit/c922ba3f5cf6117e85548697a982fb1cbe3dde2e) fix(symfony): check method for readonly routes (#6437)

## v3.3.6

### Bug fixes

* [8e253d4d7](https://github.com/api-platform/core/commit/8e253d4d76c25c27c233b3cf4fd2314b13c1e193) fix(graphql): validate after resolver (#6426)
* [d66769069](https://github.com/api-platform/core/commit/d66769069fda051e4ddc7be50764c3f34d055ad0) fix(symfony): load swagger_ui when enabled (#6424)
* [e06c88b71](https://github.com/api-platform/core/commit/e06c88b7149da4e5b691d432f11ec3d27e41750a) fix(metadata): add some phpdoc annotations to ORM (#6387)
* [fb7c4658c](https://github.com/api-platform/core/commit/fb7c4658c327c9628bcc86d42e85c3546a74d993) fix(test): canonicalizing json arrays (#6386)
* [ff533565d](https://github.com/api-platform/core/commit/ff533565d9b976fcda818ab4f79a5a2642f14a32) fix(doctrine): use null-safe operator when retrieving parameters (#6423)

Notes:

The patch at #6426 introduces a new `validateAfterResolver` option to mitigate the BC-break introduced in 3.3 that does the validation before calling the resolver:

```php
new Mutation(
    resolver: 'app.graphql.mutation_resolver.activity_log',
    name: 'create',
    validateAfterResolver: true,
    validate: false
)
```

## v3.3.5

### Bug fixes

* [55f27dc7a](https://github.com/api-platform/core/commit/55f27dc7adbf2456ec7700dd57e10c036eb260c0) fix(symfony): documentation request _format (#6390)

## v3.3.4

### Bug fixes

* [002d8e514](https://github.com/api-platform/core/commit/002d8e51490dbe9f5d8e5551226d70db8a33c706) fix(validation): ValidationException causes TypeError exception when called with $code=null (#6375)
* [77a917f2a](https://github.com/api-platform/core/commit/77a917f2a51b50af84bdc96c1a32ff671b3951db) fix(metadata): resource class php doc (#6381)
* [d809315fb](https://github.com/api-platform/core/commit/d809315fbb3822dbc6fe50d5c908183f4428f0f2) fix(symfony): store original data without clone (#6367)
* [fb7c4658c](https://github.com/api-platform/core/commit/fb7c4658c327c9628bcc86d42e85c3546a74d993) fix(test): canonicalizing json arrays (#6386)

## v3.3.3

### Bug fixes

* [10f24f7a1](https://github.com/api-platform/core/commit/10f24f7a18649f5d463ce0a99759e9b514707e92) fix(state): no location header without output (#6356)
* [20c9165f2](https://github.com/api-platform/core/commit/20c9165f240e0457d1f5c9e2760b980e7d61f777) fix(symfony): no read should not throw on wrong uri variables (#6359)
* [4cd359d40](https://github.com/api-platform/core/commit/4cd359d400608340b09597d24e03f9ff1dc2f9ec) fix(graphql): resolver before validation (#6363)
* [9d159f4fa](https://github.com/api-platform/core/commit/9d159f4fa2d411f00911cfc5679b81585907d053) fix(symfony): no read shouldn't throw InvalidIdentifiers (#6357)

## v3.3.2

### Bug fixes

* [6f806f4ee](https://github.com/api-platform/core/commit/6f806f4eeec3d120da7a4c145f9dbda9bd4be2ed) fix(state): read without output (#6347)
* [735e1509e](https://github.com/api-platform/core/commit/735e1509ef67deb1c4c837ff86b445f40e2f7c8b) fix(symfony): set normalization context in request attributes (#6345)
* [b4984126a](https://github.com/api-platform/core/commit/b4984126a109ec7951012614616035035978b255) fix(symfony): use_symfony_listeners before registering services (#6350)
* [f63fd8101](https://github.com/api-platform/core/commit/f63fd8101f8211707806e013668f50dafab2865d) fix(symfony): define use_symfony_listeners (#6344)

### Notes

You can remove the `event_listeners_backward_compatibility_layer` flag and set `use_symfony_listeners` instead. The `use_symfony_listeners` should be `true` if you use controllers or if you rely on Symfony event listeners. Note that now flags like `read` can be forced to `true` if you want to call a Provider even on `POST` operations. These are the rules we set up on runtime if no value has been set:

```php
if (null === $operation->canValidate()) {
    $operation = $operation->withValidate(!$request->isMethodSafe() && !$request->isMethod('DELETE'));
}

if (null === $operation->canRead()) {
    $operation = $operation->withRead($operation->getUriVariables() || $request->isMethodSafe());
}

if (null === $operation->canDeserialize()) {
    $operation = $operation->withDeserialize(\in_array($operation->getMethod(), ['POST', 'PUT', 'PATCH'], true));
}
```

Previously listeners did the checks before reading our flags and you could not force the values.

When using GraphQl, with `event_listeners_backward_compatibility_layer: true`, mutation resolver gets called before validation, when using `false` (the future default) validation occurs on the user's input.

## v3.3.1 (pre-release)

### Bug fixes

* [6f806f4ee](https://github.com/api-platform/core/commit/6f806f4eeec3d120da7a4c145f9dbda9bd4be2ed) fix(state): read without output (#6347)
* [735e1509e](https://github.com/api-platform/core/commit/735e1509ef67deb1c4c837ff86b445f40e2f7c8b) fix(symfony): set normalization context in request attributes (#6345)
* [f63fd8101](https://github.com/api-platform/core/commit/f63fd8101f8211707806e013668f50dafab2865d) fix(symfony): define use_symfony_listeners (#6344)

## v3.3.0

### Bug fixes

* [629da787b](https://github.com/api-platform/core/commit/629da787bc49fe06db02933d41dc550aee87b429) fix(symfony): use non deprecated validator exception (#6297)
* [8a232a474](https://github.com/api-platform/core/commit/8a232a474466f4fbcf2001d6894fa0fec272ae6e) fix: add legacy FilterInterface as return type of getFilter function (#6311)
* [97c8ae26e](https://github.com/api-platform/core/commit/97c8ae26eb5eb4cfaafadcc36b7d497b9fa2cb9e) fix(jsonapi): handle multiple relation classes, unrelated unions (#6320)
* [af61482c2](https://github.com/api-platform/core/commit/af61482c21618e8abcbe7486df05e30a961bc5b6) fix(symfony)!: context stamp not serializable because of request object (#6323)
* [fce42e0e7](https://github.com/api-platform/core/commit/fce42e0e783f3eb0331afad702d553f3bd63a2b3) fix(jsonapi): re-add continue once relation is determined (#6325)


### Features

* [57fe13615](https://github.com/api-platform/core/commit/57fe13615dfda724fd17d18658a1cdb062d261e5) feat(serializer): update MissingConstructorArgumentsException message (#5902)
* [e867d07f5](https://github.com/api-platform/core/commit/e867d07f59b82d5f1bdca69e096ddf452dd7efc8) feat(parametervalidator): parameter validation (#6296)

## v3.3.0-beta.2

### Bug fixes

* [50f4f0eeb](https://github.com/api-platform/core/commit/50f4f0eeb55c29c57d8ca63dedb0534f86f07055) fix: change deprecated ValidationException (#6295)
* [5e908c898](https://github.com/api-platform/core/commit/5e908c898dd6dca3a6abfd3f083e4d7b4fc4e85a) fix: reorder early return QueryParameterValidateListener (#6300)
* [678eb4f84](https://github.com/api-platform/core/commit/678eb4f8474edc29b2fc806c85aaf203540e23ab) fix(jsonapi): add missing "included" schema parts (#6277)
* [8f8121865](https://github.com/api-platform/core/commit/8f8121865aca950b64559c6aa6acad9d8bef6bda) fix(graphql): query nullish ManyToOne-Relation
* [90c9fb31a](https://github.com/api-platform/core/commit/90c9fb31a322a2c7891fbbafb75d60b09fd67772) fix(symfony): register api_error route (#6281)
* [93f8b5f39](https://github.com/api-platform/core/commit/93f8b5f39727ee5aa48d78d56fd7e3376b7a813a) fix(jsonapi): return empty data array for empty relation (#6270)
* [9ac0062a2](https://github.com/api-platform/core/commit/9ac0062a2d30776b94994e419b9bcc39832540b7) fix(symfony): context not serializable when session (#6302)
* [da324e457](https://github.com/api-platform/core/commit/da324e45783c425b5165a3429464efe53e6f6094) fix(metadata): index operations (#6272)

## v3.3.0-beta.1

### Bug fixes

* [23a9f2a7f](https://github.com/api-platform/core/commit/23a9f2a7f6b868c1eaaa3ec967bd718790f6caa6) fix(openapi): webhook has pathItem
* [54638d3ca](https://github.com/api-platform/core/commit/54638d3ca6d497ff829a6978dd1db9137b5bcf3a) fix: fix PHPUnit 11 compatibility (#6202)
* [bc96751e0](https://github.com/api-platform/core/commit/bc96751e040406de65a690f53003c3db5626a013) fix(graphql): nested collection for mongo (#6174)
* [ca6be326d](https://github.com/api-platform/core/commit/ca6be326d533282a4a1c1284a289c2f1e3f92219) fix(doctrine): fix case on Mercure ExpressionLanguage (#6207)
* [dad8b7df3](https://github.com/api-platform/core/commit/dad8b7df3ce47189925dad2106bb4d6477ce8f45) fix(validation): move validation exception resource (#6204)


### Features

* [0b724d93b](https://github.com/api-platform/core/commit/0b724d93b7585ce1f49fc97971840c986ecc495b) feat(openapi): document parameter
* [125f2cef4](https://github.com/api-platform/core/commit/125f2cef42e6584c219fd21982a7999d141a2f9d) feat: add webhook - openapi (#5873)
* [31d24aca4](https://github.com/api-platform/core/commit/31d24aca4b8d45f9838546954b61a55f25c39799) feat(hydra): read hydra:property from ApiProperty::jsonLdContext (#6240)
* [3ad3836d5](https://github.com/api-platform/core/commit/3ad3836d5427951ff2519380738f6c423f697742) feat(metadata): attribute Parameter (#6246)
* [52322048c](https://github.com/api-platform/core/commit/52322048cfccdb68ddf2df6a7952efb3e23ffece) feat(state): provide parameter values
* [5523bf5df](https://github.com/api-platform/core/commit/5523bf5df93783582bed5591ff35c71e0942a978) feat(openapi): disable response override (#6221)
* [683c34c6f](https://github.com/api-platform/core/commit/683c34c6f5721caede4f739e11c944b77b2243dc) feat(hydra): parameter documentation
* [732d4aa8c](https://github.com/api-platform/core/commit/732d4aa8c32e6b3ec01a713b032a2c01adf66e5d) feat(symfony): parameter DI for metadata state serializer
* [842030d55](https://github.com/api-platform/core/commit/842030d55737e8eb15ce575c89f5449493a157d8) feat(doctrine): parameter filter extension (#6248)
* [b79c7ae0e](https://github.com/api-platform/core/commit/b79c7ae0e88b6dee9d97d73ce16f6ff2a974b272) feat(metadata): allow \Stringable for security parameters (#6095)
* [e427bba70](https://github.com/api-platform/core/commit/e427bba70e1ecdcfe76dbe9926153156323cb371) feat(jsonschema): JSON:API schema factory (#6250)

The v3.3.0-beta.1 introduces a new `QueryParameter` attribute to improve [the filtering system](https://github.com/api-platform/core/blob/main/docs/adr/0006-filtering-system-and-parameters.md).

## v3.3.0-alpha.2

### Bug fixes

* [bc8d57b88](https://github.com/api-platform/core/commit/bc8d57b885e3b1db42269a29e887ecca17f2a99c) fix(symfony): reduce json-problem dependencies (#6169)
* [bfd759b62](https://github.com/api-platform/core/commit/bfd759b627990926fddd11c6737af8f993af7bb5) fix: components split dependencies (#6186)
* [c01e10ff3](https://github.com/api-platform/core/commit/c01e10ff323fac6f6e3549e7e90d8ee01d9285f3) fix(hydra): remove dependency from ApiPlatform/Api dependency (#6154)

### Features

* [24a1a18cb](https://github.com/api-platform/core/commit/24a1a18cbe706c5a3bb4d5602b70c0a68ff8a757) feat: improve ApiProperty::security using property name (#5853)
* [3d1428e4d](https://github.com/api-platform/core/commit/3d1428e4d2e4342918becf098da8832ac50fef1b) feat(symfony): add get_operation Expression Language function on Mercure topics (#5854)
* [6b00cea91](https://github.com/api-platform/core/commit/6b00cea914dc5f9c42ca237a3ff498d629a0efb8) feat(graphql): partial pagination for page based pagination (#6120)
* [79fe01b97](https://github.com/api-platform/core/commit/79fe01b970d90e3c80880f54fc0446b5294173f0) feat(doctrine): paginators for Doctrine Collection & Selectable (#6153)
* [89c9229f4](https://github.com/api-platform/core/commit/89c9229f484cb409ef3eb2bd88cccc6ddc856378) feat(graphql): support nullable embedded relations in GraphQL types (#6100)

## v3.3.0-alpha.1

### Bug fixes

* [2828157f6](https://github.com/api-platform/core/commit/2828157f61e43783d49375dae689e898cc7f91bb) fix(doctrine): constants case sensitive values
* [bbc99cfbe](https://github.com/api-platform/core/commit/bbc99cfbe7b0ed20e38178ee9bff15c71289f059) fix(serializer): improve TagCollector context (JSONAPI HAL) (#6076)
* [e10cc5ecf](https://github.com/api-platform/core/commit/e10cc5ecf88b98f862222b2e3fea0f4ace94c515) fix(graphql): use normalization context to get item from IRI (#5915)

### Features

* [4f59677d4](https://github.com/api-platform/core/commit/4f59677d4e55bfdfb66620592a5ab7ffd57c8d8e) feat(parametervalidator): create api-platform/parameter-validator component
* [670e7fbea](https://github.com/api-platform/core/commit/670e7fbeae3276373fa1a5805a74997091a5428c) feat(serializer): collect cache tags using a TagCollector (#5758)
* [6b79b6f47](https://github.com/api-platform/core/commit/6b79b6f47fa498bdc6c92b574c176f3897e07ec2) feat(elasticsearch): filtering on nested fields (#5835)
* [8e3a48810](https://github.com/api-platform/core/commit/8e3a488103a51becd9c900ec5a3849b806121fbf) feat: enable Swagger UI deep linking (#6051)
* [9083765b0](https://github.com/api-platform/core/commit/9083765b0175aabe8e0043889383f4a0697ec098) feat(graphql): support enum collection as property (#5955)
* [a749fe849](https://github.com/api-platform/core/commit/a749fe8494a5b3ca41139a418ed1e29c3e7b33a6) feat(doctrine): allow to extend link handling (#6061)
* [b48836690](https://github.com/api-platform/core/commit/b488366901635dc665f1bb95a4a059aaa30cefd3) feat(symfony): Link security (#5290)
* [cc9f6a518](https://github.com/api-platform/core/commit/cc9f6a518222598d20556fc1ec62b7c4be52bf52) feat(symfony): request and view kernel listeners (#6102)
* [ce9ab8226](https://github.com/api-platform/core/commit/ce9ab8226934bfac45e3408e9468bf32a02aa2e9) feat(metadata): headers configuration (#6074)

Components:
  - `api-platform/parametervalidator`
  - `api-platform/doctrine-common`
  - `api-platform/doctrine-orm`
  - `api-platform/doctrine-odm`

A new interface `ApiPlatform\Serializer\TagCollectorInterface` allows to collect cache tags (IRIs) during serialization instead of using API Platform defaults.
An experimental feature (#5290) gives the ability to use `security` on sub resource links.

If you use controllers you should use:

```yaml
api_platform:
    use_symfony_listeners: true
```

The default is `false` you can get rid of the `event_listeners_backward_compatibility_layer` flag. You can now force an operation state, for example:

```php
<?php

#[Delete(validate: true)]
#[Post(read: true)]
class Book {}
```

These namespaces are deprecated:

- `ApiPlatform\Api`
- `ApiPlatform\Exception`
- `ApiPlatform\Problem`
- `ApiPlatform\Action`
- `ApiPlatform\Util`

Most of the classes have moved to `ApiPlatform\Metadata`.

If a format is not specified in either the global configuration or the `outputFormats` of an operation, you'll get a 406 Not Acceptable error:

```yaml
api_platform:
    formats:
        jsonld: ['application/ld+json']
        form: ['multipart/form-data']
```

## v3.2.26

### Bug fixes

* [6776231ed](https://github.com/api-platform/core/commit/6776231eddebb8dbb9efdc66dec29247172cf0ea) fix: remove useless deprecation (#6481)

## v3.2.25

### Bug fixes

* [0ed1b637a](https://github.com/api-platform/core/commit/0ed1b637a84d0860c2e014e2473b52d17de9276b) fix(metadata): wrong schema generated if openapicontext set on array (#6431)

## v3.2.24

### Bug fixes

* [451d50e53](https://github.com/api-platform/core/commit/451d50e538a4f7aac67d47601fee5474af99c870) fix(symfony): deprecations 7.1
* [93e71eb82](https://github.com/api-platform/core/commit/93e71eb822aa06db2b6de303039f9b8c65cad7a8) fix(graphql): name converter with class (#6396)
* [99314bf80](https://github.com/api-platform/core/commit/99314bf80e7c61147fb311da6403b37be5eab5b2) fix(state): handle empty request in read provider (#6403)

## v3.2.23

### Bug fixes

* [fb7c4658c](https://github.com/api-platform/core/commit/fb7c4658c327c9628bcc86d42e85c3546a74d993) fix(test): canonicalizing json arrays (#6386)

## v3.2.22

### Bug fixes

* [50c738cf6](https://github.com/api-platform/core/commit/50c738cf6b31bb7f2ddcd74037c12315c8bcac6d) fix(graphql): check inheritance in ResolverProvider (#6314)
* [9cd597f80](https://github.com/api-platform/core/commit/9cd597f80d9eecafb28b4229a313ba9b9618bf8c) fix(doctrine): remove usage of deprecated ClassUtils in PurgeHttpCacheListener for Doctrine ORM 3 (#6331)
* [a59fbee97](https://github.com/api-platform/core/commit/a59fbee97dc09b7cb7e12ee3bef9451f0fbea957) fix(serializer): uriTemplate wrong cache usage in hal format (#6313)
* [c083af346](https://github.com/api-platform/core/commit/c083af3461a926ea68837f216eacc67ca43a6fc3) fix(metadata): allow extracting routeName from XML config (#6329)

## v3.2.21

### Bug fixes

* [2a8767108](https://github.com/api-platform/core/commit/2a8767108690c35d873a936f9e2383365fdb4f00) revert: fix(graphql): increment graphql normalizer priority
* [6c3d58c28](https://github.com/api-platform/core/commit/6c3d58c287650e32ae0d68e9197424b04acdab5a) fix(jsonschema): don't try to define $ref if set in attributes (#6303)
* [9ac0062a2](https://github.com/api-platform/core/commit/9ac0062a2d30776b94994e419b9bcc39832540b7) fix(symfony): context not serializable when session (#6302)

## v3.2.20

### Bug fixes

* [90c9fb31a](https://github.com/api-platform/core/commit/90c9fb31a322a2c7891fbbafb75d60b09fd67772) fix(symfony): register api_error route (#6281)
* [d061c3811](https://github.com/api-platform/core/commit/d061c381120b858c471157dbdccbb5084a39fb04) fix(graphql): increment graphql normalizer priority (#6283)

## v3.2.19

### Bug fixes

* [0154fbf00](https://github.com/api-platform/core/commit/0154fbf00635b46e151c917378e5fe4d76dc1a83) fix(elasticsearch): wrong namespace for stateOptions (#6260)
* [4adc07524](https://github.com/api-platform/core/commit/4adc0752471910a1dca104c1ac8d9c1dbebf268e) fix: multiple error routes #6214 (#6263)
* [88d88ed2c](https://github.com/api-platform/core/commit/88d88ed2c41cca89da4ef2185d58adb2ea91d20c) fix(doctrine): wrong return type without name converter #6079 (#6254)
* [db50a46c1](https://github.com/api-platform/core/commit/db50a46c16689b7fb4db79b1d4ef7e1ad094d358) fix(doctrine): stateOptions force resource class on collection (#6255)

## v3.2.18

### Bug fixes

* [0073a2a1b](https://github.com/api-platform/core/commit/0073a2a1b752001c9bff666ad350e248b725a80a) fix(serializer): json non-resource intermittent class (HAL & JSON:API) (#6231)
* [3689ae5f4](https://github.com/api-platform/core/commit/3689ae5f47e68e77f6938b71e9e355c13623dbdb) fix(hydra): owl:maxCardinality should be an int (#6235)
* [4b70b7405](https://github.com/api-platform/core/commit/4b70b74054658f9d1c704b56f940ec9742e4482f) fix(jsonschema): generation of non-LD+JSON distinct schema formats (#6236)
* [818b9cd62](https://github.com/api-platform/core/commit/818b9cd625f56c77c9f1fd0286672973d817bb3b) fix(jsonschema): don't skip remaining multiple union types (#6223)
* [874e4d670](https://github.com/api-platform/core/commit/874e4d6707ecdd48b27ed91b0b66ea5e33691e7c) fix(serializer): collection property in an output dto (#6239)

## v3.2.17

### Bug fixes

* [2819d56c8](https://github.com/api-platform/core/commit/2819d56c80f39a53f2e3d5fd7119566ad96b4075) fix(hydra): hydra:view with absolute iris (#6208)
* [98f4b8fca](https://github.com/api-platform/core/commit/98f4b8fcab39b1d09110cc133206e27782ea4791) fix(metadata): Operations priority sort (#6206)
* [a1309bbf2](https://github.com/api-platform/core/commit/a1309bbf2f678081a82290818a91f0a376b3c94c) fix(serializer): skip symfony validation exception (#6220)

## v3.2.16

### Bug fixes

* [56744dcfa](https://github.com/api-platform/core/commit/56744dcfa07f79ca58926cb199356e849ddb3a93) fix(serializer): fix union types on collection denormalization (#6192)
* [d8e2d0c5e](https://github.com/api-platform/core/commit/d8e2d0c5e9b48c15d60a734086b0102b6ecf95c8) fix(doctrine): doctrine/orm:^3.0 support (#6193)
* [f891f16d5](https://github.com/api-platform/core/commit/f891f16d50b665f25e4699291526161e16ce0fa7) fix(doctrine): isAssociationInverseSide before getMappedBy (#6197)

## v3.2.15

### Bug fixes

* [09aacf98a](https://github.com/api-platform/core/commit/09aacf98a2e4d0ffa00fbefa59cb2b31f35fbb54) fix(symfony): revert breaking change on attributes extractor (#6170)
* [4138cb7c0](https://github.com/api-platform/core/commit/4138cb7c031b38731162d99b3d43754251fc5913) fix(openapi): resource name parameter description (#6178)
* [5e4b6312a](https://github.com/api-platform/core/commit/5e4b6312a057ba4d1f45c395c7a215dc393acd80) fix(jsonschema): multiple type support (draft4) (#6171)
* [8535f9def](https://github.com/api-platform/core/commit/8535f9def6fbd2baff9cedc79c34103940eb4fca) fix(doctrine): read parent class properties on PUT (#6176)
* [a188c9473](https://github.com/api-platform/core/commit/a188c947396e0400ba6e1aadaa262d2e785fd941) fix(symfony): autoconfigure legacy alias fixes #6177 (#6181)
* [e7b442149](https://github.com/api-platform/core/commit/e7b4421496b58f7c3db414d11dd357a8dc759323) fix(validator): stop considering properties marked with NotBlank(allowNull=true) as required (#6184)

## v3.2.14

### Bug fixes

* [26295392d](https://github.com/api-platform/core/commit/26295392d5e70075b2951d27c633cf29d6fdf542) fix: use normalisation context when none is provided in ApiTestAssertionsTrait (#6157)
* [2999d9ef1](https://github.com/api-platform/core/commit/2999d9ef14416b4cb8728ad713a9edd367df9816) fix: return null instead of exception for GraphQL Query operation (#6118)
* [30f3f353e](https://github.com/api-platform/core/commit/30f3f353e2022ad6ec80733e90f209f326dc3225) fix(openapi): skip requestBody if input is false (#6163)
* [507edba82](https://github.com/api-platform/core/commit/507edba822d80005345794cec1a946f9a7e0c12c) fix(symfony): autoconfiguration on UriVariableTransformerInterface (#6159)
* [643cff2db](https://github.com/api-platform/core/commit/643cff2db8dbab050aa125eb32a347ad37a95e08) fix(symfony): throw metadata exception (#6164)
* [a987469e0](https://github.com/api-platform/core/commit/a987469e09608d91afd4507ec1f6ceacbd8653b2) fix(openapi): method OpenApi::getComponents must always return a Components object (#6158)
* [c08f1e164](https://github.com/api-platform/core/commit/c08f1e1642f4427269a7f684f0b3def34ba4c433) fix(doctrine): test array type existence before using it (#6161)

## v3.2.13

### Bug fixes

* [05713bfc8](https://github.com/api-platform/core/commit/05713bfc8ca4e749d408aaf870a4880e6c8fa74f) fix(hydra): move owl:maxCardinality from JsonSchema to Hydra (#6136)

## v3.2.12

### Bug fixes

* [1c1023a71](https://github.com/api-platform/core/commit/1c1023a71dd6ea9302c6065aade72f3e93deb6b6) fix: better generics support for State\ProcessorInterface (#6103)
* [dcab6c79e](https://github.com/api-platform/core/commit/dcab6c79e96ccf8351d855013474d32d5cf129e5) fix(jsonschema): keep integer and number properties draft 4 compliant (#6098)
* [ef4b261f1](https://github.com/api-platform/core/commit/ef4b261f1e4d67d064be9745d2b9e0c68d3032aa) fix(graphql): remove count query if paginationInfo is not requested (#6068)

## v3.2.11

### Bug fixes

* [5de077e7d](https://github.com/api-platform/core/commit/5de077e7de94f2e07ca615efc5ecf1b32b37a10e) fix(symfony): use Type constraint violation code instead of exception code (#6064)
* [804da1be7](https://github.com/api-platform/core/commit/804da1be73991e7c5efffb495345499943802102) fix(openapi): compatibility with OpenAPI 3.0 (#6065)
* [cd01e043a](https://github.com/api-platform/core/commit/cd01e043a17f4092bf302a415bba777fab3a9cfc) fix(symfony): handle empty content-type as set by Symfony (#6078)
* [d3484b0f1](https://github.com/api-platform/core/commit/d3484b0f1bf06e518c83cd15e67ed10e9a75fe03) fix(serializer): integrate root_resource_class to cache key (#6073)

For OpenAPI 3.0, the `spec_version=3.0.0` query parameter will force OpenAPI to the 3.0 version. This option is also available through the command line.

## v3.2.10

### Bug fixes

* [6f3c6a663](https://github.com/api-platform/core/commit/6f3c6a663cc55730580b82d146b8d62cac4f1bc5) fix(symfony): attribute filter names (#6062)
* [dc77c7949](https://github.com/api-platform/core/commit/dc77c7949a6e8c48d57708d8f43027e00124388c) fix(symfony): disable symfony error handling by default
* [f75649d49](https://github.com/api-platform/core/commit/f75649d49139e332bb739aece56a315943162770) fix(symfony): use Type constraint violation code instead of exception code

## v3.2.9

* [ecffcde](https://github.com/api-platform/core/pull/6063/commits/ecffcdeb0a27e49256c56502f6f6e327d9e03d5b) chore: remove comparator conflict wrongly introduced

## v3.2.8

### Bug fixes

* [2a43268f9](https://github.com/api-platform/core/commit/2a43268f997e79a8407992c0bd7704a19d860479) fix(jsonschema): fix invalid "int" type to "integer" (#6049)
* [9660a190a](https://github.com/api-platform/core/commit/9660a190a264102f7d1cfa1eae41f397ec559391) fix(serializer): concat context on wrong id (#6050)
* [a35f0da11](https://github.com/api-platform/core/commit/a35f0da118444e7d735a37de5e918e8927a99b5e) fix(jsonld): remove link to ApiDocumentation when doc is disabled (#6029)
* [a9a06897b](https://github.com/api-platform/core/commit/a9a06897b38a1b7a68db0e217d659d2dc5450851) fix(doctrine): get reference with identifier value (#6019)
* [aac883e93](https://github.com/api-platform/core/commit/aac883e9331adac959c097796277e8a6d3e63ef0) fix(symfony): bypass symfony exception listener (#6056)
* [b1926f533](https://github.com/api-platform/core/commit/b1926f533f4dd1f979285ac6bb26e339fe9d908f) fix(symfony): do not use metadata when merging schema constraints in Collection constraint (#6057)
* [cc16a1ced](https://github.com/api-platform/core/commit/cc16a1ced3300a6080fbc428bade0291ca5bcb82) fix(jsonschema): iri example (#5901)
* [ccf52c199](https://github.com/api-platform/core/commit/ccf52c19953874fbafbb398de0a3419244079f48) fix: item_uri_template conflict with context on relation (#6015)
* [dcce75121](https://github.com/api-platform/core/commit/dcce75121153b32401d9301d8502d43ef46a8b17) fix(doctrine): OrderFilterTrait - properties null value causing error in foreach
* [dcfd3c5ca](https://github.com/api-platform/core/commit/dcfd3c5ca34c4add63d299a8400f94795461c982) fix(jsonschema): keep format subschema generation (#6055)
* [c13c88e5c](https://github.com/api-platform/core/commit/c13c88e5c2c8206664bda2d708e43c995968ae84) fix(metadata): throw exception if itemUriTemplate if used on invalid operation (xml/yaml formats) (#6053)

## v3.2.7

Symfony 7 support.

### Bug fixes

* [183b4d637](https://github.com/api-platform/core/commit/183b4d6374a66ffaf33b3341b757a832d5a39799) fix(symfony): named arguments dependency injection
* [3d32d5e12](https://github.com/api-platform/core/commit/3d32d5e12b1d93be72064e12979402487aa3e49a) fix(openapi): entrypoint access vnd+openapi (#6012)
* [58f4a3dda](https://github.com/api-platform/core/commit/58f4a3dda820a0b61c7361f76a789f1560d8f8ab) fix: no boolean types for exclusive minimum and exclusive maximum open api (#5993)
* [5e8f5eb99](https://github.com/api-platform/core/commit/5e8f5eb99152a8914b725ffe3f4beea72ce6e5b6) fix(graphql): consider writable flag also for nested input types (#5954)
* [9848bd4d4](https://github.com/api-platform/core/commit/9848bd4d4917a97000119ee98a09916af469acd8) fix: missing eager joins on to-one relationships (#5992)
* [aa44dd726](https://github.com/api-platform/core/commit/aa44dd7264e6264ec3ec569f9f4be081927a67cb) fix(openapi): max cardinality
* [c2be40994](https://github.com/api-platform/core/commit/c2be40994ec08b51bf23b4b807eb3d4f984379ff) fix(symfony): error in provider without uri variables (#6005)
* [d2f281eed](https://github.com/api-platform/core/commit/d2f281eedbd87a3c1a3377bb23a229e1b17a0f45) fix(jsonschema): fix recursive documentation when using a dto entity wrapper (#5973)
* [e7bc2ab57](https://github.com/api-platform/core/commit/e7bc2ab5770fe673093596bc217516be61d582fc) fix(jsonschema): indirect resource input schema (#6001)

## v3.2.6

### Bug fixes

To have errors backward compatible with 3.1, use:

```yaml
api_platform:
    defaults:
         extra_properties:
             rfc_7807_compliant_errors: false
```

New extension points are available using [Errors](https://api-platform.com/docs/v3.2/core/errors/) with `rfc_7807_compliant_errors: true` such as [Error provider](https://api-platform.com/docs/v3.2/guides/error-provider/) and [Error Resource](https://api-platform.com/docs/v3.2/guides/error-resource/)

* [1b4289412](https://github.com/api-platform/core/commit/1b42894128545ad72b19b6be1c31ad25351c9138) fix: errors bc with rfc_7807_compliant_errors false (#5974)
* [ce297e6f7](https://github.com/api-platform/core/commit/ce297e6f73e1797ede21312aa31af2b110e9e583) fix(jsonschema): child entity property schema generation (#5988) (#5989)

## v3.2.5

### Bug fixes

* [ba8a7e653](https://github.com/api-platform/core/commit/ba8a7e6538bccebf14c228e43a9339214c4d9201) fix: exception message leak

## v3.2.4

### Bug fixes

* [436921f3b](https://github.com/api-platform/core/commit/436921f3bfb15f77f3d6f9c7462df7882120cd37) fix(serializer): json violation list normalizer (#5941)

## v3.2.3

### Bug fixes

* [0f015214c](https://github.com/api-platform/core/commit/0f015214c311c31f4065d3c4b3c171c3152a4e64) fix(symfony): 404 wrongly normalized (#5936)
* [495f75f81](https://github.com/api-platform/core/commit/495f75f811aedee491e3e419ca9d7040aea7355c) fix(serializer): json non-resource intermitent class (#5937)

## v3.2.2

### Bug fixes

* [3d0dfc148](https://github.com/api-platform/core/commit/3d0dfc148ec864364d1c36dfaa2690e1fc58dfc5) fix(symfony): swagger ui should use base url (#5918)
* [4f51b5198](https://github.com/api-platform/core/commit/4f51b519853cf972070db79a8b82c824afa000fc) fix(symfony): use http exception headers (#5932)
* [547c4e605](https://github.com/api-platform/core/commit/547c4e605c60c54642abc06c37462f5e47fbe25d) fix(graphql): item resolver inheritance error  (#5910)
* [6b5df95ca](https://github.com/api-platform/core/commit/6b5df95caf2e3c6f807f2083ea3526fcd2ae473a) fix(doctrine): odm order filter should use a left join on nullable fields (#5911)
* [ae090c7c4](https://github.com/api-platform/core/commit/ae090c7c4ec9619655ae95534b87a07aa7b2b061) fix(graphql): use normalization context to get item from IRI (#5915)
* [b2d9ce40c](https://github.com/api-platform/core/commit/b2d9ce40cf27ee9743aafff4f163e195ae47b880) fix(serializer): pass $context to IriConverter (#5908)
* [c2824c1d7](https://github.com/api-platform/core/commit/c2824c1d72f04a0d05b902b08a475a95db18e69f) fix(jsonschema): restore type factory usage (#5897)
* [cd6f5834b](https://github.com/api-platform/core/commit/cd6f5834b7458798054fb4c7b3ea94f193246405) fix(serializer): use error normalizers (#5931)
* [d9f77402d](https://github.com/api-platform/core/commit/d9f77402d55c40a867edf8fa15cee67c2801574f) fix(graphql): service missing in debug mode (#5930)

Note:

`extra_properties.skip_deprecated_exception_normalizers` is set to `false` so that decorating Error normalizers works. Set it to `true` to avoid deprecations and decorate the corresponding `ItemNormalizer` instead.

## v3.2.1

### Bug fixes

* [05363d98f](https://github.com/api-platform/core/commit/05363d98f54babff49119a1fb55a17bb1550f21a) fix(symfony): force json format with GraphQL
* [0c50d4ceb](https://github.com/api-platform/core/commit/0c50d4ceba9d83a2212771f21e2d1de4442c1456) fix(state): add link header processor without links (#5888)
* [51b818304](https://github.com/api-platform/core/commit/51b818304874ec60ebab914455adc8f50402ca9d) fix: error traces without arguments (#5891)
* [b7c094aca](https://github.com/api-platform/core/commit/b7c094acae3ac3271f42443ea2f62f22d019bea6) fix(metadata): interface breaking in 3.2 (#5883)
* [dbd4f64de](https://github.com/api-platform/core/commit/dbd4f64debab876ab556ec87c8c973f0c38ada10) fix(graphql): docs should answer text/html

## v3.2.0

### Bug fixes

* [2e48c7ecc](https://github.com/api-platform/core/commit/2e48c7ecccde87653bfc859c5f8b96cc37b8fe51) fix(jsonschema): do not override nor complete ApiProperty::schema user value (#5855, #5864)
* [33b1658a0](https://github.com/api-platform/core/commit/33b1658a0e100e0ca9e7bf46aa2307ead9b1744e) fix(serializer): disable_type_enforcement with null values (#5593)
* [3953f6f0a](https://github.com/api-platform/core/commit/3953f6f0a37e38fd8a3d6b0d9faa80f59e00ec01) fix(state): read provider without request (#5803)
* [49981505a](https://github.com/api-platform/core/commit/49981505a8af281d00e35f1424432fae65686eb8) fix(metadata): convert composite uri variables w/ proper type
* [4ac62b0c2](https://github.com/api-platform/core/commit/4ac62b0c2d88b95d58f2e9477579ceca28313874) fix(jsonschema): build non-resource class schema (#5842)
* [51e4295b2](https://github.com/api-platform/core/commit/51e4295b26e606c5da10d434b6e98dadb8a243b2) fix: missing parent construct calls with named arguments (#5387)
* [6c9e121db](https://github.com/api-platform/core/commit/6c9e121db88256d79c9c4c78c05993b3465c025e) fix(elasticsearch): elasticsearch 8 compatibility (#5795)
* [7ecfdff85](https://github.com/api-platform/core/commit/7ecfdff85e997feafab1377ae6309e273a4e9678) fix(symfony): graphql security/validator only when enabled
* [b58ec1207](https://github.com/api-platform/core/commit/b58ec1207da8ba5b669937508a17451af61b0688) fix(metadata): correct interface aliases (#5766)
* [c353e5aa4](https://github.com/api-platform/core/commit/c353e5aa474d7a2e6c701bfa1c369b560e928c17) fix(graphql): do not add id field if operation already has a dedicated input type (#5095)
* [c76d9b0b7](https://github.com/api-platform/core/commit/c76d9b0b7819036f684da214ad6fac2c3c7fa852) fix(serializer): allow usage of genId property for collection (#5870)


### Features

* [0d04f28f2](https://github.com/api-platform/core/commit/0d04f28f230f5e9ab789644caba7efac1fe20cfa) feat(metadata): improve CreateProvider (#5770)
* [2141b0118](https://github.com/api-platform/core/commit/2141b01189a25b8a242a6878bcafb3be276f8a41) feat: deprecate not setting formats manually (#5808)
* [2cf9d552a](https://github.com/api-platform/core/commit/2cf9d552aa3b8b14820fc71e79cb6bf74347eaa8) feat: improve 'not_normalizable_value_exception' (#5844)
* [3fa0176a3](https://github.com/api-platform/core/commit/3fa0176a34a7cbc24a612b69404dc8c6be82f8a6) feat(metadata): add canonical_uri_template (#5832)
* [46e84ffc1](https://github.com/api-platform/core/commit/46e84ffc182df12221967ab91403f2b0692847be) feat(symfony): add mercure asserts (#5764)
* [4ef0ef856](https://github.com/api-platform/core/commit/4ef0ef856ced658ac942fd6a2c6f7c5c563078d1) feat: error as resources, jsonld errors are now problem-compliant (#5433)
* [6babb3d6b](https://github.com/api-platform/core/commit/6babb3d6b707290fdf314c0e96acd525d6f96670) feat: replace doctrine/inflector by symfony/string (#5637)
* [7a1d351b0](https://github.com/api-platform/core/commit/7a1d351b0a37fc7107c548708f4b9e38a9dedc76) feat(tests): add a method to generate the IRI from a resource (#5582)
* [851aa3778](https://github.com/api-platform/core/commit/851aa3778ef8a6f959a44b759fc343e9f8cfc8bf) feat(graphql)!: add extra args for custom queries or mutations (#5359)
* [92a81f024](https://github.com/api-platform/core/commit/92a81f024541054b9322e7457b75c721261e14e0) feat(graphql): allow to disable the introspection query (#5711)
* [b9cf49969](https://github.com/api-platform/core/commit/b9cf49969e4207ca6044338d992eb8ff97f5740e) feat(openapi): update Swagger UI to v5.6.2 (#5807)
* [ccef472ca](https://github.com/api-platform/core/commit/ccef472cade42b189fa8cb7793e27fad1349e289) feat(openapi): use OpenAPI 3.1 (#5489)
* [c7dcd3669](https://github.com/api-platform/core/commit/c7dcd36690927bdf3bd08055cdf4fff5c08de4da) feat(doctrine): stateOptions can handleLinks for query optimization (#5732)
* [d793ffb92](https://github.com/api-platform/core/commit/d793ffb9228a21655ee35f0b90a959f93281a4cf) feat: union/intersect types (#5470)
* [d85884d53](https://github.com/api-platform/core/commit/d85884d53bda3f0bfc60435f5b0e69e7522d70c8) feat(elasticsearch): filtering on nested fields (#5820)
* [e65d2c35a](https://github.com/api-platform/core/commit/e65d2c35a983813de55104ebd12c49bdfeb8cdc5) feat(serializer): add ApiProperty::uriTemplate option (#5675)

### Notes

Use `composer recipes:update` to update your configuration file. The default configuration file is:

```yaml
api_platform:
    title: Hello API Platform
    version: 1.0.0
    formats:
        jsonld: ['application/ld+json']
    docs_formats:
        jsonld: ['application/ld+json']
        jsonopenapi: ['application/vnd.openapi+json']
        html: ['text/html']
    defaults:
        stateless: true
        cache_headers:
            vary: ['Content-Type', 'Authorization', 'Origin']
        extra_properties:
            standard_put: true
            rfc_7807_compliant_errors: true # this will be the default value in 4.x
    event_listeners_backward_compatibility_layer: false # use symfony event listeners
    keep_legacy_inflector: false # use doctrine/inflector
```

Listeners will not get removed in API Platform 4 but will rather use our new Providers and Processors. You can now force the request to go through a particular state for example:

```php
#[Post(read: true)] // to force reading even though it's a POST
```

- `ApiPlatform\Api` got moved to `ApiPlatform\Metadata`

- Adds `assertMercureUpdateMatchesJsonSchema(Update $update, array $topics, array|object|string $jsonSchema = '', bool $private = false, string $id = null, string $type = null, int $retry = null, string $message = '')`
- The handle links feature is experimental

When using GraphQl, with `event_listeners_backward_compatibility_layer: true`, mutation resolver gets called before validation, when using `false` (the future default) validation occurs on the user's input.

## v3.2.0-beta.2

### Bug fixes

* [2e48c7ecc](https://github.com/api-platform/core/commit/2e48c7ecccde87653bfc859c5f8b96cc37b8fe51) fix(jsonschema): do not override nor complete ApiProperty::schema user value (#5855 #5869, #5864)
* [6a62a53f8](https://github.com/api-platform/core/commit/6a62a53f854ec93947d1c4a5a32007df09e55d06) fix(hydra): hydra:search iexact strategies
* [adbc57865](https://github.com/api-platform/core/commit/adbc57865dd1a0f56bf627ad9a319f3ed0307148) fix(openapi): entrypoint text/html 200 (#5868, #5863)
* [d42f00ce1](https://github.com/api-platform/core/commit/d42f00ce18adaa55323e3cdedab8ba434ef247e2) fix(validation): normalize constraint violation list (#5866)

### Features

* [1fccb8413](https://github.com/api-platform/core/commit/1fccb8413a902a1011f049d0f8ddcd8d5456d335) feat(doctrine): add SearchFilter case-insensitive strategies constants
* [2cf9d552a](https://github.com/api-platform/core/commit/2cf9d552aa3b8b14820fc71e79cb6bf74347eaa8) feat: improve 'not_normalizable_value_exception' (#5844)
* [c76d9b0b7](https://github.com/api-platform/core/commit/c76d9b0b7819036f684da214ad6fac2c3c7fa852) feat(serializer): allow usage of genId property for collection (#5870)

Notes:

- `ApiPlatform\Api` got moved to `ApiPlatform\Metadata`

## v3.2.0-beta.1

### Bug fixes

* [1c6862dd5](https://github.com/api-platform/core/commit/1c6862dd51fb97d5c78652ce672a0814e79f7d70) fix(symfony): use static variable to store Error (#5837, #5828)
* [2703a4507](https://github.com/api-platform/core/commit/2703a45072e9477b068d3484f197ca0571a89c2a) fix(swagger): no throw when operation is not found
* [2dd058a45](https://github.com/api-platform/core/commit/2dd058a4546f329628c1de459c2673c010ee9a35) fix(symfony): use "main" state alias for decoration (#5806)
* [3dedf6d9d](https://github.com/api-platform/core/commit/3dedf6d9d739277fed06ce24f840de119bd6881d) fix: exception to status on error resource (#5823)
* [4ac62b0c2](https://github.com/api-platform/core/commit/4ac62b0c2d88b95d58f2e9477579ceca28313874) fix(jsonschema): build non-resource class schema (#5842)
* [660955b69](https://github.com/api-platform/core/commit/660955b692ef7516ecc70ae937ca7707049deb85) fix(symfony): show documentation as entrypoint when requesting html (#5836)
* [7ebff2702](https://github.com/api-platform/core/commit/7ebff270275bfd2f3283ba42d3ddb28699292b53) fix: errors without compatibility flag (#5841)
* [828e42997](https://github.com/api-platform/core/commit/828e4299762cae94f99f4d807eca4e61367a36a5) fix: Mercure assertions to public to allow Mercure Hub reset (#5834)

### Features

* [2141b0118](https://github.com/api-platform/core/commit/2141b01189a25b8a242a6878bcafb3be276f8a41) feat: deprecate not setting formats manually (#5808)
* [3fa0176a3](https://github.com/api-platform/core/commit/3fa0176a34a7cbc24a612b69404dc8c6be82f8a6) feat(metadata): add canonical_uri_template (#5832)
* [b9cf49969](https://github.com/api-platform/core/commit/b9cf49969e4207ca6044338d992eb8ff97f5740e) feat(openapi): update Swagger UI to v5.6.2 (#5807)
* [e65d2c35a](https://github.com/api-platform/core/commit/e65d2c35a983813de55104ebd12c49bdfeb8cdc5) feat(serializer): add ApiProperty::uriTemplate option (#5675)


## v3.2.0-alpha.2

### Bug fixes

* [6c9e121db](https://github.com/api-platform/core/commit/6c9e121db88256d79c9c4c78c05993b3465c025e) fix(elasticsearch): elasticsearch 8 compatibility (#5795)
* [7ecfdff85](https://github.com/api-platform/core/commit/7ecfdff85e997feafab1377ae6309e273a4e9678) fix(symfony): graphql security/validator only when enabled

### Features

* [0d04f28f2](https://github.com/api-platform/core/commit/0d04f28f230f5e9ab789644caba7efac1fe20cfa) feat(metadata): improve CreateProvider (#5770)
* [46e84ffc1](https://github.com/api-platform/core/commit/46e84ffc182df12221967ab91403f2b0692847be) feat(symfony): add mercure asserts (#5764)
* [c7dcd3669](https://github.com/api-platform/core/commit/c7dcd36690927bdf3bd08055cdf4fff5c08de4da) feat(doctrine): stateOptions can handleLinks for query optimization (#5732)

Notes:

- Adds `assertMercureUpdateMatchesJsonSchema(Update $update, array $topics, array|object|string $jsonSchema = '', bool $private = false, string $id = null, string $type = null, int $retry = null, string $message = '')`
- The handle links feature is experimental until 3.3

## v3.2.0-alpha.1

### Bug fixes

* [33b1658a0](https://github.com/api-platform/core/commit/33b1658a0e100e0ca9e7bf46aa2307ead9b1744e) fix(serializer): disable_type_enforcement with null values (#5593)
* [49981505a](https://github.com/api-platform/core/commit/49981505a8af281d00e35f1424432fae65686eb8) fix(metadata): convert composite uri variables w/ proper type
* [502234cf5](https://github.com/api-platform/core/commit/502234cf55d6a58c79b68c5193bade9ba605107e) fix: allowed composite identifiers with differents types
* [51e4295b2](https://github.com/api-platform/core/commit/51e4295b26e606c5da10d434b6e98dadb8a243b2) fix: missing parent construct calls with named arguments (#5387)
* [9116f1554](https://github.com/api-platform/core/commit/9116f1554581bf5362146cdc4d5fdbebc71e3528) fix(symfony): provider can throw validation exception (#5586)
* [b58ec1207](https://github.com/api-platform/core/commit/b58ec1207da8ba5b669937508a17451af61b0688) fix(metadata): correct interface aliases (#5766)
* [c353e5aa4](https://github.com/api-platform/core/commit/c353e5aa474d7a2e6c701bfa1c369b560e928c17) fix(graphql): do not add id field if operation already has a dedicated input type (#5095)
* [ccef472ca](https://github.com/api-platform/core/commit/ccef472cade42b189fa8cb7793e27fad1349e289) fix(openapi): use 3.1 version (#5489)

### Features

* [4ef0ef856](https://github.com/api-platform/core/commit/4ef0ef856ced658ac942fd6a2c6f7c5c563078d1) feat: error as resources, jsonld errors are now problem-compliant (#5433)
* [6babb3d6b](https://github.com/api-platform/core/commit/6babb3d6b707290fdf314c0e96acd525d6f96670) feat: replace doctrine/inflector by symfony/string (#5637)
* [7a1d351b0](https://github.com/api-platform/core/commit/7a1d351b0a37fc7107c548708f4b9e38a9dedc76) feat(tests): add a method to generate the IRI from a resource (#5582)
* [851aa3778](https://github.com/api-platform/core/commit/851aa3778ef8a6f959a44b759fc343e9f8cfc8bf) feat(graphql)!: add extra args for custom queries or mutations (#5359)
* [92a81f024](https://github.com/api-platform/core/commit/92a81f024541054b9322e7457b75c721261e14e0) feat(graphql): allow to disable the introspection query (#5711)
* [d793ffb92](https://github.com/api-platform/core/commit/d793ffb9228a21655ee35f0b90a959f93281a4cf) feat: union/intersect types (#5470)

## v3.1.25

### Bug fixes

* [5de077e7d](https://github.com/api-platform/core/commit/5de077e7de94f2e07ca615efc5ecf1b32b37a10e) fix(symfony): use Type constraint violation code instead of exception code (#6064)
* [d3484b0f1](https://github.com/api-platform/core/commit/d3484b0f1bf06e518c83cd15e67ed10e9a75fe03) fix(serializer): integrate root_resource_class to cache key (#6073)

## v3.1.24

### Bug fixes

* [9660a190a](https://github.com/api-platform/core/commit/9660a190a264102f7d1cfa1eae41f397ec559391) fix(serializer): concat context on wrong id (#6050)
* [a9a06897b](https://github.com/api-platform/core/commit/a9a06897b38a1b7a68db0e217d659d2dc5450851) fix(doctrine): get reference with identifier value (#6019)
* [cc16a1ced](https://github.com/api-platform/core/commit/cc16a1ced3300a6080fbc428bade0291ca5bcb82) fix(jsonschema): iri example (#5901)

## v3.1.23

### Bug fixes

* [9848bd4d4](https://github.com/api-platform/core/commit/9848bd4d4917a97000119ee98a09916af469acd8) fix: missing eager joins on to-one relationships (#5992)
* [d2f281eed](https://github.com/api-platform/core/commit/d2f281eedbd87a3c1a3377bb23a229e1b17a0f45) fix(jsonschema): fix recursive documentation when using a dto entity wrapper (#5973)
* [dac49cb16](https://github.com/api-platform/core/commit/dac49cb16939ae14fa14eea1190cbf995bca842b) Revert "fix: missing eager joins on to-one relationships (#5992)"

## v3.1.22

### Bug fixes

* [157faafd5](https://github.com/api-platform/core/commit/157faafd54db75214b39fc8c7c6a97a171513c67) fix(state): wrong variable name
* [b2d9ce40c](https://github.com/api-platform/core/commit/b2d9ce40cf27ee9743aafff4f163e195ae47b880) fix(serializer): pass $context to IriConverter (#5908)

## v3.1.21

### Bug fixes

* [364732d83](https://github.com/api-platform/core/commit/364732d838f2fba05887fd24c75c4fb302c7af04) fix(serializer): missing parenthesis fixes #5773

## v3.1.20

### Bug fixes

* [eebc7c5a0](https://github.com/api-platform/core/commit/eebc7c5a0bd4d2138f706b8309f53d0b972b21d4) fix: add itemUriTemplate to resources.xsd (#5872)

## v3.1.19

### Bug fixes

* [6a62a53f8](https://github.com/api-platform/core/commit/6a62a53f854ec93947d1c4a5a32007df09e55d06) fix(hydra): add xxx[] hydra:search iexact
* [7f0e00cd2](https://github.com/api-platform/core/commit/7f0e00cd2d838037f716e0b8588a6529ef9f158c) fix(mercure): custom topics on newly created entities causes error #5074
* [1fccb8413](https://github.com/api-platform/core/commit/1fccb8413a902a1011f049d0f8ddcd8d5456d335) fix(doctrine): add SearchFilter case-insensitive strategies constants

## v3.1.18

## v3.1.17

### Bug fixes

* [50999d651](https://github.com/api-platform/core/commit/50999d651e04b7d026ee172e8d6e0b24327979b0) fix(symfony): missing translation contracts (#5799)

## v3.1.16

### Bug fixes

* [c14b6f419](https://github.com/api-platform/core/commit/c14b6f41941f8d95cfd92691eb94ede40cec2125) fix(graphql): add cache_key in item normalizer (#5686)
* [c2b3514c0](https://github.com/api-platform/core/commit/c2b3514c08d8567490402397dd3e1bc4c85da9ad) fix(serializer): no mapping cache in debug mode (#5777)
* [c7892a646](https://github.com/api-platform/core/commit/c7892a646a671cf3d501831920d03426045d3324) fix(serializer): retrieve only first uriVariable from operation (#5788)
* [c8b974131](https://github.com/api-platform/core/commit/c8b974131c98e225378fb28134ca47c5a2cc5fb7) fix(serializer): correct supported types for elasticsearch item normalizer decorator (#5769)

## v3.1.15

### Bug fixes

* [07c9989eb](https://github.com/api-platform/core/commit/07c9989eb2717d8881801c843706194499b6c903) fix(metadata): notexposed no urivariables inheritance (#5765)
* [8d04dcf5f](https://github.com/api-platform/core/commit/8d04dcf5f63c152ffa4e9ae00c8d6624c97f2855) fix(metadata): fix POST on subresource (#5734)
* [a774f4c51](https://github.com/api-platform/core/commit/a774f4c51167dbbe585269f14a7c51a3f9e38c3c) fix(doctrine): searchfilter with nested custom identifiers (#5760)
* [b7258ef38](https://github.com/api-platform/core/commit/b7258ef38302c92869ab23d0dc83a2cb411526a7) fix: error 500 on request with 'empty' accept headers, e.g. 'accept: 0' or 'accept: ' (#5767)

## v3.1.14

### Bug fixes

* [146f55330](https://github.com/api-platform/core/commit/146f55330e3df8301ac84345b69a25cdfb908b27) fix(metadata): operation NotExposed status to 404 (#5717)
* [4dcfc16c3](https://github.com/api-platform/core/commit/4dcfc16c38ab4c371a37a7d92d2f2f205de31f89) fix(symfony): perf regression with Symfony 6.3  (#5721)
* [4f9626f42](https://github.com/api-platform/core/commit/4f9626f42b75a5fd1f9d681c80ad6c4ee56318fe) fix(serializer): use data if no uri_variables provided (#5743)
* [7bb92a52f](https://github.com/api-platform/core/commit/7bb92a52f5c6e02705547408281eba93f73b588e) fix(doctrine): use stateOptions only within doctrine context (#5726)
* [83dbfbff1](https://github.com/api-platform/core/commit/83dbfbff1717dabba7ce9e814d0bdb556b49fcb8) fix(metadata): generated NotExposed operation should inherit resource options (#5722)
* [ccad63683](https://github.com/api-platform/core/commit/ccad6368303d341f37eff0317cc8e433504c460f) Revert "fix: search on nested sub-entity that doesn't use "id" as its ORM identifier (#5623)" (#5744)
* [e2745855b](https://github.com/api-platform/core/commit/e2745855be4986d361626d1b853e45cde229d3d8) fix(openapi): model Example, Header and Reference (#5716)
* [ebf03104f](https://github.com/api-platform/core/commit/ebf03104fcbffc5af74d78c3e9b14d02d7527214) fix(jsonld): skolem uri template may have a _format (#5729)

## v3.1.13

### Bug fixes

* [0c1c1c36f](https://github.com/api-platform/core/commit/0c1c1c36f55ba96119e6c22ea25fb69c85b20161) fix(symfony): enable API Platform in LexikJWTAuthenticationBundle (#5609)


  You can disable this behaviour by setting the configuration key `lexik_jwt_authentication.api_platform.enabled` to `false`

* [146991ba4](https://github.com/api-platform/core/commit/146991ba42014f0141195bc43be5cd875665407c) fix(openapi): merge parameters with deprecated openApiContext (#5703)
* [14969aa0c](https://github.com/api-platform/core/commit/14969aa0c6f021bb4bf3e9d13b00e710c22110de) fix(serializer): put replaces embed collection (#5604)
* [9cb0ee43c](https://github.com/api-platform/core/commit/9cb0ee43c175927f3002e86d23443d8d43fa14b3) fix(metadata): missing xml/yaml properties (#5684)
* [a8796238d](https://github.com/api-platform/core/commit/a8796238d7ff96a7c8b9946604b8049a7ae37681) fix: filters don't have to implement the "legacy" FilterInterface (#5619)
* [ada115966](https://github.com/api-platform/core/commit/ada1159668b1df757b7104e63f1d62812a988d38) fix: don't implement deprecated CacheableSupportsMethodInterface with Symfony 6.3+ (#5696)
* [b8cbdb1cb](https://github.com/api-platform/core/commit/b8cbdb1cbd75893990e47391e306b9903eb63600) fix(doctrine): search on nested sub-entity that doesn't use "id" as its ORM identifier (#5623)
* [e21e9faee](https://github.com/api-platform/core/commit/e21e9faee0537fc29b5b008bdc1fae2638b66431) fix(symfony): support for custom controller with class method (#5681)

### Features

* [011fd4862](https://github.com/api-platform/core/commit/011fd48625d8051321dd3368b7c95a4f6045fe56) feat(serializer): support for getSupportedTypes (symfony 6.3) (#5671)
* [db2cc9567](https://github.com/api-platform/core/commit/db2cc9567b29199c43ee3a8ba095ff9023435998) feat(serializer): support for getSupportedTypes (symfony 6.3) (#5672)

## v3.1.12

### Bug fixes

* [1bcca0930](https://github.com/api-platform/core/commit/1bcca093074a85da071a8b16c250e084a7c3b68a) fix(symfony): provider can throw validation exception (#5586)
* [57bfefbfa](https://github.com/api-platform/core/commit/57bfefbfa42dd893b6ec3cb66c0402597927efc6) [547078cf7](https://github.com/api-platform/core/commit/547078cf7ce89d6dbfcccf4fa6dbe7031b04b94c) fix(metadata): convert composite uri variables w/ proper type
* [a0f12b667](https://github.com/api-platform/core/commit/a0f12b667a076c6647d7d8281c7a6e3a6bd68692) fix(serializer): disable_type_enforcement with null values (#5593)

Also updates: graphiql, opensans

## v3.1.11

### Bug fixes

* [2121d15c3](https://github.com/api-platform/core/commit/2121d15c3d3401f43ee3af4aedbb9d45d36adce3) fix(symfony): allow post with uri variables and no provider
* [ed4bca9b9](https://github.com/api-platform/core/commit/ed4bca9b95571984f5c94924640dd0bbd0aa3ce9) fix(serializer): Guess uri variables with the operation and the data instead of hardcoding id (#5546)

## v3.1.10

### Bug fixes

* [1281b0f49](https://github.com/api-platform/core/commit/1281b0f491f5656a7554265858460bb768329ed4) fix(serializer): don't force resource class on relation (#5576)
* [810e4455b](https://github.com/api-platform/core/commit/810e4455b34070c12404bc65ea0366c48d54d43d) fix(serializer): fix denormalizing to non-cloneable objects (#5569)

## v3.1.9

* [0fc5ad580](https://github.com/api-platform/core/commit/0fc5ad58024e49c434ef0d68a04b2fcc83308e5f) Fixes wrong interfaces aliases (#5563)

## v3.1.8

### Bug fixes

* [1f28efc56](https://github.com/api-platform/core/commit/1f28efc56e7aa18dd3ef265e54b9517ffe883189) fix(graphql): send headers in GraphiQL (#5539)
* [25861348d](https://github.com/api-platform/core/commit/25861348d02a41b0e2a99537e0943d5506831593) fix(elasticsearch): add is_collection to documentation (#5497)
* [60082d7a5](https://github.com/api-platform/core/commit/60082d7a5f83022d68e2e59c7683dd0fc586d1b7) fix(doctrine): use fromClass metadata for each link (#5508)
* [62510b2bb](https://github.com/api-platform/core/commit/62510b2bbe514dca93ae3b081f43f1cb56fef984) fix(jsonschema): change type to integer in json schema for int backed enums (#5553)
* [6d2f883d1](https://github.com/api-platform/core/commit/6d2f883d17c6866bb41ab72ca84d3d8358625476) fix(metadata): remove identifier_metadata_factory services (#5518)
* [6d7aaf7de](https://github.com/api-platform/core/commit/6d7aaf7dee263ee43894c5ae504c970d822e715a) fix: class already declared with preloading (#5523)
* [aa7f4b8fe](https://github.com/api-platform/core/commit/aa7f4b8fe8c70a3fd7c2161c68e21c0edc6de89f) Revert "fix(symfony): query parameter validation after authentication (#5473)" (#5556)
* [e4fa5a234](https://github.com/api-platform/core/commit/e4fa5a234b05652630c07ab375c5d4b9e46e17f8) fix(serializer): no forced resource class relation (#5542)
* [f3935749e](https://github.com/api-platform/core/commit/f3935749e83176c9be0afe8628b5b617529577bd) fix: the stateOptions::entityClass should be used when present while building Links (#5550)

## v3.1.7

### Bug fixes

* [05b572234](https://github.com/api-platform/core/commit/05b5722347810f6af9b458b60c28a0bb38301f64) fix(jsonschema): access related subschema on readableLink (#5515)
* [138c51218](https://github.com/api-platform/core/commit/138c512186145f79b1b00f25e1785cc533eb6107) fix(serializer): skip unknown property and use the name converter
* [23ef01aa2](https://github.com/api-platform/core/commit/23ef01aa2d5700ede458f32e09c6a85967d60c1d) fix(openapi): restore OpenApiFactory::OPENAPI_DEFINITION_NAME (#5516)
* [871824c44](https://github.com/api-platform/core/commit/871824c443f0e1fb5bfbddeef648b5da2745d291) fix(symfony): check operations parameters (#5513)
* [af5cd209d](https://github.com/api-platform/core/commit/af5cd209d5e1761b1b0a7bf4de2e81280f32a167) fix(serializer): cache class metadata factory (#5512)
* [f128e3b3c](https://github.com/api-platform/core/commit/f128e3b3ce17f34e4767c547c5857c754555fdd3) fix(openapi): yaml parameters extractor (#5487)

## v3.1.6

### Bug fixes

* [2be8b4f74](https://github.com/api-platform/core/commit/2be8b4f743d8104c6cd8e4533dc8958079188543) fix(symfony): OperationMetadataFactoryInterface service alias (#5491)
* [4c87a97c2](https://github.com/api-platform/core/commit/4c87a97c29765eea9316b01c213353911de6648d) fix(openapi): deprecate api_keys names not compatible with 3.1 (#5490)
* [e47162227](https://github.com/api-platform/core/commit/e471622271dc8fe1b31adfd6c8232693e354c004) fix(jsonschema): find the related operation instead of assuming one (#5469)
* [e7114b7ed](https://github.com/api-platform/core/commit/e7114b7ed1d622a86748add518b5e09de90f1437) fix(elasticsearch): remove old bridge service (#5488)

## v3.1.5

### Bug fixes

* [1f23344b0](https://github.com/api-platform/core/commit/1f23344b0c08a5c7710e4d9a5edc12d49bac24c2) fix(symfony): status at 200 when allowCreate is false (#5465)
* [42c5c3e64](https://github.com/api-platform/core/commit/42c5c3e6466cc546db2325f5e8a9c09ead5453e2) fix(symfony): query parameter validation after security (#5473)
* [8a88e0cbc](https://github.com/api-platform/core/commit/8a88e0cbc92629f28408265ef3143da3cc8fb8fc) fix(metadata): no deprecation when elasticsearch is null (#5450)
* [9421ba537](https://github.com/api-platform/core/commit/9421ba5378edec3ea93fd81a1a6de6a2cfda0ffb) fix(serializer): propertyFilter should apply to arrays as well (#5444)
* [a5aa52923](https://github.com/api-platform/core/commit/a5aa5292391acb10e49d24a8bb56bdd622a05e41) fix(metadata): remove ReflectionEnum usage (#5453)
* [bf29fb973](https://github.com/api-platform/core/commit/bf29fb973271d30d5e3ab878d65b75f2805d5928) fix(openapi): document PropertyFilter within parameter (#5458)
* [cfdc9ad9b](https://github.com/api-platform/core/commit/cfdc9ad9baa2a7bc8d206e92b51ee7513abe575a) fix(metadata): add default operations config (#5459)
* [6e35a714f](https://github.com/api-platform/core/commit/cfdc9ad9baa2a7bc8d206e92b51ee7513abe575a) perf(symfony): cache identifier metadata factory (#5466)

Notes:

- #5473 changes the priority of the `ApiPlatform\Symfony\EventListener\QueryParameterValidateListener` from 16 to 2 so that it occurs after the security listener.
- ReflectionEnum was removed as it was causing segfaults with opcache preload and an unidentified PHP extension
- #5459 fixes the `defaults` operation declaration such as:
    ```
    defaults:
      - ApiPlatform\Metadata\Get
      - ApiPlatform\Metadata\GetCollection
    ```

  very useful for read only APIs, this was possible in 2.7 but not backported correctly

## v3.1.4

### Bug fixes

* [80ac2e3d6](https://github.com/api-platform/core/commit/80ac2e3d63883bd97569d049e182c061ba4453f9) fix(serializer): find parent class operation
* [b6139234a](https://github.com/api-platform/core/commit/b6139234a1fde0265f9da93eefd1b71e90524f66) fix(metadata): default graphql operations on ApiResource only
* [bd3ff68ce](https://github.com/api-platform/core/commit/bd3ff68ce6e312ad0beced1f3265fcc412206cb0) fix: missing PlaceholderAction service alias (#5429)

## v3.1.3

### Bug fixes

* [dcc4733d5](https://github.com/api-platform/core/commit/dcc4733d526ab941aa40afe1b7a645ef36bf68a3) fix(serializer): reset cache key on collection items CVE-2023-25575
* [1170c3846](https://github.com/api-platform/core/commit/1170c384636bbad999f037cedcdb4190a8028360) fix(metadata): map uriVariables to uriTemplate vars (#5410)
* [d1d139aa4](https://github.com/api-platform/core/commit/d1d139aa42caf3a008b0dbb034bb23d77cfcc024) fix(metadata): in xml resource extractor > building request body content values (#5419)
* [ea71416bb](https://github.com/api-platform/core/commit/ea71416bb527579b4f49674161bc1de47a14ee12) fix(openapi): allow overriding of openapi responses (#5393)
* [ff3255c9e](https://github.com/api-platform/core/commit/ff3255c9ebefa0d25eba7e39c45c991ee0e4278f) fix(serializer): check which instance of NameConverterInstance is used (#5398)

### Features

* [d3783d611](https://github.com/api-platform/core/commit/d3783d611c74c4cc0010ad078b7f22028c7df26e) feat(metadata): class IdentifiersExtractor now handles enums (#5411)

## v3.1.2

### Bug fixes

* [85209558c](https://github.com/api-platform/core/commit/85209558ce5906b3a6e4218d7740231968446ce6) fix(symfony): missing http clients varnish purger (#5383)
* [a76ebf271](https://github.com/api-platform/core/commit/a76ebf27196c9d7d92997d5f100268aa38438060) fix: missing parent construct calls with named arguments (#5385)

## v3.1.1

### Bug fixes

* [186cd69d4](https://github.com/api-platform/core/commit/186cd69d446133fd19f321ac6c8a355ba98658cf) fix(symfony): wrong purger clients type (#5373)
* [4eb0ab5a9](https://github.com/api-platform/core/commit/4eb0ab5a936c2ff95baee1421c3156ce707fbae6) fix(openapi): fix openapi requestbody decoration (#5377)
* [78ae12298](https://github.com/api-platform/core/commit/78ae122980532d91df69a412d17e05488a379cd1) fix(metadata): allow custom http status code for put (#5375)
* [a5fb2aa28](https://github.com/api-platform/core/commit/a5fb2aa2850bbc2494137ea65549a0299500e659) fix(metadata): defaults extra properties (#5362)
* [f7c70b17d](https://github.com/api-platform/core/commit/f7c70b17d195a311e7a4a923de224d6663cfdb50) fix(graphql): name and key should be the same for an enum without Enum suffix in class name (#5369)

## v3.1.0

### Bug fixes

* [7f09a2640](https://github.com/api-platform/core/commit/7f09a2640c41974dc6fbf361782e2cee41692426) fix(jsonschema): remove @id @type @context from input schema  (#5267)
* [7fa9ca5a7](https://github.com/api-platform/core/commit/7fa9ca5a7097535de4569c5e118e4d4f97984504) fix: do not use api_graphql_graphiql route when graphiQl is disabled because it won’t exist (#5266)
* [9f5a408a1](https://github.com/api-platform/core/commit/9f5a408a1c20b9268a6dc37abb3bc2b1bc38e49d) fix(metadata): attributes parameter order (#5317)
* [d0fcd70c3](https://github.com/api-platform/core/commit/d0fcd70c34e79e1b072032a847b3a6e94f63db72) fix(graphql): remove inline styles and add twig blocks to aid overriding templates in strict CSP environments (#5251)

### Features

* [3a845f1fb](https://github.com/api-platform/core/commit/3a845f1fb0ee80d6a8dc547a2aa97633fcda0830) fix(symfony): use `swagger.api_keys` with a key to handle multiple authorizations (#4691)
* [06185b7c9](https://github.com/api-platform/core/commit/06185b7c96eec95328fcd06375a74abc91564477) feat: add groups filter whitelist info to swagger (#5244)
* [10da65f67](https://github.com/api-platform/core/commit/10da65f67712b4acd21561ddf573e9b9a0b0d74e) feat: support collect denormalization errors (#5170)
* [36d930eda](https://github.com/api-platform/core/commit/36d930edad8cd733a977d0327b850fd41df6fee6) feat(graphql): enable profiler panel when using graphql (#5072)
* [471185d3e](https://github.com/api-platform/core/commit/471185d3ef86c26ec29a037c4ed615b6088197cf) feat(symfony): agnostic cache purger + souin support (#5273)
* [8744857a3](https://github.com/api-platform/core/commit/8744857a3a9c7cba99440405ad057b1a55952eff) feat: add GraphQL enum support (#5199)
* [8c8a91b4a](https://github.com/api-platform/core/commit/8c8a91b4a46c6330346b7858271fc8a29e2a8fa1) feat(jsonschema): serialization context on JsonSchema (#4860)
* [902b1354f](https://github.com/api-platform/core/commit/902b1354f84c75cf5cc9d7199998733f6157a998) feat: better separation of entity class and resource (#5275)
* [a558c94d0](https://github.com/api-platform/core/commit/a558c94d0b6e0607edee3ab243f7b746976ed422) feat: add context to XML parsing errors (#5335)
* [a828af0e8](https://github.com/api-platform/core/commit/a828af0e8eb9281d2ebf59692e5722bf08727861) feat: use phpdoc-parser instead of phpdocumentor (#5214)
* [bd361bbed](https://github.com/api-platform/core/commit/bd361bbed77ad367e9aaf6bf82a2968627f39513) feat(doctrine): add link factory (#5345)
* [bde59ba12](https://github.com/api-platform/core/commit/bde59ba121bcf99f4207a34dd5d09da8a6b2c5cc) feat: spec-compliant PUT method (#4996)
* [c145ec700](https://github.com/api-platform/core/commit/c145ec700116be11afebff28f4d4b115cd45bb41) feat(openapi): add ApiResource::openapi and deprecate openapiContext (#5254)
* [e5f1be056](https://github.com/api-platform/core/commit/e5f1be0561efe6fd90933b381f605bff81486aac) feat: add @type property on mercure delete update (#2688)
* [f1ecc30a3](https://github.com/api-platform/core/commit/f1ecc30a38e50536a2a65ae85ef23eb6dc095af3) feat(openapi): add backed enum support (#5120)

### Backward compatibility

- only use named arguments on metadata attributes (`Get`, `Query`, `Operation`, `ApiProperty` etc.) as we don't guarantee the backward compatibility on positional arguments

## v3.0.12

### Bug fixes

* [5723d6836](https://github.com/api-platform/core/commit/5723d68369722feefeb11e42528d9580db5dd0fb) fix(serializer): reset cache key on collection items CVE-2023-25575
* [1983089d9](https://github.com/api-platform/core/commit/1983089d9c2de4bb9fc36c60929aff538af89b8e) fix(metadata): reader should be nullable (#5378)
* [80aeb3158](https://github.com/api-platform/core/commit/80aeb3158311ff4ce9ad28b7f813dedee7744828) fix(symfony): autoconfigure elasticsearch extension (#5379)

## v3.0.11

### Bug fixes

* [0154bf13c](https://github.com/api-platform/core/commit/0154bf13c3aa99b6bfe2c17c875a51e876aca43f) fix(metadata): homogenize operations constructor (#5344)
    Note: we made clear that we are supporting only named arguments on our Attributes. We do not support backward compatibility on positional arguments.
* [53cb25fab](https://github.com/api-platform/core/commit/53cb25fab0fcec2d336590c7e82e1c6a8728d00a) fix(symfony): annotation reader argument optional (#5358)
* [722802c13](https://github.com/api-platform/core/commit/722802c13200179cd9ce7b2812738471a9340f27) fix(graphql): usable YAML/XML configuration (#5333)
    Note: `paginationViaCursor` was removed from GraphQl operations as it had no behavior
* [937786efe](https://github.com/api-platform/core/commit/937786efeab77f939d67973d7b4e7bc4fd8eec17) fix(metadata): extract identifier using `Link::toProperty` (#5352)

## v3.0.10

### Bug fixes

* [ec67b3f47](https://github.com/api-platform/core/commit/ec67b3f4745e5907f6b199d07c59af946f47a35d) fix: fix argument resolver error (#5342)

## v3.0.9

### Bug fixes

* [3d8371a56](https://github.com/api-platform/core/commit/3d8371a56f12468df7b0fa8974a9babe35578b26) fix(graphql): use depth for nested resource class operation (#5314)
* [6f9289eb8](https://github.com/api-platform/core/commit/6f9289eb8795e9ae121b97122336c754cd69acc4) fix(serializer): use symfony's default serializer context (#5305)
* [af98b645f](https://github.com/api-platform/core/commit/af98b645f6063b70c5e50e489ee933acfe0ad3a5) fix: compatibility with PHP 8.2 (#5292)
* [b5734a73e](https://github.com/api-platform/core/commit/b5734a73e1f9c01db80a57ec0d6c24c7d4122bb7) fix(graphql): pass graphql enabled flag (#5315)


### Features

* [9632b6416](https://github.com/api-platform/core/commit/9632b64160272620f68db771e35712b573ccd040) feat: serialize error title from ValidationException (#5313)

## v3.0.8

### Bug fixes

* [26040444e](https://github.com/api-platform/core/commit/26040444e6199674212418127fa045e34e7f9c4a) fix(graphql): dont add graphql operations when disabled (#5265)
* [3d3c2c744](https://github.com/api-platform/core/commit/3d3c2c74452dc891d0892c851f0f730bced7759a) fix(graphql): link relations requires the property (#5169)
* [ddeda9c93](https://github.com/api-platform/core/commit/ddeda9c93a1ad7ac1da432fd7e6551ab85953cc9) fix(normalizer): normalize items in related collection with concrete class (#5261)
* [e73878570](https://github.com/api-platform/core/commit/e73878570d5b18ec7366be6c93f573a73d13b31c) fix(jsonschema): remove @id @type @context from input schema  (#5267)

## v3.0.7

### Bug fixes

* [27af3216f](https://github.com/api-platform/core/commit/27af3216f2beac654acb7881b52b3e2e29bf9078) fix(symfony): wire Symfony JsonEncoder if it exists (#5240)
* [31215c623](https://github.com/api-platform/core/commit/31215c62365c6b9095486c307d29837e53c0357a) ci: fix mongod startup (#5248)
* [55be4ca41](https://github.com/api-platform/core/commit/55be4ca41b6a97004d4be623d55bd5e7a3004b16) fix: get back return phpdoc on ProviderInterface
* [6d38cd941](https://github.com/api-platform/core/commit/6d38cd94140edd573ef9b09997204ef345360880) fix(metadata): include routePrefix in default operation name (#5203) (#5252)
* [b52161f](https://github.com/api-platform/core/commit/b52161f75cbfb8fd42b79db8b62e38747c84f089) perf(symfony): use default cache pool config in development environment (#5242)

## v3.0.6

### Bug fixes

* [d4173e7db](https://github.com/api-platform/core/commit/d4173e7dbca8e72af484c38fa0dc46a81b238fc6) fix(metadata): do not override name fixes #5235 (#5237)

## v3.0.5

### Bug fixes

* [0f891616f](https://github.com/api-platform/core/commit/0f891616f65ad7a27338dbb91ab7c773f4e7d36e) fix(metadata): route prefix in the operation name (#5208)
* [84a7e564d](https://github.com/api-platform/core/commit/84a7e564d0c3baded424ae754be00144e8179091) fix(metadata): getOperation cache matches arguments (#5215)
* [bd0b05abc](https://github.com/api-platform/core/commit/bd0b05abc0f7e563290369eb7f45d6689d9ff10b) fix(serializer): dynamic groups should not be cached (#5207)
* [ebaad51b2](https://github.com/api-platform/core/commit/ebaad51b2ce173b6c59582dcc6fb311f1f4b7fa9) fix(serializer): read groups off the root operation (#5196)

## v3.0.4

### Bug fixes

* [148442c49](https://github.com/api-platform/core/commit/148442c49b1312b3665be353def371faedb9750c) fix(metadata): item uri template with another resource (#5176)
* [2a582764a](https://github.com/api-platform/core/commit/2a582764af9a7bd2dd1d87c49c74974ef8d3a68b) fix(graphql): add filters from the nested resource metadata (#5171)
* [45b552673](https://github.com/api-platform/core/commit/45b55267371b73a98ef5282b2e08f7ad224ca666) fix(metadata): _format broken bc promise on #5080  (#5187)
* [5bc84ce36](https://github.com/api-platform/core/commit/5bc84ce36a0dafa8c63209978471a48bf1a5d0f5) fix(graphql): use default nested query operations (#5174)
* [6e2f920ec](https://github.com/api-platform/core/commit/6e2f920ecacd0460efeef11381947800c86d4d7c) fix(serializer): empty object as array with supports cache  (#5100)
* [706f66f6b](https://github.com/api-platform/core/commit/706f66f6b39d60f031dd610a8586c6e576827ce9) fix(metadata): allow input/output configuration values to be bool in yaml config (#5186)
* [b3bc4d6ac](https://github.com/api-platform/core/commit/b3bc4d6ac33f1a9756cc91c86d8cc30049ed044f) fix: use legacy iri converter for legacy resources (#5172)
* [d18813597](https://github.com/api-platform/core/commit/d18813597bae255318aafb43a5bd65bbabab14ca) fix: securityPostDenormalize not working because clone is made after denormalization (#5182)
* [dbf44470a](https://github.com/api-platform/core/commit/dbf44470aed45f8ccea0cc2cb261a28394b7685d) fix(metadata): check if elasticsearch is set to false by user through ApiResource (#5115) (#5177)
* [a52750496](https://github.com/api-platform/core/commit/a5275049663c336cd7fb4e83b62ea1d93c2cf06a) fix(metadata): allow custom Attribute to extend ApiResource (#5076) (#5175)
* [62af87485](https://github.com/api-platform/core/commit/62af8748561feb340353b581b681b82b5fdadc5f) fix(openapi): use "openapi" key to validate filter parameters (#5114)

## v3.0.3

### Bug fixes

* [176fff2cb](https://github.com/api-platform/core/commit/176fff2cb15efa01b6c898d0442a4f540d4ddeaa) fix(metadata): upgrade script keep operation name (#5109)
* [1b64ebf6a](https://github.com/api-platform/core/commit/1b64ebf6a438222ae091ec3690063d0fb1b61977) fix: upgrade command remove ApiSubresource attribute  (#5049)
* [27fcdc6b2](https://github.com/api-platform/core/commit/27fcdc6b270d1699e76c37ccda690b8a5ed8b4c9) fix(metadata): deprecate when user decorates in legacy mode (#5091)
* [310363d56](https://github.com/api-platform/core/commit/310363d56129c94cf4d51977f85486729e582fbc) fix: remove @internal annotation for Operations (#5089)
* [41bbad94e](https://github.com/api-platform/core/commit/41bbad94e93df49eb4ade0fe1307b20d9cd07102) fix: update yaml extractor test file coding standard (#5068)
* [44337ddb3](https://github.com/api-platform/core/commit/44337ddb3908d7b05ed75b75325b7941581f575b) fix(graphql): use right nested operation (#5102)
* [541b738e9](https://github.com/api-platform/core/commit/541b738e942156b711665952b50fbd4f060fcdea) fix(graphql): add clearer error message when TwigBundle is disabled but graphQL clients are enabled (#5064)
* [59826bbe9](https://github.com/api-platform/core/commit/59826bbe9e246cf839bdc0c4d0d470f54e27b453) fix: only alias if exists for opcache preload
* [7044c5a1b](https://github.com/api-platform/core/commit/7044c5a1b2895e72f0579d1e788740606f94dece) fix(doctrine): use abitrary index instead of value (#5079)
* [8250d41a3](https://github.com/api-platform/core/commit/8250d41a38913a17364d617875bb5a90f434ec48) fix(metadata): define a name on a single operation (#5090)
* [9c19fa171](https://github.com/api-platform/core/commit/9c19fa17110aac7dd39bff827091c00b42a80d4f) fix(metadata): add class key in payload argument resolver (#5067)
* [a4cd12b2a](https://github.com/api-platform/core/commit/a4cd12b2a73bc0f726c5724de790f885884e6113) fix: uri template should respect rfc 6570 (#5080)
* [bbeaf7082](https://github.com/api-platform/core/commit/bbeaf7082bba4a019206c3862425cf849d55addd) fix(graphql): always allow to query nested resources (#5112)
* [c1cb3cd2f](https://github.com/api-platform/core/commit/c1cb3cd2ff32c8b1ee694b0989efeb133fbd8438) Revert "fix(graphql): use right nested operation (#5102)" (#5111)

## 3.0.2

* Metadata: generate skolem IRI by default, use `genId: false` to disable **BC**

## 3.0.1

* Symfony: don't use ArrayAdapter cache in production #5027
* Symfony: remove `_api_exception_to_status` leftovers (#4992)
* Serializer: support empty array as object (#4999)
* Chore: compatibility with PHP 8.2 (#5024)
* Symfony: resource class directories bc break (#4982)
* Symfony: exception_status bad merge (#4981)
* Graphql: remove unused service for ItemResolverFactory (#4976)
* Chore: document missing breaking changes on the 3.0.0-beta.1

## 3.0.0

* Metadata: CRUD on subresource with experimental write support (#4932)
* Symfony: 6.1 compatibility and remove 4.4 and 5.4 support (#4851)
* Symfony: removed the $exceptionOnNoToken parameter in `ResourceAccessChecker::__construct()` (#4905)
* Symfony: use conventional service names for Doctrine state providers and processors (#4859)
* Symfony: adjust mapping paths to the SF best practices for Bundles **BC** `Resources/config/api_resources` to `config/api_resources`  (#4853)
* Symfony: `src/ApiResource/` is the recommended place for API models (#4874)
* Cache: remove guzzle from the Varnish purger (#4872)

Various cleanup in services and removal of backward compatibility layer.

## 3.0.0-rc.2

* JsonLd: correct the `api_jsonld_context` route format (#4844)
* Metadata: remove metadata_backward_compatibility_layer option (#4843)
* OpenApi: fixed required fields (in and name) within `ApiPlatform\OpenApi\Model\Parameter` **BC**

Various cleanup, removed `Core` namespace leftovers and todos.

## 3.0.0-beta.2 / 3.0.0-rc.1

* ExpressionLanguage: deprecated class `ApiPlatform\Symfony\Security\ExpressionLanguage` has been removed in favor of `Symfony\Component\Security\Core\Authorization\ExpressionLanguage`.

## 3.0.0-beta.1

Breaking changes:

* Identifiers: Allow plain identifiers is removed, use a custom normalizer if needed (#4811)
* Symfony: deprecated configuration was removed (#4811)
* DataTransformers: concept got removed, input and output classes are handled as anonymous resources (#4805)
* Doctrine: some interfaces have changed (extensions and filters), `string $operationName` got removed in favor of `ApiPlatform\Metadata\Operation $operation`. (#4779)
* Doctrine: `ContextAware` interfaces were merged with their child interfaces you can safely remove them (#4779)
* Metadata: the `Core` namespace got removed (#4805)
* Mercure: deprecation removed (#4805)
* Identifiers: using an object as identifier is supported only when this object is `Stringable`
* Serializer: `skip_null_values` now defaults to `true`
* Metadata: `Patch` is added to the automatic CRUD
* Symfony: generated route names and operation names changed, route naming can be changed directly within metadata
* Doctrine: remove `@final` annotation from filters and mark them as `final`

## v2.7.14

### Bug fixes

* [deed442e0](https://github.com/api-platform/core/commit/deed442e0fd2b2ed6446e79fc1462800bd08c1de) fix: handle item iri with identifiers in LegacyIriConverter (#5670)

## v2.7.13

### Bug fixes

* [20371ccad](https://github.com/api-platform/core/commit/20371ccadf3eeaea14c23ed693635d5d2b7cc060) fix: IriConverterInterface injection and deprecation (#5630)
* [c5f709d17](https://github.com/api-platform/core/commit/c5f709d17f9352bd6c12e272fc3660c346afd900) fix: api:upgrade-resource output formatting (#5624)

## v2.7.12

### Bug fixes

* [810e4455b](https://github.com/api-platform/core/commit/810e4455b34070c12404bc65ea0366c48d54d43d) fix(serializer): fix denormalizing to non-cloneable objects (#5569)
* [b6dc7728b](https://github.com/api-platform/core/commit/b6dc7728b68db71242e00beab4b09030254a323f) fix(symfony): update for PHPUnit 10 (#5551)

## v2.7.11

### Bug fixes

* [01ce3f811](https://github.com/api-platform/core/commit/01ce3f8110b2e3fe13077bec3fadaff653e4a512) fix(serializer): find parent class operation (#5449)

## v2.7.10

### Bug fixes

* [5723d6836](https://github.com/api-platform/core/commit/5723d68369722feefeb11e42528d9580db5dd0fb) fix(serializer): reset cache key on collection items CVE-2023-25575

## v2.7.9

### Bug fixes

* [1983089d9](https://github.com/api-platform/core/commit/1983089d9c2de4bb9fc36c60929aff538af89b8e) fix(metadata): reader should be nullable (#5378)
* [80aeb3158](https://github.com/api-platform/core/commit/80aeb3158311ff4ce9ad28b7f813dedee7744828) fix(symfony): autoconfigure elasticsearch extension (#5379)

## v2.7.8

### Bug fixes

* [b15a97d7f](https://github.com/api-platform/core/commit/b15a97d7fa65ec78934e24a30289cb499d4365e7) fix(symfony): autoconfigure elasticsearch extension (#5376)
* [cbe7355d1](https://github.com/api-platform/core/commit/cbe7355d184d75465a5e5acc51f9c4f24ab5b52c) fix(metadata): annotation reader should be nullable

## v2.7.7

### Bug fixes

* [53cb25fab](https://github.com/api-platform/core/commit/53cb25fab0fcec2d336590c7e82e1c6a8728d00a) fix(symfony): annotation reader argument optional (#5358)

## v2.7.6

### Bug fixes

* [31215c623](https://github.com/api-platform/core/commit/31215c62365c6b9095486c307d29837e53c0357a) ci: fix mongod startup (#5248)
* [444f339ae](https://github.com/api-platform/core/commit/444f339ae8c73d2b1a23a703f44adbc6f8d52305) fix: avoid unneeded use of covariance to keep compatibility with PHP < 7.4 (#5327)
* [5baea781c](https://github.com/api-platform/core/commit/5baea781cf20249032fac337728da2f5617789db) fix(metadata): fix extra properties method (#5294)
* [a6f0d9aac](https://github.com/api-platform/core/commit/a6f0d9aac5b13c13694ebfa67e2a13b4a216c329) fix(symfony): http cache wrong metadata argument
* [ab6822f77](https://github.com/api-platform/core/commit/ab6822f775ab63070adaab68ae13adc01a6e3dd7) fix: Set twig.exception_listener as service parent (#5059)
* [f22fa73f4](https://github.com/api-platform/core/commit/f22fa73f41663f2c6a2391d3c1b8623098a51a0d) fix(elasticsearch): elasticsearch BC

## v2.7.5

### Bug fixes

* [096ac119a](https://github.com/api-platform/core/commit/096ac119a5126bdc5e7877172a033d7cdaa28983) fix(metadata): keep configured uri variables (#5217)
* [2b2d468f0](https://github.com/api-platform/core/commit/2b2d468f06a63ecfa4928d5d631953acb624c181) fix(metadata): operations must inherit from resource and defaults
* [2cb3b4272](https://github.com/api-platform/core/commit/2cb3b42725105aaf34dc9d71d2c03e156acd5833) fix(serializer): use iri from $context if defined (#5201)
* [39398579e](https://github.com/api-platform/core/commit/39398579e32976b5b4b0219da98fdb35629a35ad) fix(symfony): definition when mercure is not installed (#5206)
* [e9c7e4abb](https://github.com/api-platform/core/commit/e9c7e4abb683bb830a61712a8b63b8063e015b13) fix(serializer): avoid call to legacy iri converter with non-resource class (#5219)
* [ebaad51b2](https://github.com/api-platform/core/commit/ebaad51b2ce173b6c59582dcc6fb311f1f4b7fa9) fix(serializer): read groups off the root operation (#5196)

## v2.7.4

### Bug fixes

* [706f66f6b](https://github.com/api-platform/core/commit/706f66f6b39d60f031dd610a8586c6e576827ce9) fix(metadata): allow input/output configuration values to be bool in yaml config (#5186)
* [b3bc4d6ac](https://github.com/api-platform/core/commit/b3bc4d6ac33f1a9756cc91c86d8cc30049ed044f) fix: use legacy iri converter for legacy resources (#5172)

## v2.7.3

### Bug fixes

* [176fff2cb](https://github.com/api-platform/core/commit/176fff2cb15efa01b6c898d0442a4f540d4ddeaa) fix(metadata): upgrade script keep operation name (#5109)
* [1b64ebf6a](https://github.com/api-platform/core/commit/1b64ebf6a438222ae091ec3690063d0fb1b61977) fix: upgrade command remove ApiSubresource attribute  (#5049)
* [27fcdc6b2](https://github.com/api-platform/core/commit/27fcdc6b270d1699e76c37ccda690b8a5ed8b4c9) fix(metadata): deprecate when user decorates in legacy mode (#5091)
* [310363d56](https://github.com/api-platform/core/commit/310363d56129c94cf4d51977f85486729e582fbc) fix: remove @internal annotation for Operations (#5089)
* [41bbad94e](https://github.com/api-platform/core/commit/41bbad94e93df49eb4ade0fe1307b20d9cd07102) fix: update yaml extractor test file coding standard (#5068)
* [59826bbe9](https://github.com/api-platform/core/commit/59826bbe9e246cf839bdc0c4d0d470f54e27b453) fix: only alias if exists for opcache preload
* [8250d41a3](https://github.com/api-platform/core/commit/8250d41a38913a17364d617875bb5a90f434ec48) fix(metadata): define a name on a single operation (#5090)
* [9c19fa171](https://github.com/api-platform/core/commit/9c19fa17110aac7dd39bff827091c00b42a80d4f) fix(metadata): add class key in payload argument resolver (#5067)

## 2.7.2

* Metadata: no skolem IRI by default
* Symfony: use service id as tag for lower symfony versions (processor/provider service locator)
* Symfony: fix command constants not available on lower symfony versions

## 2.7.1

* Chore: update swagger ui and javascript libraries (#5028)
* Symfony: don't use ArrayAdapter cache in production #4975 (#5025)
* Doctrine: check fetch joined queries based on all aliases (#4974)
* Metadata: fix missing `array` cast for RDF types in `ApiResource` & `ApiProperty` constructors (#5000)
* Symfony: replace FQCN service names by snake ones (#5019)
* Symfony: add missing dependency on symfony/deprecation-contracts (#5015)
* Chore: add conflict on elasticsearch >= 8.0 (#5018)
* Symfony: bc layer broken for symfony/console lower than 5.3 (#4990)
* Symfony: missing deprecations related to Ulid and Uuid normalize… (#4963)
* Metadata: do not auto-generate NotExposed operation when using custom operation classes
* Symfony: upgrade command requires phpunit (#4968)
* Symfony: upgrade command removes filters (#4970)
* Symfony: missing Elasticsearch DocumentMetadataFactoryInterface alias definition (#4962)
* Chore: drop dependency on fig/link-util (#4945)
* Metadata: resource name collection missing deprecation (#4953)
* Doctrine: ability to use ORM and ODM (#5032)

## 2.7.0

* chore: remove @experimental phpdoc (#4933)
* Metadata: do not set id when identifier is `false` (#4880)
* Metadata: automatic GET operation when none is declared (#4881)
* Metadata: exception to status on operations (#4861)
* Serializer: adds the JSON_INVALID_UTF8_IGNORE flag to JsonEncode (#4741)
* Symfony: autoconfigure legacy Doctrine extensions (#4909)
* Elasticsearch: skip metadata without ES nodes (#4913)
* Symfony: deprecated the `$exceptionOnNoToken` parameter in `ResourceAccessChecker::__construct()` (#4900)

Various cs fixes and PHPDoc to help upgrading to 3.0.

## 2.7.0-rc.2

* Symfony: the upgrade command now updates ApiFilter as well (#4845)
* Symfony: maker command to create a state Processor (#4423)

## 2.7.0-beta.5

* Serializer: ignore no-operation on SerializeListener (#4828)
* Schema: schema generation with default operation (#4818)

## 2.7.0-beta.4

* Metadata: reduce coalescing operator call (#4810)
* Api: remove dump (#4809)

## 2.7.0-beta.3

* Metadata: use the HTTP method instead of an interface for writability (#4785)
* Cache: IriConverter gets called only for resources (#4796)
* JsonApi: Use skolem IRIs (#4796)
* Metadata: Merge defaults instead of overriding (#4796)
* ApiTestCase: Fix JSON Schema assertions (#4796)
* Metadata: Cast YAML/XML values properly (#4800)
* Symfony: fix deprecations (#4795 #4801 #4802)
* Input/Output: backport serializer changes to make input/output work as resource classes without data transformers (#4804)
* GraphQl: the SerializerContextBuilder interface changes to reflect operation instead of the operation name **BC** (#4804)

## 2.7.0-beta.2

* Processor: adds `previous_data` to the context (#4776)
* Doctrine: fix filter binding (#4789)
* Cache: fix headers not being read from metadata (#4777)

## 2.7.0-beta

* Json-Ld: property metadata types and iris (#4769)
* Symfony: write listener uri variables converter (#4774)
* Metadata: extra properties operation inheritance (#4773)

**BC**

Doctrine: new interfaces for Filters and Extensions ready, switch to the `ApiPlatform\Doctrine` namespace after fixing your deprecations: (#4779)
  - `ApiPlatform\Core\Bridge\Doctrine\Orm\Extension` interfaces have an `Operation` instead of the `$operationName`, the new namespace is `ApiPlatform\Doctrine\Orm\Extension`
  - `ApiPlatform\Core\Bridge\Doctrine\MongoDbOdm\Extension` interfaces have an `Operation` instead of the `$operationName`, the new namespace is `ApiPlatform\Doctrine\Odm\Extension`

## 2.7.0-alpha.7

* Metadata: defaults deprecation (#4772)

## 2.7.0-alpha.6

* GraphQl: output creates its own type in TypeBuilder (#4766)
* Metadata: clear missing metadata cache pools (#4770)
* Metadata: property override when value is set (#4767)
* Metadata: add read and write to extractor (#4760)
* JsonSchema: factory backward compatibility layer (#4758)
* Metadata: defaults properly overrides metadata (#4759)
* Metadata: Add missing processor and provider to extractor (#4754)

## 2.7.0-alpha.5

* Backward compatibility: fix upgrade script for subresources (#4747)
* Backward compatibility: fix dependency injection (#4748)

## 2.7.0-alpha.4

* Backward compatibility: fix dependency injection (#4744)
* Metadata: allow extra keys within defaults (#4743)

## 2.7.0-alpha.3

* Implements Skolem IRIs instead of blank nodes, can be disabled using `iri: false` (#4731)
* IRI Converter: new interface declaring `getIriFromResource` and `getResourceFromIri` (#4734)

## 2.7.0-alpha.2

* Review interfaces (ProcessorInterface, ProviderInterface, TypeConverterInterface, ResolverFactoryInterface etc.) to use `ApiPlatform\Metadata\Operation` instead of `operationName` (#4712)
* Introduce `CollectionOperationInterface` instead of the `collection` flag (#4712)
* Introduce `DeleteOperationInterface` instead of the `delete` flag (#4712)
* The `compositeIdentifier` flag only lives under the `uriVariables` property (#4712)
* The `provider` or `processor` property is specified within the `Operation` and we removed the chain pattern (#4712)
* JSON Schema: fix nullable types validation using assertMatchesResourceItemJsonSchema (#4725)
* Elasticsearch: verify whether mapping type is supported (#4726)
* Deprecate Data Transformers (#4722)
* Fix missing service declaration and BC breaks (#4721 #4716 #4717 #4718)
* Hydra: add hydra view example values (#4681)

## 2.7.0-alpha.1

* Swagger UI: Add `usePkceWithAuthorizationCodeGrant` to Swagger UI initOAuth (#4649)
* **BC**: `mapping.paths` in configuration should override bundles configuration (#4465)
* GraphQL: Add the ability to use different pagination types for the queries of a resource (#4453)
* Security: **BC** Fix `ApiProperty` `security` attribute expression being passed a class string for the `object` variable on updates/creates - null is now passed instead if the object is not available (#4184)
* Security: `ApiProperty` now supports a `security_post_denormalize` attribute, which provides access to the `object` variable for the object being updated/created and `previous_object` for the object before it was updated (#4184)
* Maker: Add `make:data-provider` and `make :data-persister` commands to generate a data provider / persister (#3850)
* JSON Schema: Add support for generating property schema with numeric constraint restrictions (#4225)
* JSON Schema: Add support for generating property schema with Collection restriction (#4182)
* JSON Schema: Add support for generating property schema format for Url and Hostname (#4185)
* JSON Schema: Add support for generating property schema with Count restriction (#4186)
* JSON Schema: Manage Compound constraint when generating property metadata (#4180)
* Validator: Add an option to disable query parameter validation (#4165)
* JSON Schema: Add support for generating property schema with Choice restriction (#4162)
* JSON Schema: Add support for generating property schema with Range restriction (#4158)
* JSON Schema: Add support for generating property schema with Unique restriction (#4159)
* **BC**: Change `api_platform.listener.request.add_format` priority from 7 to 28 to execute it before firewall (priority 8) (#3599)
* **BC**: Use `@final` annotation in ORM filters (#4109)
* Allow defining `exception_to_status` per operation (#3519)
* Doctrine: Better exception to find which resource is linked to an exception (#3965)
* Doctrine: Allow mixed type value for date filter (notice if invalid) (#3870)
* Doctrine: Add `nulls_always_first` and `nulls_always_last` to `nulls_comparison` in order filter (#4103)
* Doctrine: Add a global `order_nulls_comparison` configuration (#3117)
* MongoDB: `date_immutable` support (#3940)
* DataProvider: Add `TraversablePaginator` (#3783)
* JSON:API: Support inclusion of resources from path (#3288)
* Swagger UI: Add `swagger_ui_extra_configuration` to Swagger / OpenAPI configuration (#3731)
* Allow controller argument with a name different from `$data` thanks to an argument resolver (#3263)
* GraphQL: Support `ApiProperty` security (#4143)
* GraphQL: **BC** Fix security on association collection properties. The collection resource `item_query` security is no longer used. `ApiProperty` security can now be used to secure collection (or any other) properties. (#4143)
* Deprecate `allow_plain_identifiers` option (#4167)
* Exception: Add the ability to customize multiple status codes based on the validation exception (#4017)
* ApiLoader: Support `_format` resolving (#4292)
* Metadata: new namespace `ApiPlatform\Metadata` instead of `ApiPlatform\Core\Metadata`, for example `ApiPlatform\Metadata\ApiResource` (#4351)
* Metadata: deprecation of `ApiPlatform\Core\Annotation` (#4351)
* Metadata: `ApiPlatform\Core\Metadata\Resource\Factory\ResourceMetadataFactoryInterface` is deprecated in favor of `ApiPlatform\Metadata\Resource\Factory\ResourceMetadataCollectionFactoryInterface` (#4351)
* Metadata: item and collection prefixes for operations are deprecated, as well as the `ApiPlatform\Core\Api\OperationType` class (#4351)
* Graphql: `ApiPlatform\Metadata\GraphQl` follow the same metadata conventions (a Subscription operation is available and isn't hidden behind an update Mutation anymore), interfaces got simplified (being @experimental) (#4351)
* IriConverter: new interface for `ApiPlatform\Bridge\Symfony\Routing\IriConverter` that adds an operationName, same for `ApiPlatform\Api\IdentifiersExtractor` (#4351)
* DataProvider: new `ApiPlatform\State\ProviderInterface` that replaces DataProviders (#4351)
* DataPersister: new `ApiPlatform\State\ProcessorInterface` that replaces DataPersisters (#4351)
* A new configuration is available to keep old services (IriConverter, IdentifiersExtractor and OpenApiFactory) `metadata_backward_compatibility_layer` (defaults to false) (#4351)
* Add support for `security_post_validation` attribute
* Mark the GraphQL subsystem as stable (#4500)
* feat(test): add `Client::loginUser()` (#4588)
* feat(http_cache): use symfony/http-client instead of guzzlehttp/guzzle, `ApiPlatform\Core\HttpCache\PurgerInterface` is deprecated in favor of `ApiPlatform\HttpCache\PurgerInterface`, new purger that uses PURGE (#4695)

## 2.6.9

* fix(serializer): remove 'iri' from context cache (#4925)

## 2.6.8

* fix: serializing embedded non resource objects
* chore(openapi): upgrade Swagger UI to version 4.1.3
* chore(openapi): upgrade ReDoc to version 2.0.0-rc.59
* chore(graphql): upgrade GraphiQL to version 1.5.16

## 2.6.7

* feat: compatibility with Symfony 6 (#4503, #4582, #4604, #4564)
* feat: compatibility with PHP 8.1 (#4503, #4582, #4604)
* fix: pass the child context when normalizing nested non-resource objects (#4521)

## 2.6.6

* fix(json-schema): consider `SplFileInfo` class as a binary type (#4332)
* fix(json-schema): use `collectionKeyType` for building JSON Schema (#4385)
* fix(openapi): failing recursion on api resources with "paths" key (#4325)
* fix(graphql): make sure form content type is recognized as a multipart request (#4461)
* fix(doctrine): handle inverse side of OneToOne association in Doctrine search filter (#4366)
* fix(doctrine): usage of deprecated DBAL type constants (#4399)
* fix(test): fix `REMOTE_ADDR` support in `ApiTestCase` (#4446)
* fix(docs): use `asset_package` for all assets (#4470)
* fix(docs): upgrade Swagger UI to version 3.52.3 (#4477)
* fix(docs): upgrade ReDoc to version 2.0.0-rc.56 (#4477)
* fix(docs): upgrade Swagger UI to version 2.0.0-rc.56 (#4477)

## 2.6.5

* Fix various usage of various deprecated methods
* JsonSchema: Update Hydra `@context` property possible types (#4223)
* JsonSchema: Add hydra:previous` to the `hydra:view` schema properties (#4310)
* Filter validation: Fix issue in Required filter validator with dot notation (#4221)
* OpenAPI: Fix notice/warning for `response` without `content` in the `openapi_context` (#4210)
* OpenAPI: Do not use output for request body (#4213)
* OpenAPI: Do not use JSON-lD schema for all media types (#4247) (BC note: `SchemaFactory::buildSchema()` is now immutable as it no longer modifies the passed `$schema`)
* OpenAPI: Allow setting extensionProperties with YAML schema definition (#4228)
* OpenAPI: do not throw error with non-standard HTTP verb (#4304)
* Serializer: Convert internal error to HTTP 400 in Ramsey uuid denormalization from invalid body string (#4200)
* GraphQL: Fix `FieldsBuilder` not fully unwrapping nested types before deciding if a resolver is needed (#4251)
* GraphQL: Do not use a resolver for the nested payload of a mutation or subscription (#4289)
* GraphQL: Allow search filter to use an int for its value (#4295)
* Varnish: Improve `BAN` regex performance (#4231)
* MongoDB: Fix denormalization of properties with embeds many that omit target document directive (#4315)
* MongoDB: Fix resolving proxy class in class metadata factory (#4322)
* Test: Add `withOptions()` to our HttpClient implementation (#4282)
* Metadata: Fix allow using constants in XML configuration (resource attribute) (#4321)

## 2.6.4

* OpenAPI: Using an implicit flow is now valid, changes oauth configuration default values (#4115)
* OpenAPI: Fix `response` support via the `openapi_context` (#4116)
* OpenAPI: Fix `Link->requestBody` default value (#4116)
* OpenAPI: Make sure we do not override defined parameters (#4138)
* Swagger UI: Remove Google fonts (#4112)
* Serializer: Fix denormalization of basic property-types in XML and CSV (#4145)
* Serializer: Fix denormalization of collection with one element in XML (#4154)
* JSON Schema: Manage Sequentially and AtLeastOneOf constraints when generating property metadata (#4139 and #4147)
* JSON Schema: properties regex pattern is now correctly anchored (#4176 and #4198)
* JSON Schema: Fix PropertySchemaLengthRestriction string-only (#4177)
* Doctrine: Fix purging HTTP cache for unreadable relations (#3441)
* Doctrine: Revert #3774 support for binary UUID in search filter (#4134)
* Doctrine: Fix order filter when using embedded and nulls comparison (#4151)
* Doctrine: Fix duplicated eager loading joins (#3525)
* Doctrine: Fix joinRelations with multiple associations. (#2791)
* Doctrine: Revert using `defaults.order` as `collection.order` (#4178)
* GraphQL: Partial pagination support (#3223)
* GraphQL: Manage `pagination_use_output_walkers` and `pagination_fetch_join_collection` for operations (#3311)
* GraphQL: Make sure the order of order filters is preserved if nested resources are used (#4171)
* Metadata: Sort mapping resources (#3256)
* UUID: manage Ulid in format property schema restriction (#4148)
* Symfony: Do not override Vary headers already set in the Response (#4146)
* Symfony: Make Twig dependency lazy (#4187)
* Compatibility with `psr/cache` version 2 and 3 (#4117)
* Docs: Upgrade Swagger UI to version 3.46.0
* Docs: Upgrade ReDoc to version 2.0.0-rc.51
* Docs: Upgrade GraphiQL to version 1.4.1

## 2.6.3

* Identifiers: Re-allow `POST` operations even if no identifier is defined (#4052)
* Hydra: Fix partial pagination which no longer returns the `hydra:next` property (#4015)
* Security: Use a `NullToken` when using the new authenticator manager in the resource access checker (#4067)
* Mercure: Do not use data in options when deleting (#4056)
* Doctrine: Support for foreign identifiers (#4042)
* Doctrine: Support for binary UUID in search filter (#3774, reverted in 2.6.4)
* Doctrine: Do not add join or lookup for search filter with empty value (#3703)
* Doctrine: Reduce code duplication in search filter (#3541)
* JSON Schema: Allow generating documentation when property and method start from "is" (property `isActive` and method `isActive`) (#4064)
* OpenAPI: Fix missing 422 responses in the documentation (#4086)
* OpenAPI: Fix error when schema is empty (#4051)
* OpenAPI: Do not set scheme to oauth2 when generating securitySchemes (#4073)
* OpenAPI: Fix missing `$ref` when no `type` is used in context (#4076)
* GraphQL: Fix "Resource class cannot be determined." error when a null iterable field is returned (#4092)
* Metadata: Check the output class when calculating serializer groups (#3696)

## 2.6.2

* Validation: properties regex pattern is now compliant with ECMA 262 (#4027)
* OpenApi: normalizer is now backward compatible (#4016), fix the name converter issue changing OpenApi properties (#4019)
* Identifiers: Break after transforming the identifier (#3985), use the identifiers context to transform with multiple classes (#4029)
* JsonSchema: Revert `ALLOW_EXTRA_ATTRIBUTE=false` as it is a BC break and will be done in 3.0 instead see #3881 (#4007)
* Subresource: fix ApiSubresource maxDepth option (#3986), recursive issue in the profiler (#4023)
* OpenApi: Allow `requestBody` and `parameters` via the `openapi_context` (#4001), make `openapi_context` work on subresources (#4004), sort paths (#4013)
* Config: Allow disabling OpenAPI and Swagger UI without loosing the schema (#3968 and #4018), fix pagination defaults (#4011)
* DataPersister: context propagation fix (#3983)

## 2.6.1

* Fix defaults when using attributes (#3978)

## 2.6.0

* Cache: adds a `max_header_length` configuration (#2865)
* Cache: support `stale-while-revalidate` and `stale-if-error` cache control headers (#3439)
* Config: Add an option to set global default values (#3151)
* DTO: Add `ApiPlatform\Core\DataTransformer\DataTransformerInitializerInterface` to pre-hydrate inputs (#3701)
* DTO: Improve Input/Output support (#3231)
* Data Persisters: Add `previous_data` to the context passed to persisters when available (#3752)
* Data Persister: Add a `ResumableDataPersisterInterface` that allows to call multiple persisters (#3912)
* Debug: Display API Platform's version in the debug bar (#3235)
* Docs: Make `asset_package` configurable (#3764)
* Doctrine: Allow searching on multiple values on every strategies (#3786)
* Elasticsearch: The `Paginator` class constructor now receives the denormalization context to support denormalizing documents using serialization groups. This change may cause potential **BC** breaks for existing applications as denormalization was previously done without serialization groups.
* GraphQL: **BC** New syntax for the filters' arguments to preserve the order: `order: [{foo: 'asc'}, {bar: 'desc'}]` (#3468)
* GraphQL: **BC** `operation` is now `operationName` to follow the standard (#3568)
* GraphQL: **BC** `paginationType` is now `pagination_type` (#3614)
* GraphQL: Add page-based pagination (#3175, #3517)
* GraphQL: Allow formatting GraphQL errors based on exceptions (#3063)
* GraphQL: Errors thrown from the GraphQL library can now be handled (#3632, #3643)
* GraphQL: Possibility to add a custom description for queries, mutations and subscriptions (#3477, #3514)
* GraphQL: Subscription support with Mercure (#3321)
* GraphQL: Support for field name conversion (serialized name) (#3455, #3516)
* Hydra: Sort entries in the API entrypoint (#3091)
* Identifiers: Add Symfony Uid support (#3715)
* IriConverter: **BC** Fix double encoding in IRIs - may cause breaking change as some characters no longer encoded in output (#3552)
* JSON-LD: Add an `iri_only` attribute to simplify documents structure (useful when using Vulcain) (#3275)
* Exception: Response error codes can be specified via the `ApiPlatform\Core\Exception\ErrorCodeSerializableInterface` (#2922)
* Mercure: Add a `normalization_context` option in `mercure` attribute (#3772)
* Messenger: Add a context stamp containing contextual data (#3157)
* Metadata: Deprecate `InheritedPropertyMetadataFactory` (#3273)
* Metadata: Improve and simplify identifiers management (#3825)
* Metadata: Support the Symfony Serializer's `@Ignore` annotation (#3820)
* Metadata: Support using annotations as PHP 8 attributes (#3869, #3868, #3851)
* Metadata: Throw an error when no identifier is defined (#3871)
* Metadata: Use `id` as default identifier if none provided (#3874)
* MongoDB: Mercure support (#3290)
* MongoDB: Possibility to add execute options (aggregate command fields) for a resource, like `allowDiskUse` (#3144)
* OpenAPI: Add default values of PHP properties to the documentation (#2386)
* OpenAPI: **BC** Replace all characters other than `[a-zA-Z0-9\.\-_]` to `.` in definition names to be compliant with OpenAPI 3.0 (#3669)
* OpenAPI: Refactor OpenAPI v3 support, OpenAPI v2 (aka Swagger) is deprecated (#3407)
* Order: Support default order for a specific custom operation (#3784)
* PATCH: **BC** Support patching deep objects, previously new objects were created instead of updating current objects (#3847)
* Router: UrlGenerator strategy configuration via `url_generation_strategy` (#3198)
* Routing: Add stateless `ApiResource` attribute (#3436)
* Security: Add support for access control rule on attributes (#3503)
* Subresources: `resourceClass` can now be defined as a container parameter in XML and YAML definitions
* Symfony: improved 5.x support with fewer deprecations (#3589)
* Symfony: Allow using `ItemNormalizer` without Symfony SecurityBundle (#3801)
* Symfony: Lazy load all commands (#3798)
* Tests: adds a method to retrieve the CookieJar in the test Client `getCookieJar`
* Tests: Fix the registration of the `test.api_platform.client` service when the `FrameworkBundle` bundle is registered after the `ApiPlatformBundle` bundle (#3928)
* Validator: Add the violation code to the violation properties (#3857)
* Validator: Allow customizing the validation error status code. **BC** Status code for validation errors is now 422, use `exception_to_status` to fallback to 400 if needed (#3808)
* Validator: Autoconfiguration of validation groups generator via `ApiPlatform\Core\Validator\ValidationGroupsGeneratorInterface`
* Validator: Deprecate using a validation groups generator service not implementing `ApiPlatform\Core\Bridge\Symfony\Validator\ValidationGroupsGeneratorInterface` (#3346)
* Validator: Property validation through OpenAPI (#33329)
* Validator: Query filters and parameters are validated (#1723)
* `ExceptionInterface` now extends `\Throwable` (#3217)

## 2.5.10

* Hydra: only display `hydra:next` when the item total is strictly greater than the number of items per page (#3967)

## 2.5.9

* Fix a warning when preloading the `AbstractPaginator` class (#3827)
* OpenAPI: prevent `additionalProp1` from showing in example values (#3888)
* Varnish: fix a bug when passing an empty list of tags to the purger (#3827)
* JSON Schema: mark `hydra:mapping` properties as nullable (#3877)

## 2.5.8

* PHP 8 support (#3791, #3745, #3855)
* Metadata: Fix merging null values from annotations (#3711)
* JSON-LD: Add missing `@type` from collection using output DTOs (#3699)
* Cache: Improve `PurgeHttpCacheListener` performances (#3743)
* Cache: Fix `VarnishPurger` max header length (#3843)
* Identifiers: Do not denormalize the same identifier twice (#3762)
* OpenAPI: Lazy load `SwaggerCommand` (#3802)
* OpenAPI: Use Output class name instead of the Resource short name when available (#3741)
* OpenAPI: Allow unset PathItem method (#4107)
* Router: Replace baseurl only once (#3776)
* Mercure: Publisher bug fixes (#3790, #3739)
* Serializer: Catch NotNormalizableValueException to UnexpectedValueEception with inputs (#3697)
* Doctrine: Do not add JOINs for filters without a value (#3703)
* MongoDB: Escape search terms in `RegexFilter` (#3755)
* Tests: Improve JSON Schema assertions (#3807, #3803, #3804, #3806, #3817, #3829, #3830)
* Tests: Allow passing extra options in ApiTestClient (#3486)
* Docs: Upgrade Swagger UI to version 3.37.2 (#3867)
* Docs: Upgrade ReDoc to version 2.0.0-rc.45 (#3867)
* Docs: Upgrade GraphiQL to version 15.3.0 (#3867)
* Docs: Upgrade GraphQL Playground to version 1.7.26 (#3867)

For compatibility reasons with Symfony 5.2 and PHP 8, we do not test anymore the integration with these legacy packages:
- FOSUserBundle
- NelmioApiDoc 2

## 2.5.7

* Compatibility with Symfony 5.1 (#3589 and #3688)
* Resource `Cache-Control` HTTP header can be private (#3543)
* Doctrine: Fix missing `ManagerRegistry` class (#3684)
* Doctrine: Order filter doesn't throw anymore with numeric key (#3673 and #3687)
* Doctrine: Fix ODM check change tracking deferred (#3629)
* Doctrine: Allow 2inflector version 2.0 (#3607)
* OpenAPI: Allow subresources context to be added (#3685)
* OpenAPI: Fix pagination documentation on subresources (#3678)
* Subresource: Fix query when using a custom identifier (#3529 and #3671)
* GraphQL: Fix relation types without Doctrine (#3591)
* GraphQL: Fix DTO relations (#3594)
* GraphQL: Compatibility with graphql-php version 14 (#3621 and #3654)
* Docs: Upgrade Swagger UI to version 3.32.5 (#3693)
* Docs: Upgrade ReDoc to version 2.0.0-rc.40 (#3693)
* Docs: Upgrade GraphiQL to version 1.0.3 (#3693)
* Docs: Upgrade GraphQL Playground to version 1.7.23 (#3693)

## 2.5.6

* Add support for Mercure 0.10 (#3584)
* Allow objects without properties (#3544)
* Fix Ramsey uuid denormalization (#3473)
* Revert #3331 as it breaks backwards compatibility
* Handle deprecations from Doctrine Inflector (#3564)
* JSON Schema: Missing JSON-LD context from Data Transformers (#3479)
* GraphQL: Resource with no operations should be available through relations (#3532)

## 2.5.5

* Filter: Improve the RangeFilter query in case the values are equals using the between operator (#3488)
* Pagination: Fix bug with large values (#3451)
* Doctrine: use the correct type within `setParameter` of the SearchFilter (#3331)
* Allow `\Traversable` resources (#3463)
* Hydra: `hydra:writable` => `hydra:writeable` (#3481)
* Hydra: Show `hydra:next` only when it's available (#3457)
* Swagger UI: Missing default context argument (#3443)
* Swagger UI: Fix API docs path in swagger ui (#3475)
* OpenAPI: Export with unescaped slashes (#3368)
* OpenAPI: OAuth flows fix (#3333)
* JSON Schema: Fix metadata options (#3425)
* JSON Schema: Allow decoration (#3417)
* JSON Schema: Add DateInterval type (#3351)
* JSON Schema: Correct schema generation for many types (#3402)
* Validation: Use API Platform's `ValidationException` instead of Symfony's (#3414)
* Validation: Fix a bug preventing to serialize validator's payload (#3375)
* Subresources: Improve queries when there's only one level (#3396)
* HTTP: Location header is only set on POST with a 201 or between 300 and 400 (#3497)
* GraphQL: Do not allow empty cursor values on `before` or `after` (#3360)
* Bump versions of Swagger UI, GraphiQL and GraphQL Playground (#3510)

## 2.5.4

* Add a local cache in `ResourceClassResolver::getResourceClass()`
* JSON Schema: Fix generation for non-resource class
* Doctrine: Get class metadata only when it's needed in `SearchFilter`
* GraphQL: Better detection of collection type

## 2.5.3

* Compatibility with Symfony 5
* GraphQL: Fix `hasNextPage` when `offset > itemsPerPage`

## 2.5.2

* Compatibility with Symfony 5 RC
* Compatibility with NelmioCorsBundle 2
* Fix the type of `ApiResource::$paginationPartial`
* Ensure correct return type from `AbstractItemNormalizer::normalizeRelation`

## 2.5.1

* Compatibility with Symfony 5 beta
* Fix a notice in `SerializerContextBuilder`
* Fix dashed path segment generation
* Fix support for custom filters without constructors in the `@ApiFilter` annotation
* Fix a bug that was preventing to disable Swagger/OpenAPI
* Return a `404` HTTP status code instead of `500` whe the identifier is invalid (e.g.: invalid UUID)
* Add links to the documentation in `@ApiResource` annotation's attributes to improve DX
* JSON:API: fix pagination being ignored when using the `filter` query parameter
* Elasticsearch: Allow multiple queries to be set
* OpenAPI: Do not append `body` parameter if it already exists
* OpenAPI: Fix removal of illegal characters in schema name for Amazon API Gateway
* Swagger UI: Add missing `oauth2-redirect` configuration
* Swagger UI: Allow changing the location of Swagger UI
* GraphQL: Fix an error that was occurring when `SecurityBundle` was not installed
* HTTP/2 Server Push: Push relations as `fetch`

## 2.5.0

* Fix BC-break when using short-syntax notation for `access_control`
* Fix BC-break when no item operations are declared
* GraphQL: Adding serialization group difference condition for `item_query` and `collection_query` types
* JSON Schema: Fix command

## 2.5.0 beta 3

* GraphQL: Use different types (`MyTypeItem` and `MyTypeCollection`) only if serialization groups are different for `item_query` and `collection_query` (#3083)

## 2.5.0 beta 2

* Allow to not declare GET item operation
* Add support for the Accept-Patch header
* Make the `maximum_items_per_page` attribute consistent with other attributes controlling pagination
* Allow to use a string instead of an array for serializer groups
* Test: Add a helper method to find the IRI of a resource
* Test: Add assertions for testing response against JSON Schema from API resource
* GraphQL: Add support for multipart request so user can create custom file upload mutations (#3041)
* GraphQL: Add support for name converter (#2765)

## 2.5.0 beta 1

* Add an HTTP client dedicated to functional API testing (#2608)
* Add PATCH support (#2895)
  Note: with JSON Merge Patch, responses will skip null values. As this may break on some endpoints, you need to manually [add the `merge-patch+json` format](https://api-platform.com/docs/core/content-negotiation/#configuring-patch-formats) to enable PATCH support. This will be the default behavior in API Platform 3.
* Add a command to generate json schemas `api:json-schema:generate` (#2996)
* Add infrastructure to generate a JSON Schema from a Resource `ApiPlatform\Core\JsonSchema\SchemaFactoryInterface` (#2983)
* Replaces `access_control` by `security` and adds a `security_post_denormalize` attribute (#2992)
* Add basic infrastructure for cursor-based pagination (#2532)
* Change ExistsFilter syntax to `exists[property]`, old syntax still supported see #2243, fixes its behavior on GraphQL (also related #2640).
* Pagination with subresources (#2698)
* Improve search filter id's management (#1844)
* Add support of name converter in filters (#2751, #2897), filter signature in abstract methods has changed see b42dfd198b1644904fd6a684ab2cedaf530254e3
* Ability to change the Vary header via `cacheHeaders` attributes of a resource (#2758)
* Ability to use the Query object in a paginator (#2493)
* Compatibility with Symfony 4.3 (#2784)
* Better handling of JsonSerializable classes (#2921)
* Elasticsearch: Add pagination (#2919)
* Add default, min, max specification in pagination parameter API docs (#3002)
* Add a swagger version configuration option `swagger.versions` and deprecates the `enable_swagger` configuration option (#2998)
* Order filter now documents `asc`/`desc` as enum (#2971)
* GraphQL: **BC Break** Separate `query` resource operation attribute into `item_query` and `collection_query` operations so user can use different security and serialization groups for them (#2944, #3015)
* GraphQL: Add support for custom queries and mutations (#2447)
* GraphQL: Add support for custom types (#2492)
* GraphQL: Better pagination support (backwards pagination) (#2142)
* GraphQL: Support the pagination per resource (#3035)
* GraphQL: Add the concept of *stages* in the workflow of the resolvers and add the possibility to disable them with operation attributes (#2959)
* GraphQL: Add GraphQL Playground besides GraphiQL and add the possibility to change the default IDE (or to disable it) for the GraphQL endpoint (#2956, #2961)
* GraphQL: Add a command to print the schema in SDL `api:graphql:export > schema.graphql` (#2600)
* GraphQL: Improve serialization performance by avoiding calls to the `serialize` PHP function (#2576)
* GraphQL: Allow to use a search and an exist filter on the same resource (#2243)
* GraphQL: Refactor the architecture of the whole system to allow the decoration of useful services (`TypeConverter` to manage custom types, `SerializerContextBuilder` to modify the (de)serialization context dynamically, etc.) (#2772)

Notes:

Please read #2825 if you have issues with the behavior of Readable/Writable Link

## 2.4.7

* Fix passing context to data persisters' `remove` method
* Ensure OpenAPI normalizers properly expose the date format
* Add source maps for Swagger UI
* Improve error message when filter class is not imported
* Add missing autowiring alias for `Pagination`
* Doctrine: ensure that `EntityManagerInterface` is used in data providers

## 2.4.6

* GraphQL: Use correct resource configuration for filter arguments of nested collection
* Swagger UI: compatibility with Internet Explorer 11
* Varnish: Prevent cache miss by generating IRI for child related resources
* Messenger: Unwrap exception thrown in handler for Symfony Messenger 4.3
* Fix remaining Symfony 4.3 deprecation notices
* Prevent cloning non cloneable objects in `previous_data`
* Return a 415 HTTP status code instead of a 406 one when a faulty `Content-Type` is sent
* Fix `WriteListener` trying to generate IRI for non-resources
* Allow extracting blank values from composite identifier

## 2.4.5

* Fix denormalization of a constructor argument which is a collection of non-resources
* Allow custom operations to return a different class than the expected resource class

## 2.4.4

* Store the original data in the `previous_data` request attribute, and allow to access it in security expressions using the `previous_object` variable (useful for PUT and PATCH requests)
* Fix resource inheritance handling
* Fix BC break in `AbstractItemNormalizer` introduced in 2.4
* Fix serialization when using interface as resource
* Basic compatibility with Symfony 4.3

## 2.4.3

* Doctrine: allow autowiring of filter classes
* Doctrine: don't use `fetchJoinCollection` on `Paginator` when not needed
* Doctrine: fix a BC break in `OrderFilter`
* GraphQL: input objects aren't nullable anymore (compliance with the Relay spec)
* Cache: Remove some useless purges
* Mercure: publish to Mercure using the default response format
* Mercure: use the Serializer context
* OpenAPI: fix documentation of the `PropertyFilter`
* OpenAPI: fix generation of the `servers` block (also fixes the compatibility with Postman)
* OpenAPI: skip not readable and not writable properties from the spec
* OpenAPI: add the `id` path parameter for POST item operation
* Serializer: add support for Symfony Serializer's `@SerializedName` metadata
* Metadata: `ApiResource`'s `attributes` property now defaults to `null`, as expected
* Metadata: Fix identifier support when using an interface as resource class
* Metadata: the HTTP method is now always uppercased
* Allow to disable listeners per operation (fix handling of empty request content)

    Previously, empty request content was allowed for any `POST` and `PUT` operations. This was an unsafe assumption which caused [other problems](https://github.com/api-platform/core/issues/2731).

    If you wish to allow empty request content, please add `"deserialize"=false` to the operation's attributes. For example:

    ```php
    <?php
    // api/src/Entity/Book.php

    use ApiPlatform\Core\Annotation\ApiResource;
    use App\Controller\PublishBookAction;

    /**
     * @ApiResource(
     *     itemOperations={
     *         "put_publish"={
     *             "method"="PUT",
     *             "path"="/books/{id}/publish",
     *             "controller"=PublishBookAction::class,
     *             "deserialize"=false,
     *         },
     *     },
     * )
     */
    class Book
    {
    ```

    You may also need to add `"validate"=false` if the controller result is `null` (possibly because you don't need to persist the resource).

* Return the `204` HTTP status code when the output class is set to `null`
* Be more resilient when normalizing non-resource objects
* Replace the `data` request attribute by the return of the data persister
* Fix error message in identifiers extractor
* Improve the bundle's default configuration when using `symfony/symfony` is required
* Fix the use of `MetadataAwareNameConverter` when available (configuring `name_converter: serializer.name_converter.metadata_aware` will now result in a circular reference error)

## 2.4.2

* Fix a dependency injection problem in `FilterEagerLoadingExtension`
* Improve performance by adding a `NoOpScalarNormalizer` handling scalar values

## 2.4.1

* Improve performance of the dev environment and deprecate the `api_platform.metadata_cache` parameter
* Fix a BC break in `SearchFilter`
* Don't send HTTP cache headers for unsuccessful responses
* GraphQL: parse input and messenger metadata on the GraphQl operation
* GraphQL: do not enable graphql when `webonyx/graphql-php` is not installed

## 2.4.0

* Listeners are now opt-in when not handling API Platform operations
* `DISTINCT` is not used when there are no joins
* Preserve manual join in FilterEagerLoadingExtension
* The `elasticsearch` attribute can be disabled resource-wise or per-operation
* The `messenger` attribute can now take the `input` string as a value (`messenger="input"`). This will use a default transformer so that the given `input` is directly sent to the messenger handler.
* The `messenger` attribute can be declared per-operation
* Mercure updates are now published after the Doctrine flush event instead of on `kernel.terminate`, so the Mercure and the Messenger integration can be used together
* Use Symfony's MetadataAwareNameConverter when available
* Change the extension's priorities (`<0`) for improved compatibility with Symfony's autoconfiguration feature. If you have custom extensions we recommend to use positive priorities.

| Service name                                               | Old priority | New priority | Class                                              |
|------------------------------------------------------------|------|------|---------------------------------------------------------|
| api_platform.doctrine.orm.query_extension.eager_loading (collection) |  | -8 | ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\EagerLoadingExtension |
| api_platform.doctrine.orm.query_extension.eager_loading (item) | |  -8 | ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\EagerLoadingExtension |
| api_platform.doctrine.orm.query_extension.filter | 32 | -16 | ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\FilterExtension |
| api_platform.doctrine.orm.query_extension.filter_eager_loading | |  -17 | ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\FilterEagerLoadingExtension |
| api_platform.doctrine.orm.query_extension.order | 16 | -32 | ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\OrderExtension |
| api_platform.doctrine.orm.query_extension.pagination | 8 | -64 | ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\PaginationExtension |

* Fix JSON-LD contexts when using output classes
* GraphQl: Fix pagination (the `endCursor` behavior was wrong)
* GraphQl: Improve output/input behavior
* GraphQl: Improve mutations (make the `clientMutationId` nullable and return mutation payload as an object)
* MongoDB: Fix search filter when searching by related collection id
* MongoDB: Fix numeric and range filters

## 2.4.0 beta 2

* Fix version constraints for Doctrine MongoDB ODM
* Respect `_api_respond` request attribute in the SerializeListener
* Change the normalizer's priorities (`< 0`). If you have custom normalizer we recommend to use positive priorities.

| Service name                                               | Old priority | New priority | Class                                              |
|------------------------------------------------------------|------|------|---------------------------------------------------------|
| api_platform.hydra.normalizer.constraint_violation_list   | 64 | -780 | ApiPlatform\Core\Hydra\Serializer\ConstraintViolationListNormalizer
| api_platform.jsonapi.normalizer.constraint_violation_list |  | -780 | ApiPlatform\Core\JsonApi\Serializer\ConstraintViolationListNormalizer
| api_platform.problem.normalizer.constraint_violation_list | |  -780 | ApiPlatform\Core\Problem\Serializer\ConstraintViolationListNormalizer
| api_platform.swagger.normalizer.api_gateway               | 17 | -780 | ApiPlatform\Core\Swagger\Serializer\ApiGatewayNormalizer
| api_platform.hal.normalizer.collection                    |  | -790 | ApiPlatform\Core\Hal\Serializer\CollectionNormalizer
| api_platform.hydra.normalizer.collection_filters          | 0 | -790 | ApiPlatform\Core\Hydra\Serializer\CollectionFiltersNormalizer
| api_platform.jsonapi.normalizer.collection                |  | -790 | ApiPlatform\Core\JsonApi\Serializer\CollectionNormalizer
| api_platform.jsonapi.normalizer.error                     |  | -790 | ApiPlatform\Core\JsonApi\Serializer\ErrorNormalizer
| api_platform.hal.normalizer.entrypoint                    |  | -800 | ApiPlatform\Core\Hal\Serializer\EntrypointNormalizer
| api_platform.hydra.normalizer.documentation               | 32 | -800 | ApiPlatform\Core\Hydra\Serializer\DocumentationNormalizer
| api_platform.hydra.normalizer.entrypoint                  | 32 | -800 | ApiPlatform\Core\Hydra\Serializer\EntrypointNormalizer
| api_platform.hydra.normalizer.error                       | 32 | -800 | ApiPlatform\Core\Hydra\Serializer\ErrorNormalizer
| api_platform.jsonapi.normalizer.entrypoint                |  | -800 | ApiPlatform\Core\JsonApi\Serializer\EntrypointNormalizer
| api_platform.problem.normalizer.error                     |  | -810 | ApiPlatform\Core\Problem\Serializer\ErrorNormalizer
| serializer.normalizer.json_serializable                   | -900 | -900 | Symfony\Component\Serializer\Normalizer\JsonSerializableNormalizer
| serializer.normalizer.datetime                            | -910 | -910 | Symfony\Component\Serializer\Normalizer\DateTimeNormalizer
| serializer.normalizer.constraint_violation_list           |  | -915 | Symfony\Component\Serializer\Normalizer\ConstraintViolationListNormalizer
| serializer.normalizer.dateinterval                        | -915 | -915 | Symfony\Component\Serializer\Normalizer\DateIntervalNormalizer
| serializer.normalizer.data_uri                            | -920 | -920 | Symfony\Component\Serializer\Normalizer\DataUriNormalizer
| api_platform.graphql.normalizer.item                      | 8 | -922 | ApiPlatform\Core\GraphQl\Serializer\ItemNormalizer
| api_platform.hal.normalizer.item                          |  | -922 | ApiPlatform\Core\Hal\Serializer\ItemNormalizer
| api_platform.jsonapi.normalizer.item                      |  | -922 | ApiPlatform\Core\JsonApi\Serializer\ItemNormalizer
| api_platform.jsonld.normalizer.item                       | 8 | -922 | ApiPlatform\Core\JsonLd\Serializer\ItemNormalizer
| api_platform.serializer.normalizer.item                   | 0 | -923 | ApiPlatform\Core\Serializer\ItemNormalizer
| serializer.normalizer.object                              | -1000 | -1000 | Symfony\Component\Serializer\Normalizer\ObjectNormalizer

* Allow custom stylesheets to be appended or replaced in the swagger UI
* Load messenger only if available
* Fix missing metadata cache pool for Elasticsearch
* Make use of the new AdvancedNameConverterInterface interface for name converters
* Refactor input/output attributes, where these attributes now take:
  - an array specifying a class and some specific attributes (`name` and `iri` if needed)
  - a string representing the class
  - a `falsy` boolean to disable the input/output
* Introduce the DataTransformer concept to transform an input/output from/to a resource
* Api Platform normalizer is not limited to Resources anymore (you can use DTO as relations and more...)
* MongoDB: allow a `0` limit in the pagination
* Fix support of a discriminator mapping in an entity

## 2.4.0 beta 1

* MongoDB: full support
* Elasticsearch: add reading support (including pagination, sort filter and term filter)
* Mercure: automatically push updates to clients using the [Mercure](https://mercure.rocks) protocol
* CQRS support and async message handling using the Symfony Messenger Component
* OpenAPI: add support for OpenAPI v3 in addition to OpenAPI v2
* OpenAPI: support generating documentation using [ReDoc](https://github.com/Rebilly/ReDoc)
* OpenAPI: basic hypermedia hints using OpenAPI v3 links
* OpenAPI: expose the pagination controls
* Allow using custom classes for input and output (DTO) with the `input_class` and `output_class` attributes
* Allow disabling the input or the output by setting `input_class` and `output_class` to false
* Guess and automatically set the appropriate Schema.org IRIs for common validation constraints
* Allow setting custom cache HTTP headers using the `cache_headers` attribute
* Allow setting the HTTP status code to send to the client through the `status` attribute
* Add support for the `Sunset` HTTP header using the `sunset` attribute
* Set the `Content-Location` and `Location` headers when appropriate for better RFC7231 conformance
* Display the matching data provider and data persister in the debug panel
* GraphQL: improve performance by lazy loading types
* Add the `api_persist` request attribute to enable or disable the `WriteListener`
* Allow setting a default context in all normalizers
* Permit using a string instead of an array when there is only one serialization group
* Add support for setting relations using the constructor of the resource classes
* Automatically set a [409 Conflict](https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/409) HTTP status code when an `OptimisticLockException` is thrown
* Resolve Dependency Injection Container parameters in the XML and YAML files for the resource class configuration
* `RequestAttributesExtractor` is not internal anymore and can be used in userland code
* Always use the user-defined metadata when set
* OpenAPI: add a description explaining how to use the property filter
* GraphQL: the look'n'feel of GraphiQL now match the API Platform one
* PHPStan level 6 compliance
* Add a `show_webby` configuration option to hide the spider in API docs
* Add an easter egg (find it!)

## 2.3.6

* /!\ Security: a vulnerability impacting the GraphQL subsystem was allowing users authorized to run mutations for a specific resource type, to execute it on any resource, of any type (CVE-2019-1000011)
* Fix normalization of raw collections (not API resources)
* Fix content negotiation format matching

## 2.3.5

* GraphQL: compatibility with `webonyx/graphql-php` 0.13
* OpenAPI/Swagger: expose `properties[]` as a collection parameter
* OpenAPI/Swagger: add a description for the `properties[]` filter
* OpenAPI/Swagger: Leverage advanced name converters
* JSON-LD: Prevent an error in `ItemNormalizer` when `$context['resource_class']` is not defined
* Allow to pass the serialization group to use a string instead of as an array of one element
* Modernize the code base to use PHP 7.1 features when possible
* Bump minimal dependencies of the used Symfony components
* Improve the Packagist description

## 2.3.4

* Open API/Swagger: fix YAML export
* Open API/Swagger: Correctly expose overridden formats
* GraphQL: display the stack trace when in debug mode
* GraphQL: prevent a crash when the class name isn't provided
* Fix handling of one-to-one relations in subresources
* Fix max depth handling when eager fetching is disabled
* Compatibility with Symfony 4.2
* Prevent calling the remove method from all data persisters
* Persist Doctrine entities with the `DEFERRED_EXPLICIT` change tracking policy
* Throw an `InvalidArgumentException` when trying to get an item from a collection route
* Improve the debug bar panel visibility
* Take into account the `route_prefix` attribute in subresources
* Allow using multiple values with `NumericFilter`
* Improve exception handling in `ReadListener` by adding the previous exception

## 2.3.3

* Doctrine: revert "prevent data duplication in Eager loaded relations"

## 2.3.2

* Open API/Swagger: detect correctly collection parameters
* Open API/Swagger: fix serialization of nested objects when exporting as YAML
* GraphQL: fix support of properties also mapped as subresources
* GraphQL: fix retrieving the internal `_id` when `id` is not part of the requested fields
* GraphQL: only exposes the mutations if any
* Doctrine: prevent data duplication in Eager loaded relations
* Preserve the host in the internal router

## 2.3.1

* Data persisters: call only the 1st matching data persister, this fix may break existing code, see https://github.com/api-platform/docs/issues/540#issuecomment-405945358
* Subresources: fix inverse side population
* Subresources: add subresources collections to cache tags
* Subresources: fix Doctrine identifier parameter type detection
* Subresources: fix max depth handling
* GraphQL: send a 200 HTTP status code when a GraphQL response contain some errors
* GraphQL: fix filters to allow dealing with multiple values
* GraphQL: remove invalid and useless parameters from the GraphQL schema
* GraphQL: use the collection resolver in mutations
* JSON API: remove duplicate data from includes
* Filters: fix composite keys support
* Filters: fix the `OrderFilter` when applied on nested entities
* List Doctrine Inflector as a hard dependency
* Various quality and usability improvements

## 2.3.0

* Add support for deprecating resources, operations and fields in GraphQL, Hydra and Swagger
* Add API Platform panels in the Symfony profiler and in the web debug toolbar
* Make resource class's constructor parameters writable
* Add support for interfaces as resources
* Add a shortcut syntax to define attributes at the root of `@ApiResource` and `@ApiProperty` annotations
* Throw an exception if a required filter isn't set
* Allow to specify the message when access is denied using the `access_control_message` attribute
* Add a new option to include null results when using the date filter
* Allow data persisters to return a new instance instead of mutating the existing one
* Add a new attribute to configure specific formats per resources or operations
* Add an `--output` option to the `api:swagger:export` command
* Implement the `CacheableSupportsMethodInterface` introduced in Symfony 4.1 in all (de)normalizers (improves the performance dramatically)
* Drop support for PHP 7.0
* Upgrade Swagger UI and GraphiQL
* GraphQL: Add a `totalCount` field in GraphQL paginated collections
* JSONAPI: Allow inclusion of related resources

## 2.2.10

* /!\ Security: a vulnerability impacting the GraphQL subsystem was allowing users authorized to run mutations for a specific resource type, to execute it on any resource, of any type (CVE-2019-1000011)

## 2.2.9

* Fix `ExistsFilter` for inverse side of OneToOne association
* Fix to not populate subresource inverse side
* Improve the overall code quality (PHPStan analysis)

## 2.2.8

* Fix support for max depth when using subresources
* Fix a fatal error when a subresource type is not defined
* Add support for group sequences in the validator configuration
* Add a local class metadata cache in the HAL normalizer
* `FilterEagerLoadingExtension` now accepts joins with class name as join value

## 2.2.7

* Compatibility with Symfony 4.1
* Compatibility with webonyx/graphql-php 0.12
* Add missing `ApiPlatform\Core\EventListener\EventPriorities`'s `PRE_SERIALIZE` and `POST_SERIALIZE` constants
* Disable eager loading when no groups are specified to avoid recursive joins
* Fix embeddable entities eager loading with groups
* Don't join the same association twice when eager loading
* Fix max depth handling when using HAL
* Check the value of `enable_max_depth` if defined
* Minor performance and quality improvements

## 2.2.6

* Fix identifiers creation and update when using GraphQL
* Fix nested properties support when using filters with GraphQL
* Fix a bug preventing the `ExistFilter` to work properly with GraphQL
* Fix a bug preventing to use a custom denormalization context when using GraphQL
* Enforce the compliance with the JSONAPI spec by throwing a 400 error when using the "inclusion of related resources" feature
* Update `ChainSubresourceDataProvider` to take into account `RestrictedDataProviderInterface`
* Fix the cached identifiers extractor support for stringable identifiers
* Allow a `POST` request to have an empty body
* Fix a crash when the ExpressionLanguage component isn't installed
* Enable item route on collection's subresources
* Fix an issue with subresource filters, was incorrectly adding filters for the parent instead of the subresource
* Throw when a subresources identifier is not found
* Allow subresource items in the `IriConverter`
* Don't send the `Link` HTTP header pointing to the Hydra documentation if docs are disabled
* Fix relations denormalization with plain identifiers
* Prevent the `OrderFilter` to trigger faulty deprecation notices
* Respect the `fetchEager=false` directive on an association in the `EagerLoadingExtension`
* Use the configured name converter (if any) for relations in the HAL's `ItemNormalizer`
* Use the configured name converter (if any) in the `ConstraintViolationListNormalizer`
* Dramatically improve the overall performance by fixing the normalizer's cache key generation
* Improve the performance `CachedRouteNameResolver` and `CachedSubresourceOperationFactory` by adding a local memory cache layer
* Improve the performance of access control checking when using GraphQL
* Improve the performance by using `isResourceClass` when possible
* Remove a useless `try/catch` in the `CachedTrait`
* Forward the operation name to the `IriConverter`
* Fix some more code quality issues

## 2.2.5

* Fix various issues preventing the metadata cache to work properly (performance fix)
* Fix a cache corruption issue when using subresources
* Fix non-standard outputs when using the HAL format
* Persist data in Doctrine DataPersister only if needed
* Fix identifiers handling in GraphQL mutations
* Fix client-side ID creation or update when using GraphQL mutations
* Fix an error that was occurring when the Expression Language component wasn't installed
* Update the `ChainSubresourceDataProvider` class to take into account `RestrictedDataProviderInterface`

## 2.2.4

* Fix a BC break preventing to pass non-arrays to the builtin Symfony normalizers when using custom normalizers
* Fix a bug when using `FilterEagerLoadingExtension` with manual joins
* Fix some bugs in the AWS API Gateway compatibility mode for Open API/Swagger

## 2.2.3

* Fix object state inconsistency after persistence
* Allow using multiple `@ApiFilter` annotations on the same class
* Fix a BC break when the serialization context builder depends of the retrieved data
* Fix a bug regarding collections handling in the GraphQL endpoint

## 2.2.2

* Autoregister classes implementing `SubresourceDataProviderInterface`
* Fix the `DateTimeImmutable` support in the date filter
* Fix a BC break in `DocumentationAction` impacting NelmioApiDoc
* Fix the context passed to data providers (improve the eager loading)
* Fix fix a subresource's metadata cache bug
* Fix the configuration detection when using a custom directory structure

## 2.2.1

* Merge bug fixes from older branches

## 2.2.0

* Add GraphQL support (including mutations, pagination, filters, access control rules and automatic SQL joins)
* Fully implement the GraphQL Relay Server specification
* Add JSONAPI support
* Add a new `@ApiFilter` annotation to directly configure filters from resource classes
* Add a partial paginator that prevents `COUNT()` SQL queries
* Add a new simplified way to configure operations
* Add an option to serialize Validator's payloads (e.g. error levels)
* Add support for generators in data providers
* Add a new `allow_plain_identifiers` option to allow using plain IDs as identifier instead of IRIs
* Add support for resource names without namespace
* Automatically enable FOSUser support if the bundle is installed
* Add an `AbstractCollectionNormalizer` to help supporting custom formats
* Deprecate NelmioApiDocBundle 2 support (upgrade to v3, it has native API Platform support)
* Deprecate the `ApiPlatform\Core\Bridge\Doctrine\EventListener\WriteListener` class in favor of the new `ApiPlatform\Core\EventListener\WriteListener` class.
* Remove the `api_platform.doctrine.listener.view.write` event listener service.
* Add a data persistence layer with a new `ApiPlatform\Core\DataPersister\DataPersisterInterface` interface.
* Add a new configuration to disable the API entrypoint and the documentation
* Allow setting maximum items per page at operation/resource level
* Add the ability to customize the message when configuring an access control rule trough the `access_control_message` attribute
* Allow empty operations in XML configs

## 2.1.6

* Add a new config option to specify the directories containing resource classes
* Fix a bug regarding the ordering filter when dealing with embedded fields
* Allow to autowire the router
* Fix the base path handling the Swagger/Open API documentation normalizer

## 2.1.5

* Add support for filters autoconfiguration with Symfony 3.4+
* Add service aliases required to use the autowiring with Symfony 3.4+
* Allow updating nested resource when issuing a `POST` HTTP request
* Add support for the immutable date and time types introduced in Doctrine
* Fix the Doctrine query generated to retrieve nested subresources
* Fix several bugs in the automatic eager loading support
* Fix a bug occurring when passing neither an IRI, nor an array in an embedded relation
* Allow requesting `0` items per page in collections
* Copy the `Host` from the Symfony Router
* `Paginator::getLastPage()` now always returns a `float`
* Minor performance improvements
* Minor quality fixes

## 2.1.4

* Symfony 3.4 and 4.0 compatibility
* Autowiring strict mode compatibility
* Fix a bug preventing to create resource classes in the global namespace
* Fix Doctrine type conversion in filters WHERE clauses
* Fix filters when using eager loading and non-association composite identifier
* Fix Doctrine type resolution for identifiers (for custom DBALType)
* Add missing Symfony Routing options to operations configuration
* Add SubresourceOperations to metadata
* Fix disabling of cache pools with the dev environment

## 2.1.3

* Don't use dynamic values in Varnish-related service keys (improves Symfony 3.3 compatibility)
* Hydra: Fix the value of `owl:allValuesFrom` in the API documentation
* Swagger: Include the context even when the type is `null`
* Minor code and PHPDoc cleanups

## 2.1.2

* PHP 7.2 compatibility
* Symfony 4 compatibility
* Fix the Swagger UI documentation for specific routes (the API request wasn't executed automatically anymore)
* Add a missing cache tag on empty collections
* Fix a missing service when no Varnish URL is defined
* Fix the whitelist comparison in the property filer
* Fix some bugs regarding subresources in the Swagger and Hydra normalizers
* Make route requirements configurable
* Make possible to configure the Swagger context for properties
* Better exception messages when there is a content negotiation error
* Use the `PriorityTaggedServiceTrait` provided by Symfony instead of a custom implementation
* Test upstream libs deprecations
* Various quality fixes and tests cleanup

## 2.1.1

* Fix path generators
* Fix some method signatures related to subresources
* Improve performance of the deserialization mechanism

## 2.1.0

* Add a builtin HTTP cache invalidation system able to store all requests in Varnish (or any other proxy supporting cache tags) and purge it instantly when needed
* Add an authorization system configurable directly from the resource class
* Add support for subresources (like `/posts/1/comments` or `/posts/1/comments/2`
* Revamp the automatic documentation UI (upgraded to the React-based version of Swagger UI, added a custom stylesheet)
* Add a new filter to select explicitly which properties to serialize
* Add a new filter to choose which serialization group to apply
* Add a new filter to test if a property value exists or not
* Add support for OAuth 2 in the UI
* Add support for embedded fields
* Add support for customizable API resources folder's name
* Filters's ids now defaults to the Symfony's service name
* Add configuration option to define custom metadata loader paths
* Make Swagger UI compatible with a strict CSP environment
* Add nulls comparison to OrderFilter
* Add a flag to disable all request listeners
* Add a default order option in the configuration
* Allow to disable all operations using the XML configuration format and deprecate the previous format
* Allow upper-cased property names
* Improve the overall performance by optimizing `RequestAttributesExtractor`
* Improve the performance of the filter subsystem by using a PSR-11 service locator and deprecate the `FilterCollection` class
* Add compatibility with Symfony Flex and Symfony 4
* Allow the Symfony Dependency Injection component to autoconfigure data providers and query extensions
* Allow to use service for dynamic validation groups
* Allow using PHP constants in YAML resources files
* Upgrade to the latest version of the Hydra spec
* Add `pagination` and `itemPerPage` parameters in the Swagger/Open API documentation
* Add support for API key authentication in Swagger UI
* Allow to specify a whitelist of serialization groups
* Allow to use the new immutable date and time types of Doctrine in filters
* Update swagger definition keys to more verbose ones (ie `Resource-md5($groups)` => `Resource-groupa_groupb`) - see https://github.com/api-platform/core/pull/1207

## 2.0.11

* Ensure PHP 7.2 compatibility
* Fix some bug regarding Doctrine joins
* Let the `hydra_context` option take precedence over operation metadata
* Fix relations handling by the non-hypermedia `ItemNormalizer` (raw JSON, XML)
* Fix a bug in the JSON-LD context: should not be prefixed by `#`
* Fix a bug regarding serialization groups in Hydra docs

## 2.0.10

* Performance improvement
* Swagger: Allow non-numeric IDs (such as UUIDs) in URLs
* Fix a bug when a composite identifier is missing
* `ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\OrderFilter::extractProperties` now always return an array
* Fix NelmioApiDocParser recursive relations

## 2.0.9

* Add support for Symfony 3.3
* Disable the partial eager loading by default
* Fix support for ignored attributes in normalizers
* Specify the `LEFT JOIN` clause for filter associations
* Move the metadata from validator factory to the validator.xml file
* Throw an exception when the number of items per page is 0
* Improve the Continuous Integration process

## 2.0.8

* Leverage serialization groups to eager load data
* Fix the Swagger Normalizer to correctly support nested serialization groups
* Use strict types
* Get rid of the dependency to the Templating component
* Explicitly add missing dependency to PropertyAccess component
* Allow the operation name to be null in ResourceMetadata
* Fix an undefined index error occurring in some cases when using sub types
* Make the bundle working even when soft dependencies aren't installed
* Fix serialization of multiple inheritance child types
* Fix the priority of the FOSUSer's event listener
* Fix the resource class resolver with using `\Traversable` values
* Fix inheritance of property metadata for the Doctrine ORM property metadata factory
* EagerLoadingExtension: Disable partial fetching if entity has subclasses
* Refactoring and cleanup of the eager loading mechanism
* Fix the handling of composite identifiers
* Fix HAL normalizer when the context isn't serializable
* Fix some quality problems found by PHPStan

## 2.0.7

* [security] Hide error's message in prod mode when a 500 error occurs (Api Problem format)
* Fix sorting when eager loading is used
* Allow eager loading when using composite identifiers
* Don't use automatic eager loading when disabled in the config
* Use `declare(strict_types=1)` and improve coding standards
* Automatically refresh routes in dev mode when a resource is created or deleted

## 2.0.6

* Correct the XML Schema type generated for floats in the Hydra documentation

## 2.0.5

* Fix a bug when multiple filters are applied

## 2.0.4

* [security] Hide error's message in prod mode when a 500 error occurs
* Prevent duplicate data validation
* Fix filter Eager Loading
* Fix the Hydra documentation for `ConstraintViolationList`
* Fix some edge cases with the automatic configuration of Symfony
* Remove calls to `each()` (deprecated since PHP 7.2)
* Add a missing property in `EagerLoadingExtension`

## 2.0.3

* Fix a bug when handling invalid IRIs
* Allow to have a property called id even in JSON-LD
* Exclude static methods from AnnotationPropertyNameCollectionFactory
* Improve compatibility with Symfony 2.8

## 2.0.2

* Fix the support of the Symfony's serializer @MaxDepth annotation
* Fix property range of relations in the Hydra doc when an IRI is used
* Fix an error "api:swagger:export" command when decorating the Swagger normalizer
* Fix an error in the Swagger documentation generator when a property has several serialization groups

## 2.0.1

* Various fixes related to automatic eager loading
* Symfony 3.2 compatibility

## 2.0.0

* Full refactoring
* Use PHP 7
* Add support for content negotiation
* Add Swagger/OpenAPI support
* Integrate Swagger UI
* Add HAL support
* Add API Problem support
* Update the Hydra support to be in sync with the last version of the spec
* Full rewrite of the metadata system (annotations, YAML and XML formats support)
* Remove the event system in favor of the builtin Symfony kernel's events
* Use the ADR pattern
* Fix a ton of issues
* `ItemDataproviderInterface`: `fetchData` is now in the context parameterer. `getItemFromIri` is now context aware [7f82fd7](https://github.com/api-platform/core/commit/7f82fd7f96bbb855599de275ffe940c63156fc5d)
* Constants for event's priorities [2e7b73e](https://github.com/api-platform/core/commit/2e7b73e19ccbeeb8387fa7c4f2282984d4326c1f)
* Properties mapping with XML/YAML is now possible [ef5d037](https://github.com/api-platform/core/commit/ef5d03741523e35bcecc48decbb92cd7b310a779)
* Ability to configure and match exceptions with an HTTP status code [e9c1863](https://github.com/api-platform/core/commit/e9c1863164394607f262d975e0f00d51a2ac5a72)
* Various fixes and improvements (SwaggerUI, filters, stricter property metadata)

## 1.1.1

* Fix a case typo in a namespace alias in the Hydra documentation

## 1.1.0 beta 2

* Allow to configure the default controller to use
* Ability to add route requirements
* Add a range filter
* Search filter: add a case sensitivity setting
* Search filter: fix the behavior of the search filter when 0 is provided as value
* Search filter: allow using identifiers different from id
* Exclude tests from classmap
* Fix some deprecations and tests

## 1.1.0 beta 1

* Support Symfony 3.0
* Support nested properties in Doctrine filters
* Add new `start` and `word_start` strategies to the Doctrine Search filter
* Add support for abstract resources
* Add a new option to totally disable Doctrine
* Remove the ID attribute from the Hydra documentation when it is read only
* Add method to avoid naming collision of DQL join alias and bound parameter name
* Make exception available in the Symfony Debug Toolbar
* Improve the Doctrine Paginator performance in some cases
* Enhance HTTPS support and fix some bugs in the router
* Fix some edge cases in the date and time normalizer
* Propagate denormalization groups through relations
* Run tests against all supported Symfony versions
* Add a contribution documentation
* Refactor tests
* Check CS with StyleCI

## 1.0.1

* Avoid an error if the attribute isn't an array

## 1.0.0

* Extract the documentation in a separate repository
* Add support for eager loading in collections

## 1.0.0 beta 3

* The Hydra documentation URL is now `/apidoc` (was `/vocab`)
* Exceptions implements `Dunglas\ApiBundle\Exception\ExceptionInterface`
* Prefix automatically generated route names by `api_`
* Automatic detection of the method of the entity class returning the identifier when using Doctrine (previously `getId()` was always used)
* New extension point in `Dunglas\ApiBundle\Doctrine\Orm\DataProvider` allowing to customize Doctrine paginator and performance optimization when using typical queries
* New `Dunglas\ApiBundle\JsonLd\Event\Events::CONTEXT_BUILDER` event allowing to modify the JSON-LD context
* Change HTTP status code from `202` to `200` for `PUT` requests
* Ability to embed the JSON-LD context instead of embedding it

## 1.0.0 beta 2

* Preserve indexes when normalizing and denormalizing associative arrays
* Allow setting default order for property when registering a `Doctrine\Orm\Filter\OrderFilter` instance
