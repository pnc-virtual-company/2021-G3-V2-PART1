<template>
  <header>
     <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-flex" id="navbarTogglerDemo01">
           <div class="navbar">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item mr-4">
                        <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBISEhITERISERIZERERGBIPDxEREhIUGBQZGRgYGBgbIS8kGx0qIRgYJTclKi4xNDQ0GiM6PzozPi0zNDEBCwsLEA8QHRISHTMjIyMzMTMzMzMzMzMzMzMxMzMzMzMzMzMzMzEzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzM//AABEIAOEA4QMBIgACEQEDEQH/xAAcAAACAgMBAQAAAAAAAAAAAAAAAQIDBQYHBAj/xABLEAACAgEBAwYICAsGBwEAAAABAgADEQQFEiEGBzFBUWETFCJScYGRsTJykqHBwtHSFSVCVGJ0gpOisrMXJDQ1Q2NTZHOj4vDxI//EABoBAQADAQEBAAAAAAAAAAAAAAABAgMEBQb/xAAzEQACAgECAwUECgMAAAAAAAAAAQIRAxIhBDFRE0FhcbEyodHwIiMkM0JScoGR8RRiwf/aAAwDAQACEQMRAD8A16EIT6k+SCEIQAhCEAIQhACEIQAhCEAIQhACEIQAhCEAIQhACEIQAhCEAIQkc5PvkEpEoQhJICEIQAhCEAIQhACEIQAhCEAIQhACEIQAhCEAIQhACEDEJBNDhCEkgIQhACKOQd8SCUgsfHAdMaLgSupcnJ/9MtkLfctLbYcIQligQhCAEIoQBwhCAEIRQBwijgBCEROIA4RLCAOEUcAIpbqKijujdKuyH0qcGeWx88B/9lXIso2SB3j3D55OJFwI5KQbHCKEkqOKECcQAZsCeckkwdsmWUr1zP2nRqlpVlijAxHFCaGY4QiggcIoQAhFCQSOEUIA4RQgDhCItjpiwMnHTIL5RyejslRJY909Albsu1p8whFHLFAzPVRpSblqbgS61kd5YD6YU6Ms9Cn/AFSoHoawp9UzNvXnbgrA4ePZ9Qbe9wmOTKo2vBv+DfHibp+KX8mN5X1ka/VIOu5j8vDD+aYsUlGYN0qzL6wcGbPy10343I89tO3tCr7xPBt/RFdbqa16rb7AMfk4azHsmeGdqN/lv0RtxGOnKvzV/NsxEIswnUcQ4RQzAHmUWPn0R2v1CUykmaxj3smoycT0gYlVK9cszJiis33DhFCWKDhFCAOEUcAUIswzIJHCLMMwBwizEWA6YA2bHTPO75+yJmzLKl65RuzRLSrZYi4ElFmGZco9xwJizLtBV4W+moDO/dWh9DOAfmMhyUVbCi5OkbdVocbT2bTj4NGnsbuKq9h/il2k0+eUVn6Nj2e3T/8AlM7Tp97btj44V6JPUWwo+YtKNmaX8f6t+oUBvWy1KPmzPI7RtP8AR6s9zskmv1+iPBy2o/GmjbzvF1+Teftj21ox+HKwR5NqgnPQc0vWf5ZkuWdGddstsdNpU+p62H0y3lNTjaWzLB1tZWT6OI/maTGdRiusJL1+BSeP6U3/ALxfp8TlV1ZRmQ9KsyH0qcH3SEzPLDT+C1+pTGAbd8d++of3sZhcz1YS1RT6nkTjpk49Gxyux8cBB7MemUZiT7hGPeONVyZGXVLgZlUrLt0i2EWYZmhiOEWYZgDhFmGYA4RZhAIwihIssOEUTNiLFEmbEoZsxM2ZETNys0jGiaLmXyKjEeZZbFG7HCKQd8dHTLWErHY+OA6fdNh5u9L4TaNJ6kD2n1IVH8TLNXzOic0emzZqrT+SldYPxmLN/Ks5OJnWOTOvhYXkijdNnaf8Ya6z9DSVDuwjMf5l9kp2dV+NNc/ZRpB8oP8Acma02n3Xubz7A/qFSJ9T55RpaManU2ecunX1KH+8Z5Grn5L/AIexp5ebfqY3lRTm7ZrdmuVfbWzfUl3KKnefQ2DpTW15P6LIy+8rPZtTT75058zUI47sIw+tLtdp/CKo6xbS/wAixWPzAwp+z+/vDj7XjRzTnR027qqrOp6gP2kY5+ZlmkM2BOo86unzpqbetLSh+K6n6VE5MzZnrcJkvCvDY8fi8dZpeO4ycyMIpuZFiLky+QrXAkpeOxlJ2xwihLWVJQJkZU7ZOBIbJSstQ54xxCEEMcIoSbAswzFIs2JWy1EmbEpZsyLNmKUcrNFGh5lta44yFa5lsmK7yJPuJZhmRkXfEtdFErHZZj0ynMRMJm3Zqo0OezZuuuocPRY9bD8pTjPcR0MO4zxS9RgRV7MN1yOl7B5xQcJrU3T0eGqBK/tJ0j0jPoE3zR6uu1BZU6WIfy0YMD3cOvunz1PZszal2lffosatuGd0+S3cyng3rnLl4GMt4beh1YePlHaate877qLURS7sqqvlFnIVVx1knomk7f5w6q8ppFFzdHhXytS+gdL/ADDvnPdr7c1OrbOosLgHIQeTWvoUcM9/TMTY+fRKYuCjHee/h3F8vHSk6gq9T27X2zqNW29fY1nYucIvxVHATHxQnYklsjjbb3Y5OsZMrl9YwJZFZPYnmGYopcyJZhmKRZsRZNBY+PTFUOuVdJl4lU7LNUqJZhmRhLlCWYSMIBFmxKWbMRbMUxbNkqHGozIy5RiFuS3RITMcl9mJq9VXRY7orh8Mm7vbyqWxxHcZh8z0aDaD6axbqiFsUkqSAwyQVPA9xMmd6XXMrCtStbHTf7MtN/x7vZV92QPNdpvznUeyr7s2bkntB9ToqL7d3fcOW3RgcHZRgdXACe3auoavT32JjeSm11yMjeVCRkdmRPGefMnTke0uHwtWoo4vy12BVoLkqrsssLVeEY2buRlyq43QPNM2Dk3yC02r0tWoa+9WdWLKng90MGKkDK56ppW2dr3ayzwuoZWfcVBuqFUKCSAB6WPtm5c2G2tQbk0m8p04S2zdKDeU5zwbs3m6525O0jiTvdczjxPG8r22fIzK81+lH+vf7KvuyGp5tKQjGu+42BWKh/B7pbHkg4XOMzoMDOFcRlX4mdz4XE/wnzgcg4Iwegg9RizNg5d7O8X11wAwj4uT0Pne/jDzz8kND4zrtPWRlQ/hH7NxPKOfScD1z2VlWjX3VZ4rwvX2ffdG6aTm1qatDbfclhRS6qK91WIBIGRnAORLP7LdN+c6j2VfdnQBCeO+Jyv8R7S4XEvwnPLebDSqrMdRqMBS3RV1DPmzlWZ17nL23qNKlSUlVS1bkclAzcAo4E9HBj1TSeb7YY1erHhBmqpRa4PEMc4RT2gnJ9C9868GSSg8k3aOPPji8ihBUy7k5yE1OqVbHK0VEZVnXesYdRVOzvJE3Gjm20oHl23WHuNaD1DdPvm84mr8r+VaaFVVVFl7glVJwqr0bzkdWegdcw/yM2SVRdeR0f4+HHG5K/M8v9nOh/3/AN6Puyqzm10Z+DbqF/aQ+9Zq55yNdn4NAHZ4JvvTd+Q/KC3XU2PcqK6W7n/5ggbpQEHiTxzvS2RcRjWqUveZ43w2SWmMfccx5W7GXQ6nwKO1i+DR95lAYbxYYOOn4I498152zNs5zrM7RsHZXUv8OfpmozuxSbgm+hw5YKOSSXUtqHXLMyI4Qm6MHuSzDMjCSQSzCRhAPNHFGozMTcnWvXLMxRM2JfkZPckzYlDNmJmzCVbsuo0d45vv8s0vxbP6rzJ7e/wmq/Vr/wCm0xnN9/lml+LZ/VeZPb3+E1X6tf8A02niT+8fme5D2F5HzoJ0Dmkozqr383Tlfluh+oZoFQzOn80NX+Lf/oIP+4T71nqcS6xS+e88rhvvYr55G8bZ2kumWpmwFbUVUnPUHyM+rp9UyYmhc7NhGloUHGdRvcP0a3H1hNm5MbS8a0lF3SzIFb46kq/zqZ5jhWNT6to9SOT6xw8EzV+djZ+9RVqVHGt9xj+g/QT6GA+VPDzQ7O4ajUsOndoU+jyn96eyb9trQDU6e6g/l1sgPmsR5J9RwfVPLyS2YdLo6KWGHCBnH+43lN7Cceqadt9To8fdzM+xXba/D38i7bu010tQsOMm2moA9Ze1VPsBY+qZOcv52tp4fTUKfgHxlx2HO6nzb/tnTkbIB7QD7ZnKGmEX1s0jO5yXSjQOd6rOm079l5X1MjH6okOaCgCjU2Y4taiZ7kTeH9QzI86le9s/Pm30t6Mkr9aeXmkI8TuHZqCfbWn2TdP7N+5g19oXkb9OH84GoL7R1GehDWg7gtYPvJPrncJwnl0pXaOqB89W9RrQyeB9t+XwI4/7teZhk07sMqjsO1UYg+sCZDZ20tdpQw0xuq3iCwWkNnHQfKUzoXIHlDpE0en0z3pXcpddyzKZL2uyhWPBiQw6D1zfJtl4ppuLiY4uEUkpxkfN+0tXdbY1mpLNa2N5nQIxAGBwAA6B2Tz1jrm5c6642gvfpaj/AB2D6JqC8BOnDLVBPkcuZaZNcyWYZizDM2MB5hmLMSnPGBROKLMIFHnlqjErQdcmTM0aPoSLYlTNmJmzIw2SlQ8wzIzZOQKIdo0G01rWvhXbwhUJwrYDp4dJHslJS0pvoaRjqaXU6vze/wCWaT4j/wBV5lNvf4TVfq1/9NpJdp6UAAX0AdgurA98l+FNN+cU/vk+2eO3crPYSSilZ86J0Cdb5pqsaO1/O1LexUUfTMTyqpofa+hZHpNbCnfKsm75FjM28Rw4qR09k6Iu0dMowt1AHYLawPfO3ic+qCSXPc4uGwaZt3y2NA54L8eKJ1Hw7+zwYHvMlzR7UyL9Kx6CL0BPUcK4HrCn9ozcdranS3UW1tdQ29W6jNtZwWUgEcZxXkdtTxXW6e0nCb4rfqG4/ksT3DIb9mVxvXhcK5f2WyLRmU+v9H0LFPF+FdN+cUfvq/tmI5U8oKadHqHrurazwZRAliM2+/kqcA54E59U40m3R2uSSs49yt2l41rNTbnKGwonHhuL5CkekDPrnd9iXeE0umfz9PS/ykU/TOPc2C1DXFrmRUXTWMDaVC7xZFAG914LewzsX4U03VqKP31f2zp4ppVBLkcvCp7zb5mI5wKt7ZupHYtb/ItRj7pqXNHrwH1NBPwlS1R2lSVf3p7J0M7T0x6b6CO+2s/TOS8r9b4rtU6jSOmd2qwGshkJ3d1lO7wwcHI74wfThLF139CM/wBCay9NjtM5Vzo7FcXLq61Zq2QJYUBO668AzdgK4Gf0e+bXsHlrpNUo3rF09uBvV3MF4/oseDD5+4TZldTxDKe8EGZQlLDO2jacY5oUmfOeyyfGdP8ArFP86z6Qle4vYPYJLIk5s3aNbVRGDD2aauzkPO0n9+pb/lUHsss+2aPmb9zuD+86c9tDD2OftmgZnpcM/qonmcV97IlmLMWYmbE3swoGbqkxK17ZPMiyWPMIswk2VIZkGbMizZkZnZqokoSMJBYlCRjgiiSrLJFRiGZdMqyUg5g7TKcmNElupTwpVaa1OotLtur4NCOBPYzFF/alJTpWWhC2YpkxwIwewjBk2pcAMUcKQSCUYBgBk4PXw4zfDp01Wq2fqbn097Pc2m1Hi7lqmtRHfTg5A+EoVcEfkzX9HtraFj6kF7LidPqRbVY58HWm4yuwUnCFM8MY7OuZLK3yRs8SjzMAF4EgcBjJA4DPRnsk0pZuKozDtVSfdN42FpUr09eltu09fjaWPctr7tyixQul3BukeSQH4kfDmJ2Lbdp9NtSvfsqdEpBCOyblg1CoxGDwPDGeyO1u6+d6HY1V/Pea4tbMSApYjpAUkj1S1dLYOlHHHHFGH0Td+TWrssOzr7Xbwx1tunW0kiy7TCoMyuR8NVfA45mPt2jZ4NPF9VfqUJpe6y5nV6rBqLBXurvncyoA6TkceHRCyu6r53+AliVXZqzIQcEEHsK4Pslo09nRuP243G+yb9typbdW2sYby6WzUpcOADGg+E04Px99U792Y3bHKO3T682PZY9TabTJbWtjLvVvp0L7nHyWBZmBGMH0mSszlyXd8+7ciWBRe77zT3Rt3e3W3fO3Tu+3olSOy/BYr8UlfdNg5Vak0n8HVWWNRQxDF2422thixUHAVcgKvVxPSZrcvGTkrKSioui/xl/Ps/eN9saah/Pf9432yiWLJSKtlrWM3wmLfGJPvkMxZizLlCWZBmzB2kU6ZVlkixY8xZizLFSWYSOY4sUU5hmRhMzUeYZihAJZkklYlgkkMlmJmiLSsmLISJZnt0e176Ueuqwoj8HXcrYPwxxJBM8EJVpPmXToyFG2NQlTUJaUqY5KBU4nt3sZz2HPCX38o9ZYpV73YEqW8msM+6QRvsF3n4gcGJmIhI0roTqlysyWp21qbLUuewvagAVyleRjo4buD6xPQOU+ty7eHbL4Lk11Hfx0Z8nj0TCSSxpi+4a5dTLJt7ViwXeHsNoTcV23WKJwO6oIwo4dQEtflHq2ABu4BlfArpA3l4qTheOO+YfMMydEehXXLqZO/bmqsLl7mYua2fggDmtt5CwAwcHj75XqttaiyxLXsL2IMI5SvgPRu4PrExzNIw0uhKcup7No7Su1L+EvsNj43d4qinGc8d0DPTPLmRhHIPckJZILHLIoyWYEyOZBjFhIeZNZUJZCJZLMMyMMybK0SzCRzCLBTCKEzs1ocIo1iwTWMmRzIkybK1YyYooSLLUOEUIsUOEUIsUOTEgslmSQyWYi0RMgTFkJDhFCRZahxiRklkgnmGZHMCZNlaGzSOZEmErZaiayWZGEkqSzDMjmEmwSzCRhFkFcJHMeZmajkxICBMkhokTIxRZkE0ShFCAOEjmOAOEjmSEAkI8yOYiZJWhkxRQkFqHCKEAkI5EGPMkhksyJMRMUChxiRzJAwGSzDMjmGYIolmGZHMMwKJZhI5hAojFCEguSkYQggBAwhBIQhCAOKEIARiEIIY4oQgChCEEhAQhAJCEIQVEYoQgkJKEIIYo4QkAIQhACEIQD/9k=" class="img-rounded" alt="Cinque Terre" width="50" height="50"> 
                    </li>
                    <li class="nav-item active mr-3">
                        <router-link to="/allevent" class="nav-link">All EVENTS </router-link>
                    </li>
                    <li class="nav-item mr-3">
                        <router-link to="/myevent " class="nav-link">MY EVENTS</router-link>
                    </li>
                    <li class="nav-item mr-3">
                        <router-link to="/category" class="nav-link">CATAGORIES</router-link>
                    </li>
                    <li class="nav-item mr-3">
                        <router-link to="/findEvent" class="nav-link">FIND EVENT</router-link>
                    </li>
            </ul>
           </div>
           <div class="logout">
               <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="d-flex mr-3">
                         <input id="search-focus" type="search" class="form-control" draggable="search"/>
                         <button type="button" class="btn btn-primary mr-2">
                            <i class="fas fa-search"></i>
                         </button>
                    </li>
                    <li>
                        <button class="btn btn-outline-danger">logout</button>
                    </li>
               </ul>
           </div>
            
        </div>
        </nav>
  </header>
</template>

<script>
export default {

}
</script>

<style>
#navbarTogglerDemo01{
    display: flex;
    justify-content: space-between;
}


</style>