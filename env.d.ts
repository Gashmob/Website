/// <reference types="vite/client" />

declare interface GReCaptcha {
  enterprise: {
    ready(callback: () => void): void;
    execute(token: string, options: object): Promise<string>;
  };
}

declare let grecaptcha: GReCaptcha;
