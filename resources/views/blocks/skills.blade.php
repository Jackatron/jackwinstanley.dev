<section id="skills" class="py-4 md:py-8 lg:py-12 pb-14 bg-light-blue background-cube scroll-mt-16">
    <div x-data="{activeTab: 1}" class="site-container">
        <h2 class="text-3xl lg:text-3xl xl:text-4xl text-white text-center font-bold">My Skill Set</h2>

        <div class="flex flex-wrap gap-2 sm:gap-4 justify-center sm:justify-normal bg-white mt-4 md:mt-8 rounded-lg p-2 px-3 max-w-max mx-auto mb-8 sm:mb-14">
            <a @click.prevent="activeTab = 1" class="tab-btn active" :class="{'active': activeTab == 1}" href="">
                Technologies
            </a>
            <a @click.prevent="activeTab = 2" class="tab-btn" :class="{'active': activeTab == 2}" href="">
                Skills
            </a>
            <a @click.prevent="activeTab = 3" class="tab-btn" :class="{'active': activeTab == 3}" href="">
                Experience
            </a>
        </div>

        @include('blocks.partials.skills-technologies')

        @include('blocks.partials.skills-skills')

        @include('blocks.partials.skills-experience')
    </div>
</section>