<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="dist/styles/output.css?v=<?= uniqid(); ?>" rel="stylesheet">
    </head>
    <body>
        <main>
            <section id="line-container" class="fixed right-0 top-0 bottom-0 w-[566px] grid items-center justify-center after:">
                <div class="absolute h-[calc(50vh-280px)] bottom-0 w-[2px] bg-blue-700 left-1/2"></div>
                <div class="absolute h-[calc(50vh-280px)] top-0 w-[2px] bg-blue-700 left-1/2"></div>
                <svg height="566" width="326" xmlns="http://www.w3.org/2000/svg">
                    <path id="line" d="M 163 0 L 163 566" style="stroke:green;stroke-width:2;fill:none" />
                    <path id="curve" class="hidden" d="m134.514591 616.693701v-192.098921c-8.324702-15.01695-12.487053-28.048153-12.487053-39.093611s4.162351-23.799172 12.487053-38.261141c13.116481-14.401508 26.342604-21.602263 39.67837-21.602263s19.758646 6.204949 19.268639 18.614845c-.46113 4.830583-3.157972 8.168135-8.090527 10.012654-7.398833 2.766779-17.967654-3.342063-27.613479-7.025236s-26.830437-13.333059-30.257594-13.333059-32.8559929-8.889157-43.3221056-5.708173c-10.4661127 3.180983-26.1260271 6.454012-28.6044871 13.869088s-10.4390405 21.70649 4.3599779 30.550978c9.8660123 5.896325 25.002982 8.192048 45.4109088 6.887168 18.861203-5.431586 30.108348-11.183526 33.741438-17.255821 5.449634-9.108441 7.515242-27.194025 3.580298-30.877198-2.623296-2.455449-10.335715-7.059076-23.137256-13.810883-7.860865-4.150168-13.433677-9.549719-16.718438-16.198651-4.9271401-9.973399-11.6505211-34.09473 2.533958-51.407402 14.18448-17.312672 36.839851-20.082158 49.467679-20.082158s23.129134-.024365 38.649627 15.470409c10.346995 10.329849 14.217417 24.418673 11.611267 42.266473-8.767784 15.87965-18.167252 23.819476-28.198404 23.819476-15.046729 0-21.403282-2.9991-24.515232-4.930275-2.074632-1.28745-8.812903-10.074041-20.214812-26.359775l-20.553214-26.199122c-12.975706-12.219489-27.2698279-19.555153-42.882366-22.006992s-31.1835654.262149-46.713082 8.141965c-16.70264538 14.91588-22.93240993 31.40285-18.6892937 49.46091s19.8998722 32.848054 46.970268 44.369983c23.8767784 5.272762 41.3879802 6.894387 52.5336047 4.864874 11.145625-2.029512 25.282277-7.846877 42.409956-17.452094 9.668385-9.043919 16.858311-17.757107 21.569776-26.139563s8.07293-22.128817 10.084395-41.239083c-4.390209-32.122971-15.79302-52.623846-34.208433-61.502625-27.62312-13.318169-41.95785-8.801173-44.1398693-8.801173-2.1820194 0-33.2960995 8.496611-42.9527534 24.811672-6.4377693 10.876708-9.0551999 23.175158-7.8522918 36.895349 5.4595605 11.816113 16.7437049 18.98438 33.8524332 21.504802 17.1087284 2.520422 35.3693793 4.903678 54.7819513 7.149768 38.827853 8.464291 64.111483 19.297992 75.850892 32.501104 11.739408 13.203112 14.683961 28.489121 8.833659 45.858027-15.915747 16.107057-28.840016 26.040299-38.772806 29.799725s-24.326628 7.756637-43.181513 11.991631c-39.8241099 1.826471-67.6615513-.450752-83.5123247-6.83167-23.7761601-9.571376-35.0652678-23.509498-41.5111587-37.095682-4.29726065-9.057456-4.29726065-19.94409 0-32.659903 8.292215-17.616783 21.1050363-31.048656 38.4384639-40.295617s42.3331901-15.721278 74.9992875-19.42295c23.376967 1.006183 41.632716 7.4805 54.767245 19.42295s17.713792 28.066202 13.737788 48.371254c-4.747561 24.406492-15.692852 40.903839-32.835872 49.492044-25.71453 12.882306-31.805591 15.138774-33.737376 15.138774s-33.4003276 4.767415-55.0404911 0c-21.6401635-4.767414-40.5446812-12.478862-56.2858122 0-10.49408731 8.319242-13.61551203 18.011541-9.36427414 29.076897 6.57222784 17.436302 21.15872954 26.154453 43.75950494 26.154453 22.6007755 0 51.4624485-12.42614 86.5850195-37.27842 18.165446-18.737572 26.193256-35.256578 24.083429-49.557017-2.109827-14.300438-16.656622-26.135051-43.640387-35.503837-32.8006783-2.178694-55.8846925-7.732247-69.2520427-16.660659-13.3673503-8.928412-21.2873225-23.180881-23.7599169-42.757407 3.7043795-27.774273 17.7683877-44.234622 42.1920246-49.381047 24.4236369-5.146426 53.124682-2.450937 86.103134 8.086466 27.623571 13.769824 42.106747 32.042657 43.449528 54.818499 2.014172 34.163764-26.121966 56.640458-28.7967 56.640458-2.674733 0-57.118282 3.052391-59.661715-32.543492-1.695622-23.730589 1.546274-39.538047 9.725688-47.422374 9.990544-5.738404 14.985817-20.902446 14.985817-45.492126s0-93.790285 0-207.60181612" fill="none" stroke="#000" stroke-width="4"/>
                    <path id="curve-2" class="hidden" d="m158.5 565 3.125-182.134766c-12.342448-13.993489-24.176432-20.990234-35.501953-20.990234s-20.89974 1.940104-28.7226564 5.820313c-6.3085937 4.66276-9.4628906 9.719401-9.4628906 15.169921 0 8.175782 3.4980469 34.121094 27.683594 12.847657 16.123698-14.182292 25.957682-28.448568 29.501953-42.798828 6.960937-10.08073 18.702474-17.109375 35.224609-21.085938 16.522136-3.976562 33.401042 6.039063 50.636719 30.046875 4.106771 22.558594-3.451172 35.883464-22.673828 39.974609-19.222656 4.091146-31.304688-4.704427-36.246094-26.386718-3.563802-27.591146 1.858724-48.623047 16.267578-63.095703 14.408854-14.472657 31.746094-19.957032 52.011719-16.453125 21.145833 6.729166 33.300781 17.02539 36.464844 30.888671 3.164062 13.863282-4.084636 22.567058-21.746094 26.111329-16.052083-1.761719-24.078125-10.465495-24.078125-26.111329 0-15.645833 1.500651-32.305338 4.501953-49.978515 3.605469-16.222656 17.379557-30.897787 41.322266-44.025391 23.942708-13.127604 39.222005-8.858073 45.83789 12.808594 3.259115 19.132812-2.091145 31.544922-16.050781 37.236328-13.959635 5.691406-27.57487 5.691406-40.845703 0-20.175781-8.471354-30.263672-20.883464-30.263672-37.236328 0-16.352865 2.799479-33.817708 8.398438-52.394531 9.290364-20.815105 22.093099-31.222657 38.408203-31.222657s18.017578 13.407552 5.107422 40.222657c-13.006511 9.634114-24.723308 15.893229-35.150391 18.777343-10.427083 2.884115-25.925535 2.884115-46.495355 0-15.043461-11.792968-22.565192-22.460286-22.565192-32.001953 0-14.3125-2.728515-44.041015 13.902344-55.097656s35.628906-9.705078 43.251953 10.5c5.082031 13.470052-4.555339 34.772786-28.912109 63.908203-14.115886 18.842448-34.759115 24.18099-61.929688 16.015625-27.170573-8.165364-38.464193-29.897135-33.880859-65.195312 3.925781-9.407552 13.759765-15.964193 29.501953-19.669922 15.742187-3.705729 24.722656 10.347005 26.941406 42.158203-7.464844 31.152344-20.461588 51.589193-38.990234 61.310547-27.792969 14.582031-41.058594 17.986328-45.136719 14.582031s-30.2363281-8.205078-36.5703125-28.703125c-4.2226562-13.665365-2.1705729-29.395182 6.15625-47.189453 19.1158854-22.830729 35.328125-24.588542 48.6367185-5.273438 13.308594 19.315105 3.002604 51.736329-30.9179685 97.263672-17.8710937 19.792194-24.7545573 37.52722-20.6503906 53.205078 4.1041666 15.677858 12.2207031 23.522259 24.3496094 23.533204 25.1523437-6.067709 40.8795577-15.015625 47.1816407-26.84375s8.619141-28.459636 6.951172-49.894532c-14.463542-35.071614-29.509115-52.607422-45.136719-52.607422-23.4414062 0-57.15625-.607421-61.8320312 21.927735-4.6757813 22.535156-9.2324219 38.097656 9.6269531 43.117187 12.5729166 3.346354 33.1289062-8.780599 61.6679687-36.380859 6.3085934-13.833333 6.3085934-27.61849 0-41.355469-6.3085937-13.736979-16.2825521-20.173828-29.921875-19.310547-9.4114583 3.088542-11.2610677 8.643229-5.5488281 16.664063 5.7122396 8.020833 26.2415365 29.146484 61.5878905 63.376953 14.403646 16.488281 21.605469 18.011068 21.605469 4.568359 0-13.442708 2.886719-27.042317 8.660156-40.798828 21.235677-13.559896 39.411458-13.559896 54.527344 0 22.673828 20.339844 29.033203 55.619141 18.876953 69.117188-6.770833 8.998698-16.802734 17.29427-30.095703 24.886718-9.679688.613282-19.317708-.490234-28.914063-3.310546-14.394531-4.230469-66.138671-18.605469-70.7773434-18.605469-4.6386718 0-46.8632812-12.408203-68.7128906-5.761719-21.84960937 6.646484-18.70117187 21.056641-18.70117187 24.367188 0 3.310546-1.421875 9.949218 16.11914067 18.396484 11.6940104 5.63151 28.0729166 13.272786 49.1367187 22.923828 13.7669271 11.908854 13.7669271 18.824219 0 20.746094s-30.1458333-.085938-49.1367187-6.023438c-17.55338547-7.357825-25.23763026-18.537777-23.05273442-33.539853 2.18489583-15.002077 9.86914062-26.211449 23.05273442-33.628115 22.9518229-17.628907 42.5572916-25.507813 58.8164062-23.636719 16.259115 1.871094 29.992839 6.266276 41.201172 13.185547 12.666667 10.496621 19 20.467324 19 29.912109 0 14.167178 4.511719 24.191406-21.605469 24.191406-17.411458 0-36.0911457-4.710286-56.0390624-14.130859-15.0403646-11.266927-16.8899739-22.246745-5.5488281-32.939453 11.3411458-10.692709 28.3457031-20.488281 51.0136715-29.386719 20.921875-6.111979 39.333334-6.111979 55.234375 0 23.851563 9.167969 35.94336 14.902344 49.375 25.324219 13.431641 10.421875 30.929688 23.869932 30.929688 32.804687 0 8.934756 3.433594 30.058594-30.929688 27.121094-22.908854-1.958333-35.310546-9.599609-37.205078-22.923828-2.713541-24.975261 6.607422-44.656901 27.962891-59.044922s46.016276-14.388021 73.982422 0c25.710937 16.528646 37.495442 32.856771 35.353515 48.984375-3.21289 24.191406-13.33789 30.630859-18.833984 35.867188-5.496094 5.236328-28.464844 7.740234-50.330078 5.208984-21.865235-2.53125-41.583245-8.51251-46.185547-31.015625-3.068201-15.002077-3.935389-24.842572-2.601563-29.521484-11.003906-36.963542-20.214192-56.446615-27.630859-58.449219-11.125-3.003906-22.833984-22.892578-56.443359-11-33.6093752 11.892578-33.6582034 15.355469-45.121094 20.068359-7.6419271 3.141927-19.2311198 4.211589-34.7675781 3.208985-15.7630209-4.855469-22.4986979-10.369141-20.2070313-16.541016 3.4375-9.257813 7.6796875-17.574219 23.3730469-25.339844 10.4622396-5.177083 22.5768229-7.578776 36.34375-7.205078 26.8658855-14.813802 41.3632815-26.647786 43.4921875-35.501953 3.193359-13.28125 9.751953-37.216797-5.791016-37.216797-10.361979 0-15.5429684 1.238932-15.5429684 3.716797-3.2304687 12.158854-1.9257812 21.567708 3.9140624 28.226562 5.839844 6.658855 15.352865 22.652344 28.539063 47.980469 13.277343 12.595052-.694662 17.382162-41.916016 14.361328-41.2213542-3.020833-55.9947917-22.04362-44.3203125-57.068359 32.4921875-31.588542 63.1464845-42.755208 91.9628905-33.5s50.188151 40.858724 64.115234 94.810547c-2.265624 35.610677-12.771484 54.346354-31.517578 56.207031-18.746093 1.860677-27.371093-12.014323-25.875-41.625 10.798177-30.81901 16.197266-51.172526 16.197266-61.060547s0-75.197265 0-195.92773425" fill="none" stroke="#000" stroke-width="4"/>
                    <path id="curve-3" class="hidden" d="m116.026681 622v-173.934591c-.168569-11.968667-2.103028-20.269609-5.803375-24.902827-3.700347-4.633219-2.608116-14.584174 3.276694-29.852867 14.189635-14.514797 29.482485-20.940251 45.878552-19.276363 16.396067 1.663889 26.678875 9.782139 30.848425 24.35475.385041 21.194633-7.245258 31.79195-22.890898 31.79195s-25.216179-8.787159-28.711617-26.361476c-1.951803-26.404836 5.829969-43.438592 23.345316-51.101267s31.369329-9.241577 41.561948-4.736706c17.842574 8.176064 21.721319 19.742345 11.636235 34.698841-10.085084 14.956497-27.022522 14.956497-50.812313 0-16.131972-17.847199-20.994481-38.447504-14.587527-61.800914 6.406954-23.353411 17.241887-38.586258 32.504798-45.698544 14.791148-4.582342 27.480177-2.280186 38.067087 6.906468 10.586911 9.186653 7.96909 24.036772-7.853461 44.550356-10.298996 6.766557-21.243775 10.149836-32.834338 10.149836-11.590562 0-27.429879-10.311137-47.517951-30.933412-12.742219-21.628238-16.002931-38.70998-9.782139-51.245224 6.220793-12.535243 15.359461-22.230083 27.416004-29.084517 16.907143-7.996841 26.868505-3.082646 29.884086 14.742584 3.015582 17.82523-6.94578 36.12627-29.884086 54.90312-19.916942 13.802528-38.279843 20.703792-55.0887023 20.703792-16.808859 0-30.7293277-7.675395-41.7614061-23.026183-10.6088795-22.700111-10.6088795-42.193277 0-58.479497s26.1307976-20.730965 46.5657543-13.334234c17.5222841 23.066652 21.1021311 43.417779 10.7395391 61.053379-10.3625915 17.6356-26.326209 34.135153-47.8908523 49.498661-16.5336641 8.403851-31.0999158 9.222498-43.6987551 2.455941-12.59883936-6.766557-14.31476058-19.723844-5.1477637-38.871859 14.9033077-12.899473 29.7875367-14.768601 44.6526871-5.607386 14.8651504 9.161216 22.2838502 31.590179 22.2560995 67.286891-11.8865702 33.601541-30.4061471 52.491128-55.5587309 56.66876-25.15258368 4.177633-28.93593558-13.910073-11.3500557-54.263117 20.4812079-18.639252 39.1337572-27.043682 55.9576478-25.213289 16.8238907 1.830393 32.3515903 11.820662 46.5830983 29.970807 10.118369 12.525994 12.226848 22.291945 6.325436 29.297852-5.901411 7.005907-13.524195 8.698703-22.8683501 5.078387-4.0157644-3.845791-2.8120758-10.695023 3.6110661-20.547694 6.423142-9.852672 12.842236-22.286741 19.257284-37.302208-2.295218-31.269311-4.403697-50.753226-6.325436-58.451746s-1.921739-101.437076 0-281.2156685" fill="none" stroke="#000" stroke-width="4"/>
                </svg> 
            </section>
            <div id="smooth-wrapper">
                <div id="smooth-content">
                    <section id="section-1" class="grid items-center w-screen h-screen pl-14">
                        <h2>Section 1</h2>
                    </section> 
                    <section id="section-2" class="grid items-center w-screen h-screen pl-14">
                        <h2>Section 2</h2>
                    </section> 
                    <section id="section-3" class="grid items-center w-screen h-screen pl-14">
                        <h2>Section 3</h2>
                    </section> 
                    <section id="section-4" class="grid items-center w-screen h-screen pl-14">
                        <h2>Section 4</h2>
                    </section> 
                    <section id="section-5" class="grid items-center w-screen h-screen pl-14">
                        <h2>Section 5</h2>
                    </section> 
                </div>
            </div>       
        </main>
        <script type="module" src="dist/scripts/script.js?v=<?= uniqid(); ?>"></script>
    </body>
</html>