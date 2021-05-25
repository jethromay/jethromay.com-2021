@extends('_layouts.main')

@section('body')
    <article itemscope="itemscope" itemtype="http://schema.org/Article">
        <section class="grid grid-cols-2" itemprop="articleSection">
            <div class="flex flex-grow flex-col">
                <h1 class="font-bold text-6xl mb-0">Hey, I'm Jethro.</h1>
                <p class="my-4">I am a full-stack Laravel & WordPress developer from South Africa, with a passion for the web and sharing what I know.</p>
                <p class="mb-4">Right now, I am a senior web developer at Minttwist, a full-service digital agency building custom websites & systems for some of the biggest companies in the world.</p>
                <div class="flex justify-start items-center text-gray-500">
                    <a class="flex items-center mr-3" href="https://twitter.com/jethromay91" aria-label="Twitter link" title="Twitter">
                        <svg class="fill-current w-6 h-6" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M6.29 18.25c7.55 0 11.67-6.25 11.67-11.67v-.53c.8-.59 1.49-1.3 2.04-2.13-.75.33-1.54.55-2.36.65a4.12 4.12 0 0 0 1.8-2.27c-.8.48-1.68.81-2.6 1a4.1 4.1 0 0 0-7 3.74 11.65 11.65 0 0 1-8.45-4.3 4.1 4.1 0 0 0 1.27 5.49C2.01 8.2 1.37 8.03.8 7.7v.05a4.1 4.1 0 0 0 3.3 4.03 4.1 4.1 0 0 1-1.86.07 4.1 4.1 0 0 0 3.83 2.85A8.23 8.23 0 0 1 0 16.4a11.62 11.62 0 0 0 6.29 1.84"></path>
                        </svg>
                    </a>
                    <a class="flex items-center mr-3" href="https://github.com/jethromay" aria-label="Github link" title="GitHub">
                        <svg class="fill-current w-6 h-6" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M10 0a10 10 0 0 0-3.16 19.49c.5.1.68-.22.68-.48l-.01-1.7c-2.78.6-3.37-1.34-3.37-1.34-.46-1.16-1.11-1.47-1.11-1.47-.9-.62.07-.6.07-.6 1 .07 1.53 1.03 1.53 1.03.9 1.52 2.34 1.08 2.91.83.1-.65.35-1.09.63-1.34-2.22-.25-4.55-1.11-4.55-4.94 0-1.1.39-1.99 1.03-2.69a3.6 3.6 0 0 1 .1-2.64s.84-.27 2.75 1.02a9.58 9.58 0 0 1 5 0c1.91-1.3 2.75-1.02 2.75-1.02.55 1.37.2 2.4.1 2.64.64.7 1.03 1.6 1.03 2.69 0 3.84-2.34 4.68-4.57 4.93.36.31.68.92.68 1.85l-.01 2.75c0 .26.18.58.69.48A10 10 0 0 0 10 0"></path>
                        </svg>
                    </a>
                    <a href="https://dev.to/jethromay" aria-label="Dev.to link" title="Dev.to">
                        <svg class="fill-current w-6 h-6" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path d="M120.12 208.29c-3.88-2.9-7.77-4.35-11.65-4.35H91.03v104.47h17.45c3.88 0 7.77-1.45 11.65-4.35 3.88-2.9 5.82-7.25 5.82-13.06v-69.65c-.01-5.8-1.96-10.16-5.83-13.06zM404.1 32H43.9C19.7 32 .06 51.59 0 75.8v360.4C.06 460.41 19.7 480 43.9 480h360.2c24.21 0 43.84-19.59 43.9-43.8V75.8c-.06-24.21-19.7-43.8-43.9-43.8zM154.2 291.19c0 18.81-11.61 47.31-48.36 47.25h-46.4V172.98h47.38c35.44 0 47.36 28.46 47.37 47.28l.01 70.93zm100.68-88.66H201.6v38.42h32.57v29.57H201.6v38.41h53.29v29.57h-62.18c-11.16.29-20.44-8.53-20.72-19.69V193.7c-.27-11.15 8.56-20.41 19.71-20.69h63.19l-.01 29.52zm103.64 115.29c-13.2 30.75-36.85 24.63-47.44 0l-38.53-144.8h32.57l29.71 113.72 29.57-113.72h32.58l-38.46 144.8z"></path>
                        </svg>
                    </a>
                </div>
            </div>
            <img class="rounded-lg shadow-lg max-w-xs" src="/img/me.jpg" alt="Jethro May">
        </section>
    </article>
@endsection
